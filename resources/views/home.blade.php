@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-1 panels">
            <div class="panel panel-default projects">
                <div class="panel-heading">Active Projects</div>

                <div class="panel-body">
                    <ul>
                        <a><li>Project 1</li></a>
                        <a><li>Project 2</li></a>
                        <a><li>Project 3</li></a>
                        <a><li>Project 4</li></a>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4 panels">
            <div class="panel panel-default manage">
                <div class="panel-heading">Manage</div>

                <div class="panel-body">
                    <ul>
                        <li><a href="{{ url('/createProject') }}">Create Project</a></li>
                        <li><a>Edit Project</a></li>
                        <li><a>Delete Project</a></li>
                        <li><a>Assign Users</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4 panels">
            <div class="panel panel-default manage">
                <div class="panel-heading">Account</div>

                <div class="panel-body">
                    <ul>
                        <li><a>Manage 1</a></li>
                        <li><a>Manage 2</a></li>
                        <li><a>Manage 3</a></li>
                        <li><a>Manage 4</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-5 col-md-offset-1 panels">
            <div class="panel panel-default manage">
                <div class="panel-heading">Recent Comments</div>

                <div class="panel-body">
                    <ul>
                        <li>dale</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse arcu nulla, lobortis sed urna sit amet, pretium sollicitudin justo. Proin in ultrices orci.</li>
                        <li>andy</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse arcu nulla, lobortis sed urna sit amet, pretium sollicitudin justo. Proin in ultrices orci.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-5 panels">
            <div class="panel panel-default manage">
                <div class="panel-heading">Teams</div>

                <div class="panel-body">
                    <ul>
                        <li>Teams 1</li>
                        <li>Teams 2</li>
                        <li>Teams 3</li>
                        <li>Teams 4</li>
                        <li>Teams 5</li>
                        <li>Teams 6</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-10 col-md-offset-1 panels">
            <div class="panel panel-default manage">
                <div class="panel-heading">Recent Activity</div>

                <div class="panel-body">
                    <ul>
                        <li><a>dale</a></li>
                        <li><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse arcu nulla, lobortis sed urna sit amet, pretium sollicitudin justo. Proin in ultrices orci.</a></li>
                        <li><a>andy</a></li>
                        <li><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse arcu nulla, lobortis sed urna sit amet, pretium sollicitudin justo. Proin in ultrices orci.</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
