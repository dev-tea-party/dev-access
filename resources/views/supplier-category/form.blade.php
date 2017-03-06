<div class="form-group {{ $errors->has('sup_cat_name') ? 'has-error' : ''}}">
    {!! Form::label('sup_cat_name', 'Sup Cat Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('sup_cat_name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('sup_cat_name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('sup_cat_desc') ? 'has-error' : ''}}">
    {!! Form::label('sup_cat_desc', 'Sup Cat Desc', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('sup_cat_desc', null, ['class' => 'form-control']) !!}
        {!! $errors->first('sup_cat_desc', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
