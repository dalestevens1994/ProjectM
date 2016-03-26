@extends('layouts.app')

@section('content')

    <div class="container">
        @include('partials.messages')
        <div class="row">
            <div class="col-md-12 panels">
                <div class="panel panel-default projdets">
                    <h1>Manage Clients</h1>
                    <Hr>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <th>Client Name</th>
                                <th></th>
                            </thead>
                            <tbody>
                                @foreach ($client as $record)

                                    <tr>
                                        <td>{{ $record->name }}</td>
                                        <td>
                                            <a href="{{ route('clients.show', $record->id) }}" class="btn btn-primary btn-sm">View</a>
                                            <a href="{{ route('clients.edit', $record->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        </td>
                                    </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection