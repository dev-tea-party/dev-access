@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">SupplierManage {{ $suppliermanage->sup_id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/suppliers/supplier-manage') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/suppliers/supplier-manage/' . $suppliermanage->sup_id . '/edit') }}" title="Edit SupplierManage"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['suppliers/suppliermanage', $suppliermanage->sup_id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete SupplierManage',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $suppliermanage->sup_id }}</td>
                                    </tr>
                                    <tr><th> Sup Name </th><td> {{ $suppliermanage->sup_name }} </td></tr>
                                    <tr><th> Sup Cat Id </th><td> {{ $suppliermanage->sup_cat_id }} </td></tr>
                                    <tr><th> Sup Vat Num </th><td> {{ $suppliermanage->sup_vat_num }} </td></tr>
                                    <tr><th> Sup Addr 1 </th><td> {{ $suppliermanage->sup_addr_1 }} </td></tr>
                                    <tr><th> Sup Addr 2 </th><td> {{ $suppliermanage->sup_addr_2 }} </td></tr>
                                    <tr><th> Sup Contact Name </th><td> {{ $suppliermanage->sup_contact_name }} </td></tr>
                                    <tr><th> Sup Contact Email </th><td> {{ $suppliermanage->sup_contact_email }} </td></tr>
                                    <tr><th> Sup Tel Num </th><td> {{ $suppliermanage->sup_tel_num }} </td></tr>
                                    <tr><th> Sup Mobile Num </th><td> {{ $suppliermanage->sup_mobile_num }} </td></tr>
                                    <tr><th> Sup Fax Num </th><td> {{ $suppliermanage->sup_fax_num }} </td></tr>
                                    <tr><th> Sup Website </th><td> {{ $suppliermanage->sup_website }} </td></tr>
                                    <tr><th> Sup Bank Acct Holder </th><td> {{ $suppliermanage->sup_bank_acct_holder }} </td></tr>
                                    <tr><th> Sup Bank Acct Num </th><td> {{ $suppliermanage->sup_bank_acct_num }} </td></tr>
                                    <tr><th> Sup Bank Acct Type </th><td> {{ $suppliermanage->sup_bank_acct_type }} </td></tr>
                                    <tr><th> Sup Bank Name </th><td> {{ $suppliermanage->sup_bank_name }} </td></tr>
                                    <tr><th> Sup Bank Code </th><td> {{ $suppliermanage->sup_bank_code }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
