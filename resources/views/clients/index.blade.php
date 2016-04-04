@extends('layouts.app')

@section('content')

    <div class="index">
        @include('partials.messages')

                    <h1>Manage Clients</h1>
                    <Hr>
                    <div>
                        <table class="table">
                            <tbody>
                                @foreach ($client as $record)

                                    <tr>
                                        <td>{{ $record->name }}</td>
                                        <td>
                                            <a href="{{ route('clients.show', $record->id) }}" class="buttons">View</a>
                                        </td>
                                        <td>
                                            <a href="{{ route('clients.edit', $record->id) }}" class="buttons">Edit</a>
                                        </td>
                                    </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
    </div>

@endsection