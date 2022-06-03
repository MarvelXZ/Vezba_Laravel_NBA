<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
    public function index(){
        return view('teams.index', ['teams' => Team::all()]);
    }

    public function show(Team $team) {



        return view('teams.show', ['team' => $team]);
    }
}
