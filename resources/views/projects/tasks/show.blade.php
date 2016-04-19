@extends('layouts.app')

@section('content')

    @include('partials.messages')

    <div class="taskProgress">
        <div class="taskInfo">
            <h1> Task: {{ $task->task_name }}</h1>
            <p>Task Description: {{ $task->task_desc }}</p>
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
        {{--@foreach ($project->tasks as $task)--}}
        <p>{{ $project->tasks }}</p>
        {{--@endforeach--}}
        <a href="{{ route('projects.tasks.create', $project->id) }}" class="buttons">+</a>
    </div>

    <div class="activityFeed">
        <H4>Activity</H4>
    </div>

    <div class="projectMembers">
        <h4>Users</h4>

        {{--@foreach ($link_project_user as $users)--}}
        {{--<div class="member">--}}
        {{--<p>{{ $users->user_id }}</p>--}}
        {{--</div>--}}
        {{--@endforeach--}}

                <!--        --><?// foreach ($link_project_user->user_id as $user){
        echo "<h3></h3>";
        //            echo '<p>' . $user->email . '</p>';
        //        } ?>


    </div>

    <div class="clientInfo">
        <h4>Client</h4>
        <a href="{{ route('clients.show', $project->client->id) }}"><p>{{ $project->client->name }}</p></a>
    </div>

    @endsection
