<?php

namespace App\Http\Controllers\Purchasing;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\PurchaseOrder;
use Illuminate\Http\Request;
use Session;

class PurchaseOrdersController extends Controller
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
            $purchaseorders = PurchaseOrder::where('po_date', 'LIKE', "%$keyword%")
				->orWhere('po_num', 'LIKE', "%$keyword%")
				->orWhere('po_sup_id', 'LIKE', "%$keyword%")
				->orWhere('po_in_budget', 'LIKE', "%$keyword%")
				->orWhere('po_vat', 'LIKE', "%$keyword%")
				->orWhere('po_prep_user_id', 'LIKE', "%$keyword%")
				->orWhere('po_app_user_id', 'LIKE', "%$keyword%")
				->orWhere('po_status', 'LIKE', "%$keyword%")
				
                ->paginate($perPage);
        } else {
            $purchaseorders = PurchaseOrder::paginate($perPage);
        }

        return view('purchase-orders.index', compact('purchaseorders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('purchase-orders.create');
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
        
        PurchaseOrder::create($requestData);

        Session::flash('flash_message', 'PurchaseOrder added!');

        return redirect('purchasing/purchase-orders');
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
        $purchaseorder = PurchaseOrder::findOrFail($id);

        return view('purchase-orders.show', compact('purchaseorder'));
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
        $purchaseorder = PurchaseOrder::findOrFail($id);

        return view('purchase-orders.edit', compact('purchaseorder'));
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
        
        $purchaseorder = PurchaseOrder::findOrFail($id);
        $purchaseorder->update($requestData);

        Session::flash('flash_message', 'PurchaseOrder updated!');

        return redirect('purchasing/purchase-orders');
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
        PurchaseOrder::destroy($id);

        Session::flash('flash_message', 'PurchaseOrder deleted!');

        return redirect('purchasing/purchase-orders');
    }
}
