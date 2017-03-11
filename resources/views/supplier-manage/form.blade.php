<div class="form-group {{ $errors->has('sup_name') ? 'has-error' : ''}}">
    {!! Form::label('sup_name', 'Supplier Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('sup_name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('sup_name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('sup_cat_id') ? 'has-error' : ''}}">
    {!! Form::label('sup_cat_id', 'Category', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('sup_cat_id', $suppliercategory, null, ['class' => 'form-control']) !!}
        {!! $errors->first('sup_cat_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('sup_vat_num') ? 'has-error' : ''}}">
    {!! Form::label('sup_vat_num', 'VAT', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('sup_vat_num', null, ['class' => 'form-control']) !!}
        {!! $errors->first('sup_vat_num', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('sup_op_bal') ? 'has-error' : ''}}">
    {!! Form::label('sup_op_bal', 'Opening Balance', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('sup_op_bal', null, ['class' => 'form-control']) !!}
        {!! $errors->first('sup_op_bal', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('sup_addr_1') ? 'has-error' : ''}}">
    {!! Form::label('sup_addr_1', 'Address 1', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('sup_addr_1', null, ['class' => 'form-control']) !!}
        {!! $errors->first('sup_addr_1', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('sup_addr_2') ? 'has-error' : ''}}">
    {!! Form::label('sup_addr_2', 'Address 2', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('sup_addr_2', null, ['class' => 'form-control']) !!}
        {!! $errors->first('sup_addr_2', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('sup_contact_name') ? 'has-error' : ''}}">
    {!! Form::label('sup_contact_name', 'Contact Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('sup_contact_name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('sup_contact_name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('sup_contact_email') ? 'has-error' : ''}}">
    {!! Form::label('sup_contact_email', 'Contact Email', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('sup_contact_email', null, ['class' => 'form-control']) !!}
        {!! $errors->first('sup_contact_email', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('sup_tel_num') ? 'has-error' : ''}}">
    {!! Form::label('sup_tel_num', 'Telephone No.', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('sup_tel_num', null, ['class' => 'form-control']) !!}
        {!! $errors->first('sup_tel_num', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('sup_mobile_num') ? 'has-error' : ''}}">
    {!! Form::label('sup_mobile_num', 'Mobile No.', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('sup_mobile_num', null, ['class' => 'form-control']) !!}
        {!! $errors->first('sup_mobile_num', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('sup_fax_num') ? 'has-error' : ''}}">
    {!! Form::label('sup_fax_num', 'Fax No.', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('sup_fax_num', null, ['class' => 'form-control']) !!}
        {!! $errors->first('sup_fax_num', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('sup_website') ? 'has-error' : ''}}">
    {!! Form::label('sup_website', 'Website', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('sup_website', null, ['class' => 'form-control']) !!}
        {!! $errors->first('sup_website', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('sup_bank_acct_holder') ? 'has-error' : ''}}">
    {!! Form::label('sup_bank_acct_holder', 'Bank Account Holder', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('sup_bank_acct_holder', null, ['class' => 'form-control']) !!}
        {!! $errors->first('sup_bank_acct_holder', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('sup_bank_acct_num') ? 'has-error' : ''}}">
    {!! Form::label('sup_bank_acct_num', 'Bank Account No.', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('sup_bank_acct_num', null, ['class' => 'form-control']) !!}
        {!! $errors->first('sup_bank_acct_num', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('sup_bank_acct_type') ? 'has-error' : ''}}">
    {!! Form::label('sup_bank_acct_type', 'Bank Account Type', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('sup_bank_acct_type', null, ['class' => 'form-control']) !!}
        {!! $errors->first('sup_bank_acct_type', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('sup_bank_name') ? 'has-error' : ''}}">
    {!! Form::label('sup_bank_name', 'Bank Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('sup_bank_name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('sup_bank_name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('sup_bank_code') ? 'has-error' : ''}}">
    {!! Form::label('sup_bank_code', 'Bank Code', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('sup_bank_code', null, ['class' => 'form-control']) !!}
        {!! $errors->first('sup_bank_code', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
