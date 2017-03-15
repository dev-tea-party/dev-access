<div class="form-group {{ $errors->has('company_name') ? 'has-error' : ''}}">
    {!! Form::label('company_name', 'Company Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('company_name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('company_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('business_type') ? 'has-error' : ''}}">
    {!! Form::label('business_type', 'Business Type', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('business_type', ['IT Services', 'Furniture', 'Textile'], 'IT Services', ['class' => 'form-control']) !!}
        {!! $errors->first('business_type', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('contact_name') ? 'has-error' : ''}}">
    {!! Form::label('contact_name', 'Contact Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('contact_name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('contact_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('billing_address') ? 'has-error' : ''}}">
    {!! Form::label('billing_address', 'Billing Address', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('billing_address', null, ['class' => 'form-control']) !!}
        {!! $errors->first('billing_address', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('city') ? 'has-error' : ''}}">
    {!! Form::label('city', 'City', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-2">
        {!! Form::text('city', null, ['class' => 'form-control']) !!}
        {!! $errors->first('city', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('state_province') ? 'has-error' : ''}}">
    {!! Form::label('state_province', 'State / Province', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-3">
        {!! Form::text('state_province', null, ['class' => 'form-control']) !!}
        {!! $errors->first('state_province', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('country') ? 'has-error' : ''}}">
    {!! Form::label('country', 'Country', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('country', ['Philippines', 'China', 'Japan'], 'Philippines', ['class' => 'form-control']) !!}
        {!! $errors->first('country', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('zip_code') ? 'has-error' : ''}}">
    {!! Form::label('zip_code', 'Zip Code', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('zip_code', null, ['class' => 'form-control']) !!}
        {!! $errors->first('zip_code', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    {!! Form::label('email', 'Email', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::email('email', null, ['class' => 'form-control']) !!}
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('url') ? 'has-error' : ''}}">
    {!! Form::label('url', 'Url', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('url', null, ['class' => 'form-control']) !!}
        {!! $errors->first('url', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('tel_no') ? 'has-error' : ''}}">
    {!! Form::label('tel_no', 'Tel No', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('tel_no', null, ['class' => 'form-control']) !!}
        {!! $errors->first('tel_no', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('mob_no') ? 'has-error' : ''}}">
    {!! Form::label('mob_no', 'Mob No', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('mob_no', null, ['class' => 'form-control']) !!}
        {!! $errors->first('mob_no', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('fax_no') ? 'has-error' : ''}}">
    {!! Form::label('fax_no', 'Fax No', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('fax_no', null, ['class' => 'form-control']) !!}
        {!! $errors->first('fax_no', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('other_details') ? 'has-error' : ''}}">
    {!! Form::label('other_details', 'Other Details', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('other_details', null, ['class' => 'form-control']) !!}
        {!! $errors->first('other_details', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
