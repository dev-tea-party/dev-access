<?php

namespace App\Http\Controllers\Warehouse;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\InventoryManage;
use Illuminate\Http\Request;
use Session;

class InventoryManageController extends Controller
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
            $inventorymanage = InventoryManage::where('inv_item_qty', 'LIKE', "%$keyword%")
				->orWhere('inv_item_code', 'LIKE', "%$keyword%")
				->orWhere('inv_item_desc', 'LIKE', "%$keyword%")
				->orWhere('inv_item_unit', 'LIKE', "%$keyword%")
				->orWhere('inv_item_unit_cost', 'LIKE', "%$keyword%")
				->orWhere('inv_item_condition', 'LIKE', "%$keyword%")
				
                ->paginate($perPage);
        } else {
            $inventorymanage = InventoryManage::paginate($perPage);
        }

        return view('inventory-manage.index', compact('inventorymanage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('inventory-manage.create');
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
        
        InventoryManage::create($requestData);

        Session::flash('flash_message', 'InventoryManage added!');

        return redirect('warehouse/inventory-manage');
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
        $inventorymanage = InventoryManage::findOrFail($id);

        return view('inventory-manage.show', compact('inventorymanage'));
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
        $inventorymanage = InventoryManage::findOrFail($id);

        return view('inventory-manage.edit', compact('inventorymanage'));
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
        
        $inventorymanage = InventoryManage::findOrFail($id);
        $inventorymanage->update($requestData);

        Session::flash('flash_message', 'InventoryManage updated!');

        return redirect('warehouse/inventory-manage');
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
        InventoryManage::destroy($id);

        Session::flash('flash_message', 'InventoryManage deleted!');

        return redirect('warehouse/inventory-manage');
    }
}
