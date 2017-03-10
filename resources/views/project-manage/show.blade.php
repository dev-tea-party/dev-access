@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Project {{ $projectmanage->prj_code }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/projects/project-manage') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/projects/project-manage/' . $projectmanage->prj_id . '/edit') }}" title="Edit ProjectManage"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['projects/projectmanage', $projectmanage->prj_id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete ProjectManage',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $projectmanage->prj_id }}</td>
                                    </tr>
                                    <tr><th> Project Code </th><td> {{ $projectmanage->prj_code }} </td></tr>
                                    <tr><th> Name </th><td> {{ $projectmanage->prj_name }} </td></tr>
                                    <tr><th> Description </th><td> {{ $projectmanage->prj_desc }} </td></tr>
                                    <tr><th> Start Date </th><td> {{ $projectmanage->prj_start }} </td></tr>
                                    <tr><th> End Date </th><td> {{ $projectmanage->prj_end }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
