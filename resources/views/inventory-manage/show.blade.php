@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Item {{ $inventorymanage->inv_item_code }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/warehouse/inventory-manage') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/warehouse/inventory-manage/' . $inventorymanage->inv_item_id . '/edit') }}" title="Edit InventoryManage"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['warehouse/inventorymanage', $inventorymanage->inv_item_id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete InventoryManage',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $inventorymanage->inv_item_id }}</td>
                                    </tr>
                                    <tr><th> Qty </th><td> {{ $inventorymanage->inv_item_qty }} </td></tr>
                                    <tr><th> Item Code </th><td> {{ $inventorymanage->inv_item_code }} </td></tr>
                                    <tr><th> Description </th><td> {{ $inventorymanage->inv_item_desc }} </td></tr>
                                    <tr><th> Unit </th><td> {{ $inventorymanage->inv_item_unit }} </td></tr>
                                    <tr><th> Unit Cost </th><td> {{ $inventorymanage->inv_item_unit_cost }} </td></tr>
                                    <tr><th> Condition </th><td> {{ $inventorymanage->inv_item_condition }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
