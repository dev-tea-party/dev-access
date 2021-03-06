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
    public function index(Request $request, $job_id)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $materials = Material::where(function ($query) use ($keyword) {
                    $query->where('mat_item_code', 'LIKE', "%$keyword%")
                          ->orWhere('mat_item_qty', 'LIKE', "%$keyword%");
                })->where(function ($query) use ($job_id) {
                    $query->where('jo_id', '=', "$job_id");
                })
                ->paginate($perPage);
        } else {
            $materials = Material::where('jo_id', '=', "$job_id")
                ->paginate($perPage);
        }
        
        return view('materials.index', compact('materials','job_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create($job_id)
    {
        return view('materials.create', compact('job_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request, $job_id)
    {
        Material::create([
            'mat_item_code' => $request['mat_item_code'],
            'mat_item_qty' => $request['mat_item_qty'],
            'jo_id' => $job_id
        ]);

        Session::flash('flash_message', 'Material added!');

        return redirect('/projects/job-order/'.$job_id.'/materials');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($job_id, $id)
    {
        $material = Material::findOrFail($id);

        return view('materials.show', compact('material'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($job_id, $id)
    {
        $material = Material::findOrFail($id);

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
    public function update(Request $request, $job_id, $id)
    {   
        $material = Material::findOrFail($id);
        $material->update([
            'mat_item_code' => $request['mat_item_code'],
            'mat_item_qty' => $request['mat_item_qty']
        ]);

        Session::flash('flash_message', 'Material updated!');

        return redirect('/projects/job-order/'.$job_id.'/materials');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($job_id, $id)
    {
        Material::destroy($id);

        Session::flash('flash_message', 'Material deleted!');

        return redirect('/projects/job-order/'.$job_id.'/materials');
    }
}
