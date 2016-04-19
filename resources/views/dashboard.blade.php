@extends('layouts.app')

@section('content')
    <div class="activeProjects">
        <H1>Dashboard</H1>
        <div class="projects-wrapper">
            <h4>Active Projects</h4>
            <div class="project">
                <Ul>
                    @foreach ($project as $projects)

                        <a href="{{ route('projects.show', $projects->id) }}"><li>Project: {{ $projects->project_name }}<br>
                        Project Manager<br>
                        Client: {{ $projects->client->name }}</li></a>

                    @endforeach
                </Ul>
            </div>
        </div>
    </div>
@endsection
