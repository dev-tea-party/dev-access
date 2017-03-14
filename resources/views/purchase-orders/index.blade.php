@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Purchase Orders</div>
                    <div class="panel-body">
                        <a href="{{ url('/purchasing/purchase-orders/create') }}" class="btn btn-success btn-sm" title="Add New PurchaseOrder">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/purchasing/purchase-orders', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
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
                                        <th>ID</th><th>PO Date</th><th>PO No.</th><th>Supplier</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($purchaseorders as $item)
                                    <tr>
                                        <td>{{ $item->po_id }}</td>
                                        <td>{{ $item->po_date }}</td><td>{{ $item->po_num }}</td><td>{{ $item->po_sup_id }}</td>
                                        <td>
                                            <a href="{{ url('/purchasing/purchase-orders/' . $item->po_id) }}" title="View PurchaseOrder"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/purchasing/purchase-orders/' . $item->po_id . '/edit') }}" title="Edit PurchaseOrder"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/purchasing/purchase-orders', $item->po_id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete PurchaseOrder',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $purchaseorders->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
