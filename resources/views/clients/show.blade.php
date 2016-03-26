@extends('layouts.app')

@section('content')

    <div class="container">
        @include('partials.messages')
        <div class="row">
            <div class="col-md-12 panels">
                <div class="panel panel-default projdets">

                    <h1>{{ $client->name }}</h1>
                    <hr>
                    <h1>{{ $client->primary_contact }}</h1>
                    <Hr>
                    <h1>{{ $client->secondary_contact }}</h1>
                    <Hr>
                    <h1>{{ $client->company_number }}</h1>
                    <hr>
                    <h1>{{ $client->vat_no }}</h1>

                    {!!  Form::open(['route' => ['clients.destroy', $client->id], 'method' => 'DELETE']) !!}

                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>

@endsection