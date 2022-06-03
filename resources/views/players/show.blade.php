@extends('layouts.app')

@section('title', 'Player Info')

@section('sidebar')
    @@parent

    <p>This is appended to the master sidebar.</p>
@stop

@section('content')
<div class="container-fluid container-xl">
    <table>
        <tbody>
        <tr>
        <td align="right" >Last name :</td>
        <td>{{ $player->last_name }}</td>
        </tr>
        <tr>
        <td align="right" >First name :</td>
        <td>{{ $player->first_name }}</td>
        </tr>
        <tr>
        <td align="right">email :</td>
        <td>{{ $player->email }}</td>
        </tr>
        <tr>
        <td align="right">Team name :</td>
        <td><a href="/teams/{{ $player->team_id }}"> {{ $player->team->name }}</td>
        </tr>
        </tbody>
    </table>
</div>

@stop
