@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Account {{ $accountsmanage->acc_bal_code }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/accounting/accounts-manage') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/accounting/accounts-manage/' . $accountsmanage->acc_bal_id . '/edit') }}" title="Edit AccountsManage"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['accounting/accountsmanage', $accountsmanage->acc_bal_id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete AccountsManage',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $accountsmanage->acc_bal_id }}</td>
                                    </tr>
                                    <tr>
                                        <th> Account Code </th><td> {{ $accountsmanage->acc_bal_code }} </td>
                                    </tr>
                                    <tr>
                                        <th> Account Name </th><td> {{ $accountsmanage->acc_bal_name }} </td>
                                    </tr>
                                    <tr>
                                        <th> Current Balance </th><td> {{ $accountsmanage->acc_bal_current }} </td>
                                    </tr>
                                    <tr>
                                        <th> Type </th><td> {{ $accountsmanage->acc_bal_type }} </td>
                                    </tr>
                                    <tr>
                                        <th> Description </th><td> {{ $accountsmanage->acc_bal_desc }} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
