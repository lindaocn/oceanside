@extends('app')
@section('content')

<h1>Liste des Pokémons</h1>
<u>
    @foreach ($pokemons as $pokemon)
        @if ($pokemon->type == 'Plante')
            <a href="{{ route('pokemons.show', $pokemon->id) }}" style="background-color:green">{{ $pokemon->name }} -
                Catégorie: {{ $pokemon->type }} - HP: {{ $pokemon->health }} - ATK: {{ $pokemon->attack }}</a>
            <br>
        @else
            <a href="{{ route('pokemons.show', $pokemon->id) }}">{{ $pokemon->name }} - Catégorie: {{ $pokemon->type }} -
                HP: {{ $pokemon->health }} - ATK: {{ $pokemon->attack }}</a>
            <br>
        @endif
    @endforeach
</u>

@endsection