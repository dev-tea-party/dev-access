<?php

namespace App\Http\Controllers\Projects;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ProjectManage;
use App\JobOrder;
use Illuminate\Http\Request;
use Session;

class JobOrderController extends Controller
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
            $joborder = JobOrder::where('jo_code', 'LIKE', "%$keyword%")
				->orWhere('jo_desc', 'LIKE', "%$keyword%")
				->orWhere('jo_cost', 'LIKE', "%$keyword%")
				->orWhere('prj_id', 'LIKE', "%$keyword%")
				
                ->paginate($perPage);
        } else {
            $joborder = JobOrder::paginate($perPage);
        }

        return view('job-order.index', compact('joborder'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $projects = ProjectManage::all();
        $projectcodes = $projects->pluck('prj_code','prj_id');

        return view('job-order.create',compact('projectcodes'));
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
        
        JobOrder::create($requestData);

        Session::flash('flash_message', 'JobOrder added!');

        return redirect('projects/job-order');
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
        $joborder = JobOrder::findOrFail($id);

        return view('job-order.show', compact('joborder'));
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
        $joborder = JobOrder::findOrFail($id);

        $projects = ProjectManage::all();
        $projectcodes = $projects->pluck('prj_code','prj_id');

        return view('job-order.edit', compact('joborder','projectcodes'));
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
        
        $joborder = JobOrder::findOrFail($id);
        $joborder->update($requestData);

        Session::flash('flash_message', 'JobOrder updated!');

        return redirect('projects/job-order');
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
        JobOrder::destroy($id);

        Session::flash('flash_message', 'JobOrder deleted!');

        return redirect('projects/job-order');
    }
}
