@extends('layouts.app')

@section('content')

    @include('partials.messages')
    <div class="editClient">

        {!! Form::model($client, ['route' => ['clients.update', $client->id], 'method' => 'PUT']) !!}

        {{ Form::label('name', 'Client Name') }}
        {{ Form::text('name', null, ["class" => 'form-control']) }}

        {{ Form::label('primary_contact', 'Primary Contact') }}
        {{ Form::text('primary_contact', null, ["class" => 'form-control']) }}

        {{ Form::label('secondary_contact', 'Secondary Contact') }}
        {{ Form::text('secondary_contact', null, ["class" => 'form-control']) }}

        {{ Form::label('company_number', 'Company Number') }}
        {{ Form::text('company_number', null, ["class" => 'form-control']) }}

        {{ Form::label('vat_no', 'Vat Number') }}
        {{ Form::text('vat_no', null, ["class" => 'form-control']) }}

        {!! Html::linkRoute('clients.show', 'Cancel', array($client->id), array('class' => 'buttons')) !!}

        {{ Form::submit('Save Changes', ["class" => 'buttons']) }}

        {!! Form::close() !!}

    </div>

@endsection