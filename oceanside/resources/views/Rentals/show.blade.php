<h1>{{ $rentals->name }}</h1>
<p>Location: {{ $rentals->location }}</p>
<p>Price Per Night: {{ $rentals->price_per_night }}</p>
<p>Number of Rooms {{ $rentals->nomber_of_rooms }}</p>
<p>Equipment {{ $rentals->equipment }}</p>
<p>Description{{ $rentals->decsription }}</p>
<img src="{{ $rentals->image_url }}" alt="{{ $rentals->name }}">