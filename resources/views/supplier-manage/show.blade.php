@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Supplier {{ $suppliermanage->sup_name }}</div>
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
                                    <tr><th> Supplier Name </th><td> {{ $suppliermanage->sup_name }} </td></tr>
                                    <tr><th> Category </th><td> {{ $suppliermanage->category->sup_cat_name }} </td></tr>
                                    <tr><th> VAT </th><td> {{ $suppliermanage->sup_vat_num }} </td></tr>
                                    <tr><th> Address 1 </th><td> {{ $suppliermanage->sup_addr_1 }} </td></tr>
                                    <tr><th> Address 2 </th><td> {{ $suppliermanage->sup_addr_2 }} </td></tr>
                                    <tr><th> Contact Name </th><td> {{ $suppliermanage->sup_contact_name }} </td></tr>
                                    <tr><th> Contact Email </th><td> {{ $suppliermanage->sup_contact_email }} </td></tr>
                                    <tr><th> Telephone No. </th><td> {{ $suppliermanage->sup_tel_num }} </td></tr>
                                    <tr><th> Mobile No. </th><td> {{ $suppliermanage->sup_mobile_num }} </td></tr>
                                    <tr><th> Fax No. </th><td> {{ $suppliermanage->sup_fax_num }} </td></tr>
                                    <tr><th> Website </th><td> {{ $suppliermanage->sup_website }} </td></tr>
                                    <tr><th> Bank Account Holder </th><td> {{ $suppliermanage->sup_bank_acct_holder }} </td></tr>
                                    <tr><th> Bank Account No. </th><td> {{ $suppliermanage->sup_bank_acct_num }} </td></tr>
                                    <tr><th> Bank Account Type </th><td> {{ $suppliermanage->sup_bank_acct_type }} </td></tr>
                                    <tr><th> Bank Name </th><td> {{ $suppliermanage->sup_bank_name }} </td></tr>
                                    <tr><th> Bank Code </th><td> {{ $suppliermanage->sup_bank_code }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
