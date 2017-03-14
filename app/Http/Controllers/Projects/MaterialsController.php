<?php

namespace App\Http\Controllers\Projects;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Materials as Material;
use Illuminate\Http\Request;
use Session;

class MaterialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index($id)
    {
        $perPage = 25;
        $materials = Material::where('jo_id', '=', "$id")
                ->paginate($perPage);

        return view('materials.index', compact('materials','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create($id)
    {
        return view('materials.create', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request, $id)
    {
        Material::create([
            'mat_item_code' => $request['mat_item_code'],
            'mat_item_qty' => $request['mat_item_qty'],
            'jo_id' => $id
        ]);

        Session::flash('flash_message', 'Material added!');

        return redirect('/projects/job-order/'.$id.'/materials');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id, $matid)
    {
        $material = Material::findOrFail($matid);

        return view('materials.show', compact('material'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id, $matid)
    {
        $material = Material::findOrFail($matid);

        return view('materials.edit', compact('material'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id, $matid)
    {   
        $material = Material::findOrFail($matid);
        $material->update([
            'mat_item_code' => $request['mat_item_code'],
            'mat_item_qty' => $request['mat_item_qty']
        ]);

        Session::flash('flash_message', 'Material updated!');

        return redirect('/projects/job-order/'.$id.'/materials');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id, $matid)
    {
        Material::destroy($matid);

        Session::flash('flash_message', 'Material deleted!');

        return redirect('/projects/job-order/'.$id.'/materials');
    }
}
