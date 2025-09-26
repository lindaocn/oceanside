@extends('app')
@section('content')

<h1>Creation of a new rental</h1>

<form action="{{ route('rentals.store')}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3 row">
                <label for="name" class="col-sm-4 col-form-label">Name:</label>
                <div class="col-sm-8">
                    <input type="text" id="name" name="name" class="form-control" required> 
                </div>
            </div>
            <div class="mb-3 row">
                <label for="location" class="col-sm-4 col-form-label">Location:</label>
                <div class="col-sm-8">
                    <input type="text" id="location" name="location" class="form-control" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nomber_of_rooms" class="col-sm-4 col-form-label">Number of rooms:</label>
                <div class="col-sm-8">
                    <input type="number" id="nomber_of_rooms" name="nomber_of_rooms" class="form-control" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="price_per_night" class="col-sm-4 col-form-label">Price per Night (euros):</label>
                <div class="col-sm-8">
                    <input type="number" id="price_per_night" name="price_per_night" class="form-control" required>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3 row">
                <label for="description" class="col-sm-4 col-form-label">Description:</label>
                <div class="col-sm-8">
                    <input type="text" id="description" name="description" class="form-control" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="equipment" class="col-sm-4 col-form-label">Equipment:</label>
                <div class="col-sm-8">
                    <input type="text" id="equipment" name="equipment" class="form-control" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="contact_info" class="col-sm-4 col-form-label">Contact Info:</label>
                <div class="col-sm-8">
                    <input type="text" id="contact_info" name="contact_info" class="form-control" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="image_url" class="col-sm-4 col-form-label">Image URL:</label>
                <div class="col-sm-8">
                    <input type="text" id="image_url" name="image_url" class="form-control" required>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-5">
            <input type="submit" class="btn btn-success" value="Create this rental">
            <a href="{{ route('rentals.list') }}" class="btn btn-primary">Back to all rentals</a>
        </div>
    </div>  
</form>

@endsection
