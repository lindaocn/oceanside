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
        return $rentals;
    }

}
