@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Change Password</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- Start form -->
                    {!! Form::open(array('url' => route('change_password'), 'method' => 'POST', 'class' => 'form-horizontal')) !!}
                    {{ csrf_field() }}
                    
                    <div class="form-group">
                        {!! Form::label('current_password', 'Current Password', ['class' => 'col-md-4 control-label']) !!}
                        <div class = "col-md-6">
                            {!! Form::password('current_password', ['class' => 'form-control', 'required', 'autofocus']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('new_password', 'New Password', ['class' => 'col-md-4 control-label']) !!}
                        <div class = "col-md-6">
                            {!! Form::password('new_password', ['class' => 'form-control', 'required']) !!}
                        </div>
                        
                    </div>

                    <div class = "form-group">
                        <div class = "col-md-offset-4 col-md-8">
                            {!! Form::checkbox('set_default', 'set_default_password', true) !!}
                            {!! Form::label('set_default', 'Use as default password') !!}
                            </div>
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('confirm_password', 'Confirm Password', ['class' => 'col-md-4 control-label']) !!}
                        <div class = "col-md-6">
                            {!! Form::password('confirm_password', ['class' => 'form-control', 'required']) !!}
                        </div>
                    </div>

                    
                    <div class="form-group">
                        <div class = "col-sm-12 text-center">
                            {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
                            {!! Form::button('Cancel', ['class' => 'btn btn-default']) !!}
                        </div>
                    </div>

                    {!! Form::close() !!}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
