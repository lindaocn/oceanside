<h1>{{ $pokemon->name }}</h1>
<p>Catégorie: {{ $pokemon->type }}</p>
<p>HP: {{ $pokemon->health }}</p>
<p>ATK: {{ $pokemon->attack }}</p>
<p>Description: {{ $pokemon->description }}</p>
<img src="{{ $pokemon->image_url }}" alt="{{ $pokemon->name }}">
