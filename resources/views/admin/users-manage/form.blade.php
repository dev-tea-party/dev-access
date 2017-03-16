<div class="form-group {{ $errors->has('firstname') ? 'has-error' : ''}}">
    {!! Form::label('firstname', 'First Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('firstname', null, ['class' => 'form-control']) !!}
        {!! $errors->first('firstname', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('lastname') ? 'has-error' : ''}}">
    {!! Form::label('lastname', 'Last Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('lastname', null, ['class' => 'form-control']) !!}
        {!! $errors->first('lastname', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('middlename') ? 'has-error' : ''}}">
    {!! Form::label('middlename', 'Middle Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('middlename', null, ['class' => 'form-control']) !!}
        {!! $errors->first('middlename', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    {!! Form::label('email', 'Email', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::email('email', null, ['class' => 'form-control']) !!}
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('tel_num') ? 'has-error' : ''}}">
    {!! Form::label('tel_num', 'Telephone No.', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('tel_num', null, ['class' => 'form-control']) !!}
        {!! $errors->first('tel_num', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('mobile_num') ? 'has-error' : ''}}">
    {!! Form::label('mobile_num', 'Mobile No.', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('mobile_num', null, ['class' => 'form-control']) !!}
        {!! $errors->first('mobile_num', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('username') ? 'has-error' : ''}}">
    {!! Form::label('username', 'Username', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('username', null, ['class' => 'form-control']) !!}
        {!! $errors->first('username', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
    {!! Form::label('password', 'Password', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::password('password', ['class' => 'form-control']) !!}
        {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('confirm_password') ? 'has-error' : ''}}">
    {!! Form::label('confirm_password', 'Confirm Password', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::password('confirm_password', ['class' => 'form-control']) !!}
        {!! $errors->first('confirm_password', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('access_rights') ? 'has-error' : ''}}">
    {!! Form::label('access_rights', 'Access Rights', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('access_rights', ['Administrator', 'Purchase Manager', 'Accounting Manager', 'Warehouse Manager', 'Contracts Manager', 'Reports Manager'], 'Access Rights', ['class' => 'form-control']) !!}
        {!! $errors->first('access_rights', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::button('Print', ['class' => 'btn btn-default']) !!}
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
        <a href="{{ url('/home') }}" title="Back">{!! Form::button('Back', ['class' => 'btn btn-default']) !!}</a>
    </div>
</div>
