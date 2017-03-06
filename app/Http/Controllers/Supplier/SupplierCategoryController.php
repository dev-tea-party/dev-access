<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\SupplierCategory;
use Illuminate\Http\Request;
use Session;

class SupplierCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $suppliercategory = SupplierCategory::where('sup_cat_name', 'LIKE', "%$keyword%")
				->orWhere('sup_cat_desc', 'LIKE', "%$keyword%")
				
                ->paginate($perPage);
        } else {
            $suppliercategory = SupplierCategory::paginate($perPage);
        }

        return view('supplier-category.index', compact('suppliercategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('supplier-category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        SupplierCategory::create($requestData);

        Session::flash('flash_message', 'SupplierCategory added!');

        return redirect('suppliers/supplier-category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $suppliercategory = SupplierCategory::findOrFail($id);

        return view('supplier-category.show', compact('suppliercategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $suppliercategory = SupplierCategory::findOrFail($id);

        return view('supplier-category.edit', compact('suppliercategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        
        $requestData = $request->all();
        
        $suppliercategory = SupplierCategory::findOrFail($id);
        $suppliercategory->update($requestData);

        Session::flash('flash_message', 'SupplierCategory updated!');

        return redirect('suppliers/supplier-category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        SupplierCategory::destroy($id);

        Session::flash('flash_message', 'SupplierCategory deleted!');

        return redirect('suppliers/supplier-category');
    }
}
