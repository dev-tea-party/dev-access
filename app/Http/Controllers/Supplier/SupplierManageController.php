<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\SupplierManage;
use Illuminate\Http\Request;
use Session;

class SupplierManageController extends Controller
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
            $suppliermanage = SupplierManage::where('sup_name', 'LIKE', "%$keyword%")
				->orWhere('sup_cat_id', 'LIKE', "%$keyword%")
				->orWhere('sup_vat_num', 'LIKE', "%$keyword%")
				->orWhere('sup_op_bal', 'LIKE', "%$keyword%")
				->orWhere('sup_addr_1', 'LIKE', "%$keyword%")
				->orWhere('sup_addr_2', 'LIKE', "%$keyword%")
				->orWhere('sup_contact_name', 'LIKE', "%$keyword%")
				->orWhere('sup_contact_email', 'LIKE', "%$keyword%")
				->orWhere('sup_tel_num', 'LIKE', "%$keyword%")
				->orWhere('sup_mobile_num', 'LIKE', "%$keyword%")
				->orWhere('sup_fax_num', 'LIKE', "%$keyword%")
				->orWhere('sup_website', 'LIKE', "%$keyword%")
				->orWhere('sup_bank_acct_holder', 'LIKE', "%$keyword%")
				->orWhere('sup_bank_acct_num', 'LIKE', "%$keyword%")
				->orWhere('sup_bank_acct_type', 'LIKE', "%$keyword%")
				->orWhere('sup_bank_name', 'LIKE', "%$keyword%")
				->orWhere('sup_bank_code', 'LIKE', "%$keyword%")
				
                ->paginate($perPage);
        } else {
            $suppliermanage = SupplierManage::paginate($perPage);
        }

        return view('supplier-manage.index', compact('suppliermanage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('supplier-manage.create');
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
        
        SupplierManage::create($requestData);

        Session::flash('flash_message', 'SupplierManage added!');

        return redirect('suppliers/supplier-manage');
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
        $suppliermanage = SupplierManage::findOrFail($id);

        return view('supplier-manage.show', compact('suppliermanage'));
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
        $suppliermanage = SupplierManage::findOrFail($id);

        return view('supplier-manage.edit', compact('suppliermanage'));
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
        
        $suppliermanage = SupplierManage::findOrFail($id);
        $suppliermanage->update($requestData);

        Session::flash('flash_message', 'SupplierManage updated!');

        return redirect('suppliers/supplier-manage');
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
        SupplierManage::destroy($id);

        Session::flash('flash_message', 'SupplierManage deleted!');

        return redirect('suppliers/supplier-manage');
    }
}
