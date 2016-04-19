@extends('layouts.app')

@section('content')

    <div class="container">
        {!! Form::model($project, ['route' => ['projects.update', $project->id], 'method' => 'PUT']) !!}

        {{ Form::label('project_name', 'Project Name') }}
        {{ Form::text('project_name', null, ["class" => 'form-control']) }}

        {{ Form::label('project_desc', 'Project Description') }}
        {{ Form::text('project_desc', null, ["class" => 'form-control']) }}

        {{ Form::label('expected_start_date', 'Expected Start Date') }}
        {{ Form::date('expected_start_date', null, ["class" => 'form-control']) }}

        {{ Form::label('expected_end_date', 'Expected End Date') }}
        {{ Form::date('expected_end_date', null, ["class" => 'form-control']) }}

        {{ Form::label('actual_start_date', 'Actual Start Date') }}
        {{ Form::date('actual_start_date', null, ["class" => 'form-control']) }}

        {{ Form::label('actual_end_date', 'Actual End Date') }}
        {{ Form::date('actual_end_date', null, ["class" => 'form-control']) }}

        {{ Form::label('client_id', 'Client') }}
        {{ Form::text('client_id', null, ["class" => 'form-control']) }}

        {{--{{ Form::label('user_id', 'Select Users') }}--}}
        {{--{{ Form::select(--}}
            {{--'user_id[]',--}}
            {{--$project['users'],--}}
            {{--null,--}}
            {{--['id' => 'users', 'multiple' => true, 'id' => 'multi-select-user']) }}--}}

        <hr>

        {!! Html::linkRoute('projects.index', 'Cancel', array($project->id), array('class' => 'btn btn-danger')) !!}

        {!! Html::linkRoute('projects.destroy', 'Delete Project', array($project->id), array('class' => 'btn btn-danger')) !!}

        {{ Form::submit('Save Changes', ["class" => 'btn btn-success']) }}

        {!! Form::close() !!}
    </div>

@endsection
