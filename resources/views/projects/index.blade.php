@extends('layouts.app')

@section('content')

    @include('partials.messages')
    <div class="index">
        <h1>Manage Projects</h1>
    </div>

    <div>
        @foreach ($project as $project)

            <a href="{{ route('projects.show', $project->id) }}"><li class="client">
                    <h4>Project: {{ $project->project_name }}</h4>
                    <h5>Client: {{ $project->client->name }}</h5>
                </li></a>

        @endforeach
    </div>

@endsection
