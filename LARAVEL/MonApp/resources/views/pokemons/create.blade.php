<h1>Creation de pokemon</h1>

<form action="{{ route ('pokemons.store') }}" method="POST">
    @csrf
    <label for="name">Nom:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="type">Type:</label>
    <input type="text" id="type" name="type" required><br><br>

    <label for="health">HP:</label>
    <input type="number" id="health" name="health" required><br><br>

    <label for="attack">ATK:</label>
    <input type="number" id="attack" name="attack" required><br><br>

    <label for="image_url">Image URL:</label>
    <input type="text" id="image_url" name="image_url" required><br><br>

    <input type="submit" value="Créer le Pokémon">
</form>