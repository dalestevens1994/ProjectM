@extends('layouts.app')

@section('content')

    <div class="create">

        <H1>Create a new project</H1>
        <hr>
        @include('partials.messages')
        {!! Form::open(array('route' => 'projects.store')) !!}

        {{ Form::label('project_name', 'Project Name') }}
        {{ Form::text('project_name', null, array('class' => 'form-control')) }}

        {{ Form::label('project_desc', 'Brief Project Description') }}
        {{ Form::text('project_desc', null, array('class' => 'form-control')) }}

        {{ Form::label('expected_start_date', 'Expected Project Start Date') }}
        {{ Form::date('expected_start_date', null, array('class' => 'form-control')) }}

        {{ Form::label('expected_end_date', 'Expected Project Completion Date') }}
        {{ Form::date('expected_end_date', null, array('class' => 'form-control')) }}

        <hr>

        {{ Form::label('client_id', 'Client') }}
        {{ Form::select('client_id', $project['clients']) }}

        <hr>

        {{ Form::label('user_id', 'Select Users') }}
        {{ Form::select(
            'user_id[]',
            $project['users'],
            null,
            ['id' => 'users', 'multiple' => true, 'id' => 'user-multiple-selected']) }}

        <hr>

        {{ Form::submit('Create Project', array('class' => 'submit')) }}
        {!! Form::close() !!}

    </div>

@endsection
