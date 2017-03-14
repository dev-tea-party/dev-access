@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">PurchaseOrder {{ $purchaseorder->po_id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/purchasing/purchase-orders') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/purchasing/purchase-orders/' . $purchaseorder->po_id . '/edit') }}" title="Edit PurchaseOrder"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['purchasing/purchaseorders', $purchaseorder->po_id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete PurchaseOrder',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $purchaseorder->po_id }}</td>
                                    </tr>
                                    <tr><th> PO Date </th><td> {{ $purchaseorder->po_date }} </td></tr>
                                    <tr><th> PO No. </th><td> {{ $purchaseorder->po_num }} </td></tr>
                                    <tr><th> Supplier </th><td> {{ $purchaseorder->po_sup_id }} </td></tr>
                                    <tr><th> In Budget </th><td> {{ $purchaseorder->po_in_budget }} </td></tr>
                                    <tr><th> VAT </th><td> {{ $purchaseorder->po_vat }} </td></tr>
                                    <tr><th> Prepared By </th><td> {{ $purchaseorder->po_prep_user_id }} </td></tr>
                                    <tr><th> Approved By </th><td> {{ $purchaseorder->po_app_user_id }} </td></tr>
                                    <tr><th> PO Status </th><td> {{ $purchaseorder->po_status }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
