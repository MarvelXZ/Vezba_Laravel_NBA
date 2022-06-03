@extends('layouts.app')

@section('title', 'List of Teams')

@section('sidebar')
    @@parent

    <p>This is appended to the master sidebar.</p>
@stop

@section('content')
<div class="container-fluid container-xl">
    <table>
        <tbody>
        <tr>
        <td align="right" >Team name :</td>
        <td>{{ $team->name }}</td>
        </tr>
        <tr>
        <td align="right" >Address :</td>
        <td>{{ $team->address }}</td>
        </tr>
        <tr>
        <td align="right">City :</td>
        <td>{{ $team->city }}</td>
        </tr>
        <tr>
        <td align="right">email :</td>
        <td>{{ $team->email }}</td>
        </tr>
        </tbody>
    </table>
</div>
<hr>
<div>
    <ul>
        @foreach ($team->players as $player)
            <li><a href="/players/{{ $player->id }}"> {{ $player->first_name }} {{ $player->last_name }} </li>
        @endforeach
    </ul>
</div>
@stop
