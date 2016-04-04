@extends('layouts.app')

@section('content')

    <div class="create">

                    <H1>Create New Client</H1>
                    <hr>
                    @include('partials.messages')
                    {!! Form::open(array('route' => 'clients.store')) !!}

                        {{ Form::label('name', 'Client Name') }}
                        {{ Form::text('name', null, array('class' => 'form-control')) }}

                        {{ Form::label('primary_contact', 'Primary Contact') }}
                        {{ Form::text('primary_contact', null, array('class' => 'form-control')) }}

                        {{ Form::label('secondary_contact', 'Secondary Contact') }}
                        {{ Form::text('secondary_contact', null, array('class' => 'form-control')) }}

                        {{ Form::label('company_number', 'Company Number') }}
                        {{ Form::text('company_number', null, array('class' => 'form-control')) }}

                        {{ Form::label('vat_no', 'Vat No.') }}
                        {{ Form::text('vat_no', null, array('class' => 'form-control')) }}

                        {{ Form::submit('Create Client', array('class' => 'submit')) }}
                    {!! Form::close() !!}

    </div>

@endsection