@extends('app')
@section('content')

<h1>Edit a Rental</h1>

<form action="{{ route ('rentals.update', $rentals->id) }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3 row">
                <label for="name" class="col-sm-4 col-form-label">Name:</label>
                <div class="col-sm-8">
                    <input type="text" id="name" name="name" class="form-control" value="{{ $rentals->name }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="location" class="col-sm-4 col-form-label">Location:</label>
                <div class="col-sm-8">
                    <input type="text" id="location" name="location" class="form-control" value="{{ $rentals->location }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="price_per_night" class="col-sm-4 col-form-label">Price Per Night (euros):</label>
                <div class="col-sm-8">
                    <input type="number" id="price_per_night" name="price_per_night" class="form-control" value="{{ $rentals->price_per_night }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nomber_of_rooms" class="col-sm-4 col-form-label">Number of Rooms:</label>
                <div class="col-sm-8">
                    <input type="number" id="nomber_of_rooms" name="nomber_of_rooms" class="form-control" value="{{ $rentals->nomber_of_rooms }}">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3 row">
                <label for="equipment" class="col-sm-4 col-form-label">Equipment:</label>
                <div class="col-sm-8">
                    <input type="text" id="equipment" name="equipment" class="form-control" value="{{ $rentals->equipment }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="description" class="col-sm-4 col-form-label">Description:</label>
                <div class="col-sm-8">
                    <input type="text" id="description" name="description" class="form-control" value="{{ $rentals->description }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="contact_info" class="col-sm-4 col-form-label">Contact Info:</label>
                <div class="col-sm-8">
                    <input type="text" id="contact_info" name="contact_info" class="form-control" value="{{ $rentals->contact_info }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="image_url" class="col-sm-4 col-form-label">Image URL:</label>
                <div class="col-sm-8">
                    <input type="text" id="image_url" name="image_url" class="form-control" value="{{ $rentals->image_url }}">
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-5">
            <input type="submit" class="btn btn-success mb-2" value="Edit Rental">
            <div class="d-flex gap-2">
                
                <a href="{{ route('rentals.list') }}" class="btn btn-primary">Back to all rentals</a>
                <a href="{{ route('rentals.delete', ['id' => $rentals->id]) }}" class="btn btn-danger">Delete this rental</a>
            </div>
        </div>
    </div>    
</form>

@endsection