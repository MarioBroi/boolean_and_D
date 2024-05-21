<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreCharacterRequest;
use App\Http\Requests\UpdateCharacterRequest;
use App\Models\Item;
use App\Http\Controllers\Controller;
use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //dd(Item::all());
        return view('admin.characters.index', ['characters' => Character::orderByDesc('id')->paginate(15)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('characters.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCharacterRequest $request)
    {
        //dd($request->all());
        //$data = $request->all();
        $val_data = $request->validated();


        Character::create($val_data);
        return to_route('character.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Character $character)
    {
        //dd('si vede?');
        return view('characters.show', compact('character'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Character $character)
    {
        return view('characters.edit', compact('character'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCharacterRequest $request, Character $character)
    {
        $val_data = $request->validated();

        $character->update($val_data);

        return to_route('character.show', $character->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Character $character)
    {
        $character->delete();

        return to_route('character.index');
    }
}