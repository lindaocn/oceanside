@extends('app')
@section('content')

<h1>Current Rentals</h1>
<u>
    @foreach ($rentals as $rental)
        <li>
            <a href="{{ route('rentals.show', $rental->id) }}">
                {{ $rental->name }} - {{ $rental->location }} - € {{ $rental->price_per_night }} per night - {{ $rental->nomber_of_rooms }} rooms - {{ $rental->description }} - {{ $rental->equipment }} - {{ $rental->contact_info }} - <img src="{{ $rental->image_url }}">
            </a>
        </li>   
    @endforeach
        </a>
</u>
@endsection