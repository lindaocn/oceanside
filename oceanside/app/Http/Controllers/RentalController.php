<?php

namespace App\Http\Controllers;

use App\Models\Rentals;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    public function show($id)
    {
        $rentals = Rentals::findOrFail($id);
        return view('rentals.show', compact('rentals'));
    }
    public function list_all()
    {
        $rentals = Rentals::all();
        return view('rentals.all', compact('rentals'));
    }

    public function create()
    {
        return view('rentals.create');
    }

    public function edit($id)
    {
        $rentals = Rentals::findOrFail($id);
        return view('rentals.edit', compact('rentals'));
    }

        public function store(Request $request)
    {
        $rentals = Rentals::create([
            'name' => $request->input('name'),
            'location' => $request->input('location'),
            'price_per_night' => $request->input('price_per_night'),
            'nomber_of_rooms' => $request->input('nomber_of_rooms'),
            'description' => $request->input('description'),
            'equipment' => $request->input('equipment'),
            'image_url' => $request->input('image_url'),
        ]);
        return redirect()->route('rentals.list');
    }

    public function update(Request $request, $id)
    {
        $rentals = Rentals::findOrFail($id);
        $rentals->update([
            'name' => $request->input('name'),
            'price_per_night' => $request->input('price_per_night'),
            'nomber_of_rooms' => $request->input('nomber_of_rooms'),
            'decsription' => $request->input('decsription'),
            'equipment' => $request->input('equipment'),
            'image_url' => $request->input('image_url'),
        ]);

    return redirect()->route('rentals.list');
    }

    public function delete($id)
    {
        $rentals = Rentals::findOrFail($id);
        $rentals->delete();
        return 'Rental deleted!';
    }


}
