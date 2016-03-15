@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-1 panels">
            <div class="panel panel-default projects">
                <div class="panel-heading">Active Projects</div>

                <div class="panel-body">
                    <ul>
                        <li>Project 1</li>
                        <li>Project 2</li>
                        <li>Project 3</li>
                        <li>Project 4</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4 panels">
            <div class="panel panel-default manage">
                <div class="panel-heading">Manage</div>

                <div class="panel-body">
                    <ul>
                        <li><a>Create Project</a></li>
                        <li><a>Edit Project</a></li>
                        <li><a>Delete Project</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4 panels">
            <div class="panel panel-default manage">
                <div class="panel-heading">Account</div>

                <div class="panel-body">
                    <ul>
                        <li><a>Change Password</a></li>
                        <li><a>Edit Account Details</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
