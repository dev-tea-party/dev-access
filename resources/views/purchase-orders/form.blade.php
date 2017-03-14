<div class="form-group {{ $errors->has('po_date') ? 'has-error' : ''}}">
    {!! Form::label('po_date', 'PO Date', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::date('po_date', null, ['class' => 'form-control']) !!}
        {!! $errors->first('po_date', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('po_num') ? 'has-error' : ''}}">
    {!! Form::label('po_num', 'PO No.', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('po_num', null, ['class' => 'form-control']) !!}
        {!! $errors->first('po_num', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('po_sup_id') ? 'has-error' : ''}}">
    {!! Form::label('po_sup_id', 'Supplier', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('po_sup_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('po_sup_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('po_in_budget') ? 'has-error' : ''}}">
    {!! Form::label('po_in_budget', 'PO In Budget', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('po_in_budget', null, ['class' => 'form-control']) !!}
        {!! $errors->first('po_in_budget', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('po_vat') ? 'has-error' : ''}}">
    {!! Form::label('po_vat', 'VAT', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('po_vat', null, ['class' => 'form-control']) !!}
        {!! $errors->first('po_vat', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('po_prep_user_id') ? 'has-error' : ''}}">
    {!! Form::label('po_prep_user_id', 'Prepared By', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('po_prep_user_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('po_prep_user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('po_app_user_id') ? 'has-error' : ''}}">
    {!! Form::label('po_app_user_id', 'Approved By', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('po_app_user_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('po_app_user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('po_status') ? 'has-error' : ''}}">
    {!! Form::label('po_status', 'PO Status', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('po_status', null, ['class' => 'form-control']) !!}
        {!! $errors->first('po_status', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
