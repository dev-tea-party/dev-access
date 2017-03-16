@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-primary">
                    <div class="panel-heading">Announcements</div>
                    <div class="panel-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>
                </div>

                <div class="col-md-6 nopadding">
                    <div class="panel panel-default">
                        <div class="panel-heading">Company Details</div>
                        <div class="panel-body">

                            @if (count($companyDetails) !== 1)
                                <div class="table-responsive">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr><th>Company Name</th><td> {{ $companyDetails->company_name }} </td></tr>
                                        </thead>
                                        <tbody>
                                            <tr><th>Business Type</th><td> {{ $companyDetails->business_type }} </td></tr>
                                            <tr><th>Contact Name</th><td> {{ $companyDetails->contact_name }} </td></tr>
                                            <tr><th>Billing Address</th><td> {{ $companyDetails->billing_address }} </td></tr>
                                            <tr><th>Country</th><td> {{ $companyDetails->country }} </td></tr>
                                            <tr><th>State / Province</th><td> {{ $companyDetails->state_province }} </td></tr>
                                            <tr><th>City</th><td> {{ $companyDetails->city }} </td></tr>
                                            <tr><th>Zip Code</th><td> {{ $companyDetails->zip_code }} </td></tr>
                                            <tr><th>Email</th><td> {{ $companyDetails->email }} </td></tr>
                                            <tr><th>Website</th><td> {{ $companyDetails->url }} </td></tr>
                                            <tr><th>Telephone No.</th><td> {{ $companyDetails->tel_no }} </td></tr>
                                            <tr><th>Mobile No.</th><td> {{ $companyDetails->mob_no }} </td></tr>
                                            <tr><th>Fax No.</th><td> {{ $companyDetails->fax_no }} </td></tr>
                                            <tr><th>Other Details</th><td> {{ $companyDetails->other_details }} </td></tr>
                                            <tr><th>Other Details</th><td> {{ $companyDetails->other_deta22ils }} </td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <div class="text-center">No details found! Click {{ HTML::link('/company-details', 'here')}} to add.</div>
                            @endif
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-6 nopadding">
                    <div class="panel panel-default">
                        <div class="panel-heading">User Details</div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-borderless">
                                    <thead>
                                        <tr><th>First Name</th><td> {{ $userInfo->firstname }} </td></tr>
                                    </thead>
                                    <tbody>
                                        <tr><th>Last Name</th><td> {{ $userInfo->lastname }} </td></tr>
                                        <tr><th>Middle Name</th><td> {{ $userInfo->middlename }} </td></tr>
                                        <tr><th>Email</th><td> {{ $userInfo->email }} </td></tr>
                                        <tr><th>Telephone No</th><td> {{ $userInfo->tel_num }} </td></tr>
                                        <tr><th>Mobile No</th><td> {{ $userInfo->mobile_num }} </td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
