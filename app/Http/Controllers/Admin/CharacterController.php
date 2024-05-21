<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCharacterRequest;
use App\Http\Requests\UpdateCharacterRequest;
use App\Models\Character;
use App\Models\Item;

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
        return view('admin.characters.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCharacterRequest $request)
    {
        //dd($request->all());
        //$data = $request->all();
        $val_data = $request->validated();

        //dd($val_data, $request);
        Character::create($val_data);

        return to_route('admin.characters.index')->with('message', "Character $request->full_name created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Character $character)
    {
        //dd('si vede?');
        return view('admin.characters.show', compact('character'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Character $character)
    {
        return view('admin.characters.edit', compact('character'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCharacterRequest $request, Character $character)
    {
        $val_data = $request->validated();

        $character->update($val_data);

        return to_route('admin.characters.index', $character->id)->with('message', "Character $character->full_name update successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Character $character)
    {
        $character->delete();

        return to_route('admin.characters.index')->with('message', "Character $character->full_name delete successfully");
    }
}
