<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokemon;

class PokemonController extends Controller
{
    public function list_all()
    {
        $pokemons = Pokemon::all();
        return view('pokemons.all', compact('pokemons'));
    }

    public function store(request $request)
    {
        Pokemon::create([
            'name' => $request->input('name'),
            'type' => $request->input('type'),
            'health' => $request->input('health'),
            'attack' => $request->input('attack'),
            'description' => $request->input('attack'),
            'image_url' => $request->input('image_url'),
        ]);

        return redirect()->route('pokemons.list');
    }

    public function show($id)
    {
        $pokemon = Pokemon::findOrFail($id);
        return view('pokemons.show', compact('pokemon'));
    }

    public function create()
    {
        return view('pokemons.create');
    }

    public function edit($id)
    {
        $pokemon = Pokemon::findOrFail($id);
        return view('pokemons.edit', compact('pokemon'));

    }

    public function update(Request $request, $id)
    {
        $pokemon = Pokemon::findOrFail($id);
        $pokemon->update([
            'name' => $request->input('name'),
            'type' => $request->input('type'),
            'health' => $request->input('health'),
            'attack' => $request->input('attack'),
            'description' => $request->input('attack'),
            'image_url' => $request->input('image_url'),
        ]);

        return redirect()->route('pokemons.list');
    }

    public function delete($id)
    {
        $pokemon = Pokemon::findOrFail($id);
        $pokemon->delete();
        return 'Pokémon deleted!';
    }


}