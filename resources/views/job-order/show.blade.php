@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Job Order {{ $joborder->jo_code }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/projects/job-order') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/projects/job-order/' . $joborder->jo_id . '/edit') }}" title="Edit JobOrder"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['projects/joborder', $joborder->jo_id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete JobOrder',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $joborder->jo_id }}</td>
                                    </tr>
                                    <tr><th> JO Code </th><td> {{ $joborder->jo_code }} </td></tr><tr><th> Description </th><td> {{ $joborder->jo_desc }} </td></tr><tr><th> Cost </th><td> {{ $joborder->jo_cost }} </td></tr><tr><th> Project Code </th><td> {{ $joborder->prj_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
