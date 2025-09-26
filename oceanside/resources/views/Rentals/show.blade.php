@extends('app')
@section('content')

<div class="container mt-4">
    <div class="row">
        <!-- Bild links -->
        <div class="col-md-5 text-center mb-4">
            <img src="{{ $rentals->image_url }}" alt="{{ $rentals->name }}" class="img-fluid rounded">
        </div>
        <!-- Text rechts -->
        <div class="col-md-5 d-flex align-items-start flex-column">
            <h1>{{ $rentals->name }}</h1>
            <p>Location: {{ $rentals->location }}</p>
            <p>Price Per Night (euros):  {{ $rentals->price_per_night }}</p>
            <p>Number of Rooms:  {{ $rentals->nomber_of_rooms }}</p>
            <p>Equipment:  {{ $rentals->equipment }}</p>
            <p>Description:  {{ $rentals->description }}</p>
            <p>
                Contact Info: 
                <a href="mailto:{{ $rentals->contact_info }}?subject=Reservation%20request%20for%20{{ urlencode($rentals->name) }}&body=Hello,%0D%0A%0D%0AI would like to reserve the house '{{ $rentals->name }}'.%0D%0APlease let me know about the available dates and possibilities.%0D%0A%0D%0AThank you!">
                    {{ $rentals->contact_info }}
                </a>
            </p>
        </div>
        <a href="{{ route('rentals.list') }}" class="btn btn-primary">Back to all rentals</a>
    </div>
</div>
    <!-- Buttons unten links -->
    @if(Auth::check() && Auth::user()->isAdmin())

        <div class="row mt-4">
            <div class="col-md-5">
                <div class="d-flex gap-2">
                    <a href="{{ route('rentals.edit', ['id' => $rentals->id]) }}" class="btn btn-warning text-white">Edit this rental</a>
                    <a href="{{ route('rentals.delete', ['id' => $rentals->id]) }}" class="btn btn-danger">Delete this rental</a>
                </div>
            </div>
        </div>
    @endif

@endsection


