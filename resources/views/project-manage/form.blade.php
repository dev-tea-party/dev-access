<div class="form-group {{ $errors->has('prj_code') ? 'has-error' : ''}}">
    {!! Form::label('prj_code', 'Project Code', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('prj_code', null, ['class' => 'form-control']) !!}
        {!! $errors->first('prj_code', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('prj_name') ? 'has-error' : ''}}">
    {!! Form::label('prj_name', 'Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('prj_name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('prj_name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('prj_desc') ? 'has-error' : ''}}">
    {!! Form::label('prj_desc', 'Description', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('prj_desc', null, ['class' => 'form-control']) !!}
        {!! $errors->first('prj_desc', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('prj_start') ? 'has-error' : ''}}">
    {!! Form::label('prj_start', 'Start Date', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::input('datetime-local', 'prj_start', null, ['class' => 'form-control']) !!}
        {!! $errors->first('prj_start', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('prj_end') ? 'has-error' : ''}}">
    {!! Form::label('prj_end', 'End Date', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::input('datetime-local', 'prj_end', null, ['class' => 'form-control']) !!}
        {!! $errors->first('prj_end', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('prj_budget') ? 'has-error' : ''}}">
    {!! Form::label('prj_budget', 'Budget', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('prj_budget', null, ['class' => 'form-control']) !!}
        {!! $errors->first('prj_budget', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
