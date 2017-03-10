<?php

namespace App\Http\Controllers\Projects;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ProjectManage;
use Illuminate\Http\Request;
use Session;

class ProjectManageController extends Controller
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
            $projectmanage = ProjectManage::where('prj_code', 'LIKE', "%$keyword%")
				->orWhere('prj_name', 'LIKE', "%$keyword%")
				->orWhere('prj_desc', 'LIKE', "%$keyword%")
				->orWhere('prj_start', 'LIKE', "%$keyword%")
				->orWhere('prj_end', 'LIKE', "%$keyword%")
				->orWhere('prj_budget', 'LIKE', "%$keyword%")
				
                ->paginate($perPage);
        } else {
            $projectmanage = ProjectManage::paginate($perPage);
        }

        return view('project-manage.index', compact('projectmanage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('project-manage.create');
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
        
        ProjectManage::create($requestData);

        Session::flash('flash_message', 'ProjectManage added!');

        return redirect('projects/project-manage');
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
        $projectmanage = ProjectManage::findOrFail($id);

        return view('project-manage.show', compact('projectmanage'));
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
        $projectmanage = ProjectManage::findOrFail($id);

        return view('project-manage.edit', compact('projectmanage'));
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
        
        $projectmanage = ProjectManage::findOrFail($id);
        $projectmanage->update($requestData);

        Session::flash('flash_message', 'ProjectManage updated!');

        return redirect('projects/project-manage');
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
        ProjectManage::destroy($id);

        Session::flash('flash_message', 'ProjectManage deleted!');

        return redirect('projects/project-manage');
    }
}
