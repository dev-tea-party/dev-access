<div class="form-group {{ $errors->has('inv_item_qty') ? 'has-error' : ''}}">
    {!! Form::label('inv_item_qty', 'Qty', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('inv_item_qty', null, ['class' => 'form-control']) !!}
        {!! $errors->first('inv_item_qty', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('inv_item_code') ? 'has-error' : ''}}">
    {!! Form::label('inv_item_code', 'Item Code', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('inv_item_code', null, ['class' => 'form-control']) !!}
        {!! $errors->first('inv_item_code', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('inv_item_desc') ? 'has-error' : ''}}">
    {!! Form::label('inv_item_desc', 'Description', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('inv_item_desc', null, ['class' => 'form-control']) !!}
        {!! $errors->first('inv_item_desc', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('inv_item_unit') ? 'has-error' : ''}}">
    {!! Form::label('inv_item_unit', 'Unit', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('inv_item_unit', null, ['class' => 'form-control']) !!}
        {!! $errors->first('inv_item_unit', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('inv_item_unit_cost') ? 'has-error' : ''}}">
    {!! Form::label('inv_item_unit_cost', 'Unit Cost', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('inv_item_unit_cost', null, ['class' => 'form-control']) !!}
        {!! $errors->first('inv_item_unit_cost', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('inv_item_condition') ? 'has-error' : ''}}">
    {!! Form::label('inv_item_condition', 'Condition', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('inv_item_condition', null, ['class' => 'form-control']) !!}
        {!! $errors->first('inv_item_condition', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
