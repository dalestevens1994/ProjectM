@extends('layouts.app')

@section('content')

    @include('partials.messages')
    <div class="index">
        <h1>Manage Clients</h1>
    </div>

    <div>
        @foreach ($client as $client)

        <a href="{{ route('clients.show', $client->id) }}"><li class="client">
            <h4>Client: {{ $client->name }}</h4>
            <h5>Company Number: {{ $client->company_number }}</h5>
        </li></a>

        @endforeach
    </div>

@endsection