@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Materials</div>
                    <div class="panel-body">
                        <a href="{{ url('/projects/job-order/'. $id .'/materials/create') }}" class="btn btn-success btn-sm" title="Add New Material">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/projects/job-order/'. $id .'/materials', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        {!! Form::close() !!}

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th>Item Code</th><th>Qty</th><th>JO Code</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($materials as $item)
                                    <tr>
                                        <td>{{ $item->mat_id }}</td>
                                        <td>{{ $item->mat_item_code }}</td><td>{{ $item->mat_item_qty }}</td><td>{{ $item->jo_id }}</td>
                                        <td>
                                            <a href="{{ url('/projects/job-order/' . $item->jo_id . '/materials/' . $item->mat_id . '/show') }}" title="View Material"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/projects/job-order/' . $item->jo_id . '/materials/' . $item->mat_id . '/edit') }}" title="Edit Material"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => '/projects/job-order/' . $item->jo_id . '/materials/' . $item->mat_id,
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Material',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $materials->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
