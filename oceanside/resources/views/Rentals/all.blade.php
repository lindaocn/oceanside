@extends('app')
@section('content')

<h1>Current Rentals</h1>
<u>
    @foreach ($rentals as $rental)
        <li>
            <a href="{{ route('rentals.show', $rental->id) }}">
                {{ $rental->name }} - {{ $rental->location }} - ${{ $rental->price_per_night }} per night - {{ $rental->nomber_of_rooms }} rooms - {{ $rental->description }} - {{ $rental->equipment }} - <img src="{{ $rental->image_url }}">
            </a>

            
        </li>   
    @endforeach
                        <a href="{{ route('rentals.create') }}" 
           class="inline-block bg-green-600 text-white px-6 py-3 rounded-md hover:bg-green-700 transition duration-200">
            + Add New Rental
        </a>
</u>
@endsection