<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Character;

class CharacterController extends Controller
{
    public function index()
    {
        $characters = Character::with('type', 'items')->orderByDesc('id')->paginate(4);
        return response()->json([
            'success' => true,
            'characters' => $characters,
        ]);
    }

    public function show($id)
    {
        $character = Character::with('type', 'items')->where('id', $id)->first();
        if ($character) {
            return response()->json([
                'success' => true,
                'response' => $character,
            ]);
        } else {
            return response()->json([
                'success' => false,
                'response' => 'Error 404',
            ]);
        }
    }
}
