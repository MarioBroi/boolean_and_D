<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Items;
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
    public function show(Items $gameModel)
    {
        /* TODO: Insert a View */
    }
}
