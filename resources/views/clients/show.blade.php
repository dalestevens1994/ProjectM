@extends('layouts.app')

@section('content')

    @include('partials.messages')

    <div class="clientDetails">
        <div class="title">
            <h2>{{ $client->name }}</h2>
            <a href="{{ route('clients.edit', $client->id) }}" class="buttons">Edit</a>
        </div>
        <p>Primary Contact: {{ $client->primary_contact }}</p>
        <p>Secondary Contact: {{ $client->secondary_contact }}</p>
        <p>Company Number: {{ $client->company_number }}</p>
        <p>Vat Number: {{ $client->vat_no }}</p>
    </div>

    {{--{!!  Form::open(['route' => ['clients.destroy', $client->id], 'method' => 'DELETE']) !!}--}}

    {{--{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}--}}

    {{--{!! Form::close() !!}--}}

    <div class="clientProjects">
        <h2>Projects</h2>
        <hr>

        <? foreach ($client->projects as $project){
            echo "<h3> $project->project_name </h3>";
            echo '<p>' . $project->project_desc . '</p>';
        } ?>
    </div>

    <div class="clientAccounts">
        <h2>Accounts</h2>
    </div>


@endsection