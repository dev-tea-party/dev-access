@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Suppliers</div>
                    <div class="panel-body">
                        <a href="{{ url('/suppliers/supplier-manage/create') }}" class="btn btn-success btn-sm" title="Add New SupplierManage">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/suppliers/supplier-manage', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
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
                                        <th>ID</th><th>Supplier Name</th><th>Category</th><th>VAT</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($suppliermanage as $item)
                                    <tr>
                                        <td>{{ $item->sup_id }}</td>
                                        <td>{{ $item->sup_name }}</td><td>{{ $item->sup_cat_id }}</td><td>{{ $item->sup_vat_num }}</td>
                                        <td>
                                            <a href="{{ url('/suppliers/supplier-manage/' . $item->sup_id) }}" title="View SupplierManage"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/suppliers/supplier-manage/' . $item->sup_id . '/edit') }}" title="Edit SupplierManage"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/suppliers/supplier-manage', $item->sup_id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete SupplierManage',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $suppliermanage->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection