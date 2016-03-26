@extends('layouts.app')

@section('content')

    <div class="container">
        @include('partials.messages')
        <div class="row">
            <div class="col-md-12 panels">
                <div class="panel panel-default projdets">

                    {!! Form::model($client, ['route' => ['clients.update', $client->id], 'method' => 'PUT']) !!}

                    {{ Form::text('name', null, ["class" => 'form-control']) }}

                    {{ Form::text('primary_contact', null, ["class" => 'form-control']) }}

                    {{ Form::text('secondary_contact', null, ["class" => 'form-control']) }}

                    {{ Form::text('company_number', null, ["class" => 'form-control']) }}

                    {{ Form::text('vat_no', null, ["class" => 'form-control']) }}

                    <hr>

                    {!! Html::linkRoute('clients.index', 'Cancel', array($client->id), array('class' => 'btn btn-danger')) !!}

                    {{ Form::submit('Save Changes', ["class" => 'btn btn-success']) }}

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>

@endsection