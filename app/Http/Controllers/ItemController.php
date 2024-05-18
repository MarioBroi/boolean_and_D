<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('items.index', ['items' => Item::orderByDesc('id')->paginate(15)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = $request->all();

        $item = new Item();
        $item->name = $product['name'];
        $item->slug = $product['slug'];
        $item->type = $product['type'];
        $item->category = $product['category'];
        $item->weight = $product['weight'];
        $item->cost = $product['cost'];
        $item->damage_dice = $product['damage_dice'];
        $item->save();

        return to_route('item.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        return view('items.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        return view('items.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
        $data = $request->all();

        $item->update($data);

        return to_route('item.show', $item->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        $item->delete();

        return to_route('item.index');
    }
}
