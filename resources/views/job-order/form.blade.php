<div class="form-group {{ $errors->has('jo_code') ? 'has-error' : ''}}">
    {!! Form::label('jo_code', 'JO Code', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('jo_code', null, ['class' => 'form-control']) !!}
        {!! $errors->first('jo_code', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('jo_desc') ? 'has-error' : ''}}">
    {!! Form::label('jo_desc', 'Description', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('jo_desc', null, ['class' => 'form-control']) !!}
        {!! $errors->first('jo_desc', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('jo_cost') ? 'has-error' : ''}}">
    {!! Form::label('jo_cost', 'Cost', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('jo_cost', null, ['class' => 'form-control']) !!}
        {!! $errors->first('jo_cost', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('prj_id') ? 'has-error' : ''}}">
    {!! Form::label('prj_id', 'Project Code', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('prj_id', ['prj_1', 'prj_2', 'prj_3'], null, ['class' => 'form-control']) !!}
        {!! $errors->first('prj_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
