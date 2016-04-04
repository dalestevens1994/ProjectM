@extends('layouts.app')

@section('content')

    <div class="index">
        @include('partials.messages')

        <h1>Manage Projects</h1>
        <Hr>
        <div>
            <table class="table">
                <tbody>
                @foreach ($project as $projects)

                    <tr>
                        <td>{{ $projects->project_name }}</td>
                        <td>
                            <a href="{{ route('projects.show', $projects->id) }}" class="buttons">View</a>
                        </td>
                        <td>
                            <a href="{{ route('projects.edit', $projects->id) }}" class="buttons">Edit</a>
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
