@extends('layouts.app')

@section('content')

    @include('partials.messages')

    <h1>{{ $project->project_name }}</h1>
    <H4>Project Manager</H4>

                    <h1>{{ $project->project_desc }}</h1>
                    <Hr>
                    <h1>{{ $project->expected_start_date }}</h1>
                    <Hr>
                    <h1>{{ $project->expected_end_date }}</h1>
                    <hr>
                    <h1>{{ $project->client_id }}</h1>

                    {!! Form::open(['route' => ['projects.destroy', $project->id], 'method' => 'DELETE']) !!}

                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

                    {!! Form::close() !!}


    <div class="activeProjects">
        <H1>Dashboard</H1>
        <div class="projects-wrapper">
            <h4>Active Projects</h4>
            <div class="project">
                <Ul>
                    <li><a>Project Name<br>
                            Project Description<br>
                            Project Manager<br>
                            Clients</a></li>
                    <li><a>Project Name<br>
                            Project Description<br>
                            Project Manager<br>
                            Clients</a></li>
                    <li><a>Project Name<br>
                            Project Description<br>
                            Project Manager<br>
                            Clients</a></li>
                    <li><a>Project Name<br>
                            Project Description<br>
                            Project Manager<br>
                            Clients</a></li>
                    <li><a>Project Name<br>
                            Project Description<br>
                            Project Manager<br>
                            Clients</a></li>
                </Ul>
            </div>
        </div>
    </div>
    <div class="activityFeed-wrapper">
        <h4>Recent Activity</h4>
        <div class="activityFeed">

        </div>
    </div>
    <div class="discussionBoard-wrapper">
        <h4>Discussion Board</h4>
        <div class="discussionBoard">

        </div>
    </div>

@endsection
