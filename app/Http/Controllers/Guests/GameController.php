<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\GameModel;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('guest.welcome');
    }

    /**
     * Display the specified resource.
     */
    public function show(GameModel $gameModel)
    {
        /* TODO: Insert a View */
    }
}
