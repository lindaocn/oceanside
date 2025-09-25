<h1>Edit a Rental</h1>

<form action="{{ route ('rentals.update', $rentals->id) }}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="{{ $rentals->name }}"><br><br>

    <label for="location">Location:</label>
    <input type="text" id="location" name="location" value="{{ $rentals->location }}"><br><br>

    <label for="price_per_night">Price Per Night:</label>
    <input type="number" id="price_per_night" name="price_per_night" value="{{ $rentals->price_per_night }}"><br><br>

    <label for="nomber_of_rooms">Number of Rooms:</label>
    <input type="number" id="nomber_of_rooms" name="nomber_of_rooms" value="{{ $rentals->nomber_of_rooms }}"><br><br>

    <label for="equipment">Equipment:</label>
    <input type="text" id="equipment" name="equipment" value="{{ $rentals->equipment }}"><br><br>

    <label for="description">Description:</label>
    <input type="text" id="description" name="description" value="{{ $rentals->description }}"><br><br>

    <label for="contact_info">Contact Info:</label>
    <input type="text" id="contact_info" name="contact_info" value="{{ $rentals->contact_info}}"><br><br>

    <label for="image_url">Image URL:</label>
    <input type="text" id="image_url" name="image_url"><br><br>

    <input type="submit" value="Edit Rental">
    
</form>