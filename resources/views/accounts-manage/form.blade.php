<div class="form-group {{ $errors->has('acc_bal_code') ? 'has-error' : ''}}">
    {!! Form::label('acc_bal_code', 'Account Code', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('acc_bal_code', null, ['class' => 'form-control']) !!}
        {!! $errors->first('acc_bal_code', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('acc_bal_name') ? 'has-error' : ''}}">
    {!! Form::label('acc_bal_name', 'Account Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('acc_bal_name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('acc_bal_name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('acc_bal_current') ? 'has-error' : ''}}">
    {!! Form::label('acc_bal_current', 'Current Balance', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('acc_bal_current', null, ['class' => 'form-control']) !!}
        {!! $errors->first('acc_bal_current', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('acc_bal_type') ? 'has-error' : ''}}">
    {!! Form::label('acc_bal_type', 'Account Type', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('acc_bal_type', null, ['class' => 'form-control']) !!}
        {!! $errors->first('acc_bal_type', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('acc_bal_desc') ? 'has-error' : ''}}">
    {!! Form::label('acc_bal_desc', 'Description', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('acc_bal_desc', null, ['class' => 'form-control']) !!}
        {!! $errors->first('acc_bal_desc', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
