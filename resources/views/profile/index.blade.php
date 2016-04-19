@extends('layouts.app')

@section('content')

    <h1>{{ $user->email }}</h1>


    <? var_dump(Auth::user()) ?>

@endsection