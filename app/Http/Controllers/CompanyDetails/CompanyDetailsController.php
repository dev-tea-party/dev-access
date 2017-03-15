<?php

namespace App\Http\Controllers\CompanyDetails;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\CompanyDetail;
use Illuminate\Http\Request;
use Session;

class CompanyDetailsController extends Controller
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
        return view('company-details.create');
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

        Session::flash('flash_message', 'CompanyDetail added!');

        return redirect('company');
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
        $companydetail = CompanyDetail::findOrFail($id);

        return view('company-details.show', compact('companydetail'));
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
        $companydetail = CompanyDetail::findOrFail($id);

        return view('company-details.edit', compact('companydetail'));
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

        Session::flash('flash_message', 'CompanyDetail updated!');

        return redirect('company');
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

        Session::flash('flash_message', 'CompanyDetail deleted!');

        return redirect('company');
    }
}
