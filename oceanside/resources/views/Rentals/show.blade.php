<h1>{{ $rentals->name }}</h1>
<p>Location: {{ $rentals->location }}</p>
<p>Price Per Night (euros):  {{ $rentals->price_per_night }}</p>
<p>Number of Rooms:  {{ $rentals->nomber_of_rooms }}</p>
<p>Equipment:  {{ $rentals->equipment }}</p>
<p>Description:  {{ $rentals->description }}</p>
<p>Contact Info: <a href="mailto:{{ $rentals->contact_info }}"> {{ $rentals->contact_info }} </a></p>
<img src="{{ $rentals->image_url }}" alt="{{ $rentals->name }}">
<a href="{{ route('rentals.edit', ['id' => $rentals->id]) }}">Edit this rental</a>
<a href="{{ route('rentals.list') }}">Back to all rentals</a>
<a href="{{ route('rentals.delete', ['id' => $rentals->id]) }}">Delete this rental</a>