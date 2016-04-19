@extends('layouts.app')

@section('content')

    <div class="create">
        <H1>Create a new task</H1>
        <hr>
        @include('partials.messages')
        {!! Form::open(array('route' => 'tasks.store')) !!}

        {{ Form::label('task_name', 'Task Name') }}
        {{ Form::text('task_name', null, array('class' => 'form-control')) }}

        {{ Form::label('task_desc', 'Brief Task Description') }}
        {{ Form::text('task_desc', null, array('class' => 'form-control')) }}

        {{ Form::label('expected_start_date', 'Expected Task Start Date') }}
        {{ Form::date('expected_start_date', null, array('class' => 'form-control')) }}

        {{ Form::label('expected_end_date', 'Expected Task Completion Date') }}
        {{ Form::date('expected_end_date', null, array('class' => 'form-control')) }}

        {{ Form::text('project_id', $project->id, array('class' => 'hide')) }}

        <hr>

        {{ Form::submit('Create Task', array('class' => 'submit')) }}
        {!! Form::close() !!}

    </div>

@endsection