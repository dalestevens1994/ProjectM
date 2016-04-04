@extends('layouts.app')

@section('content')
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
