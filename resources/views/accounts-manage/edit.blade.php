@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Account {{ $accountsmanage->acc_bal_code }}</div>
                    <div class="panel-body">
                        <a href="{{ url('/accounting/accounts-manage') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($accountsmanage, [
                            'method' => 'PATCH',
                            'url' => ['/accounting/accounts-manage', $accountsmanage->acc_bal_id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('accounts-manage.form', ['submitButtonText' => 'Update'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
