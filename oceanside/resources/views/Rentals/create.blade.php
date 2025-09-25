<h1>Creation of a new rental</h1>

<form action="{{ route('rentals.store')}" method="POST">
    @csrf
    <!-- CSRF token for security -->
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="location">Location:</label>
    <input type="text" id="location" name="location" required><br><br>

    <label for="price_per_night">Price per Night:</label>
    <input type="number" id="price_per_night" name="price_per_night" required><br><br>

    <label for="description">Description:</label>
    <input type="text" id="description" name="description" required><br><br>
    
    <label for="equipment">Description:</label>
    <input type="text" id="equipment" name="equipment" required><br><br>

    <label for="image_url">Image URL:</label>
    <input type="text" id="image_url" name="image_url" required><br><br>

    <input type="submit" value="Créer le Pokémon">
</form>