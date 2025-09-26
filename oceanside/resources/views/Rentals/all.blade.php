@extends('app')
@section('content')
    <div class="mt-4">
        <h1>Available Rentals</h1>
        <div class="row">
            @foreach ($rentals as $rental)
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100 border border-light shadow-sm rounded-4" style="background-color: #e3f0ff;">
                        <img src="{{ $rental->image_url }}" class="card-img-top rounded-top-4" alt="{{ $rental->name }}">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{ route('rentals.show', $rental->id) }}">{{ $rental->name }}</a>
                            </h5>
                            <p class="card-text">
                                {{ $rental->location }}<br>
                                € {{ $rental->price_per_night }} per night<br>
                                {{ $rental->nomber_of_rooms }} rooms<br>
                                {{ $rental->description }}<br>
                                {{ $rental->equipment }}<br>
                                <a href="mailto:{{ $rental->contact_info }}"> {{ $rental->contact_info }}</a>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
            <div class="row mt-4 justify-content-center">
                <div class="col-md-6 d-flex justify-content-center">
                    <a href="{{ route('rentals.create') }}" class="btn btn-success w-100 mb-2">Create a Rental</a>
                </div>
            </div>
@endsection
