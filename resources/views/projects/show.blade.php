@extends('layouts.app')

@section('content')

    @include('partials.messages')

    <div class="projectProgress">
        <div class="projectInfo">
            <h1> Project: {{ $project->project_name }}</h1>
            <a href="{{ route('projects.edit', $project->id) }}" class="buttons">Edit</a>
            <h3> Project Manager: ...</h3>
            <p>Project Description: {{ $project->project_desc }}</p>
        </div>

        <div class="progressCircles">
            <span>Overall Progress:  {{ $project['progress'] }}</span>
            <div id="project_name" class="progress-wrap progress" data-progress-percent="{{ $project['progress'] }}">
                <div class="progress-bar progress"></div>
            </div>
            <span>Stage Progress: 60%</span>
            <div id="stage_name" class="progress-wrap progress" data-progress-percent="60">
                <div class="progress-bar progress"></div>
            </div>
        </div>
    </div>

    <div class="projectTasks">
        <h4>Tasks</h4>
        @foreach ($project->tasks as $task)
            <p>{{ $task->task_name }}</p>
        @endforeach
        <a href="{{ route('projects.tasks.create', $project->id) }}" class="buttons">+</a>
    </div>

    <div class="activityFeed">
        <H4>Activity</H4>
    </div>

    <div class="projectMembers">
        <h4>Users</h4>

        @foreach ($project->users as $user)
            <div class="member">
                <p><a href="">{{ $user->name }}</a></p>
            </div>
        @endforeach

    </div>

    <div class="clientInfo">
        <h4>Client</h4>
        <a href="{{ route('clients.show', $project->client->id) }}"><p>{{ $project->client->name }}</p></a>
    </div>

@endsection
