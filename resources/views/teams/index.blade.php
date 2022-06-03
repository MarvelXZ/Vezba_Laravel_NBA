@extends('layouts.app')

@section('title', 'List of Teams')

@section('sidebar')
    @@parent

    <p>This is appended to the master sidebar.</p>
@stop

@section('content')
<div class="container-fluid container-xl">
<ul>
@foreach ($teams as $team)
    <li><a href="/teams/{{ $team->id }}">{{ $team->name }} - - {{ $team->email }}</li>
@endforeach
</ul>
</div>
@stop
