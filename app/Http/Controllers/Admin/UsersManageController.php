<?php

namespace App\Http\Controllers\Admin;

use Request;
use Auth;
use Hash;
use Validator;
use App\Http\Controllers\Controller;

class UsersManageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {

        $companyDetails = CompanyDetail::where('id','=',1)->first();

        return $companyDetails ? $this->edit(1) : $this->create();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin/users-manage.create');
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
        
        CompanyDetail::create($requestData);

        Session::flash('flash_message', 'User added!');

        return redirect('users-manage');
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
        $user = CompanyDetail::findOrFail($id);

        return view('admin/users-manage.show', compact('user'));
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
        $user = CompanyDetail::findOrFail($id);

        return view('admin/users-manage.edit', compact('user'));
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
        
        $companydetail = CompanyDetail::findOrFail($id);
        $companydetail->update($requestData);

        Session::flash('flash_message', 'User updated!');

        return redirect('users-manage');
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
        CompanyDetail::destroy($id);

        Session::flash('flash_message', 'User deleted!');

        return redirect('users-manage');
    }
}
