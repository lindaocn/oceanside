@extends('app')
@extends('content')

<h1>Listing of the rentals</h1>
<u>
    @foreach ($rentals as $rentals)
        <li>
            <a href="{{ route('rentals.show', $rental->id) }}">
                {{ $rentals->name }} - {{ $rentals->location }} - ${{ $rentals->price_per_night }} per night - {{ $rentals->nomber_of_rooms }} rooms - {{ $rentals->description }} - {{ $rentals->equipment }} - <img src="{{ $rentals->image_url }}">
            </a>
        </li>   
    @endforeach
</u>

@endsection