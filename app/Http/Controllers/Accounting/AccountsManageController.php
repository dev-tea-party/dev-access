<?php

namespace App\Http\Controllers\Accounting;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\AccountsManage;
use Illuminate\Http\Request;
use Session;

class AccountsManageController extends Controller
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
            $accountsmanage = AccountsManage::where('acc_bal_code', 'LIKE', "%$keyword%")
				->orWhere('acc_bal_name', 'LIKE', "%$keyword%")
				->orWhere('acc_bal_current', 'LIKE', "%$keyword%")
				->orWhere('acc_bal_type', 'LIKE', "%$keyword%")
				->orWhere('acc_bal_desc', 'LIKE', "%$keyword%")
				
                ->paginate($perPage);
        } else {
            $accountsmanage = AccountsManage::paginate($perPage);
        }

        return view('accounts-manage.index', compact('accountsmanage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('accounts-manage.create');
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
        
        AccountsManage::create($requestData);

        Session::flash('flash_message', 'AccountsManage added!');

        return redirect('accounting/accounts-manage');
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
        $accountsmanage = AccountsManage::findOrFail($id);

        return view('accounts-manage.show', compact('accountsmanage'));
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
        $accountsmanage = AccountsManage::findOrFail($id);

        return view('accounts-manage.edit', compact('accountsmanage'));
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
        
        $accountsmanage = AccountsManage::findOrFail($id);
        $accountsmanage->update($requestData);

        Session::flash('flash_message', 'AccountsManage updated!');

        return redirect('accounting/accounts-manage');
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
        AccountsManage::destroy($id);

        Session::flash('flash_message', 'AccountsManage deleted!');

        return redirect('accounting/accounts-manage');
    }
}
