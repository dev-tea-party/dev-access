@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <!-- <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div> -->


        <div class="col-lg-12">
            <h1 class="page-header">Sample Dashboard Page</h1>
        </div>
        <!-- /.col-lg-12 -->

    </div>

    <div class="row">

        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Announcements </h3>
                </div>
                <div class="panel-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Users</h3>
                </div>
                <div class="panel-body">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>John</td>
                                <td>john@gmail.com</td>
                                <td>London, UK</td>
                            </tr>
                            <tr>
                                <td>Andy</td>
                                <td>andygmail.com</td>
                                <td>Merseyside, UK</td>
                            </tr>
                            <tr>
                                <td>Frank</td>
                                <td>frank@gmail.com</td>
                                <td>Southampton, UK</td>
                            </tr>
                        </tbody>
                    </table>            
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Supplier Data </h3>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>John</td>
                                <td>john@gmail.com</td>
                                <td>London, UK</td>
                            </tr>
                            <tr>
                                <td>Andy</td>
                                <td>andygmail.com</td>
                                <td>Merseyside, UK</td>
                            </tr>
                            <tr>
                                <td>Frank</td>
                                <td>frank@gmail.com</td>
                                <td>Southampton, UK</td>
                            </tr>
                        </tbody>
                    </table>            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
