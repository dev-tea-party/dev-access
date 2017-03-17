<div class="form-group {{ $errors->has('inv_trans_item_id') ? 'has-error' : ''}}">
    {!! Form::label('inv_trans_item_id', 'Item ID', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('inv_trans_item_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('inv_trans_item_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('inv_trans_qty') ? 'has-error' : ''}}">
    {!! Form::label('inv_trans_qty', 'Qty', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('inv_trans_qty', null, ['class' => 'form-control']) !!}
        {!! $errors->first('inv_trans_qty', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('inv_trans_remarks') ? 'has-error' : ''}}">
    {!! Form::label('inv_trans_remarks', 'Remarks', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('inv_trans_remarks', null, ['class' => 'form-control']) !!}
        {!! $errors->first('inv_trans_remarks', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Withdraw', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
