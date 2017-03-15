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
                        <div class="panel-body">Announcements go here!</div>
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
