@extends('app')
@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - OceanSide Rentals</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .image-suggestion {
            background: linear-gradient(135deg, #e3f2fd, #f0f8ff);
            border: 2px dashed #008cffff;
            border-radius: 10px;
            padding: 1.5rem;
            margin: 1rem 0;
            text-align: center;
            position: relative;
            transition: all 0.3s ease;
        }
        .image-suggestion:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(33, 150, 243, 0.2);
        }
        .Commentaire {
            text-align: center;
        }
        .suggestion-text {
            color: #1976d2;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }
        .suggestion-desc {
            color: #666;
            font-size: 0.9rem;
            font-style: italic;
        }
        .feature-list {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <h1 class="alert alert-primary" role="alert">About Us – OceanSide Rentals</h1>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-12">
                <div class="image-suggestion">
                    <img src="/oceanside/resources/views/Images/camping-villes-proche-nice.webp" class="img-fluid rounded" alt="Camping near Nice">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <h4>At OceanSide Rentals</h4>
                <p>We believe your vacation should be as effortless and relaxing as the waves on the shore.
                    <strong>Specialized</strong> in seaside accommodations, we provide carefully selected rentals that combine comfort, style, and the unique charm of coastal living.</p>

            </div>
            <div class="col-lg-4 d-flex align-items-center">
                <div class="Commentaire w-100">
                    <h6><strong>Our mission is simple:</strong></h6>
                    <p>To offer travelers a home away from home, where every detail is designed to create unforgettable memories.<br>
                        Whether you're looking for a peaceful retreat, a family-friendly getaway, or an adventure by the ocean, we've got the perfect spot for you.</p>
                </div>
            </div>
        </div>
        <div class="feature-list mt-5">
            <h6 class="mb-4"><strong>With OceanSide Rentals</strong>, you can expect:</h6>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="image-suggestion">
                        <div class="suggestion-text">LOCALISATION</div>
                        <div class="suggestion-desc">Vue aérienne de la plage</div>
                    </div>
                    <p><strong>Prime locations</strong> just steps from the beach.</p>
                </div>
                <div class="col-md-6">
                    <div class="image-suggestion">
                        <div class="suggestion-text">CONFORT</div>
                        <div class="suggestion-desc">Salon moderne et équipé</div>
                    </div>
                    <p><strong>Fully equipped homes</strong> designed for comfort and convenience.</p>
                </div>
                <div class="col-md-6">
                    <div class="image-suggestion">
                        <div class="suggestion-text">SERVICE</div>
                        <div class="suggestion-desc">Équipe accueillante</div>
                    </div>
                    <p><strong>A dedicated team</strong> always ready to make your stay seamless.</p>
                </div>
                <div class="col-md-6">
                    <div class="image-suggestion">
                        <div class="suggestion-text">EXPÉRIENCE</div>
                        <div class="suggestion-desc">Famille heureuse en vacances</div>
                    </div>
                    <p><strong>We're more than just rentals</strong> — we're your trusted partner for coastal escapes.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <a href="{{ route('rentals.list') }}" class="btn btn-primary w-100 mb-2">See our rentals</a>
            </div>
            <div class="col-md-6">
                <a href="" class="btn btn-outline-secondary w-100">Not a member? Create an account</a>
            </div>
        </div>
    </div>
</body>
@endsection
