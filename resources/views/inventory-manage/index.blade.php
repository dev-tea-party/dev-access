@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Inventory Items</div>
                    <div class="panel-body">
                        <a href="{{ url('/warehouse/inventory-manage/create') }}" class="btn btn-success btn-sm" title="Add New InventoryManage">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <a href="{{ url('/warehouse/inventory-manage/withdraw') }}" class="btn btn-danger btn-sm" title="Withdraw Inventory Item Request">
                            <i class="fa fa-minus" aria-hidden="true"></i> Withdraw Item
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/warehouse/inventory-manage', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
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
                                        <th>ID</th><th>Item Code</th><th>Qty</th><th>Description</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($inventorymanage as $item)
                                    <tr>
                                        <td>{{ $item->inv_item_id }}</td>
                                        <td>{{ $item->inv_item_code }}</td><td>{{ $item->inv_item_qty }}</td><td>{{ $item->inv_item_desc }}</td>
                                        <td>
                                            <a href="{{ url('/warehouse/inventory-manage/' . $item->inv_item_id) }}" title="View InventoryManage"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/warehouse/inventory-manage/' . $item->inv_item_id . '/edit') }}" title="Edit InventoryManage"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/warehouse/inventory-manage', $item->inv_item_id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete InventoryManage',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $inventorymanage->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
