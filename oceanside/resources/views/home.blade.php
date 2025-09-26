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
        .row{
                    text-align: center;
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
                    <img src="https://www.rivesduloup.com/wp-content/uploads/2020/06/camping-villes-proche-nice.jpg" class="img-fluid rounded" alt="Camping near Nice">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-16">
                <h4>At OceanSide Rentals</h4>
                <p>We believe your vacation should be as effortless and relaxing as the waves on the shore.
                    <strong>Specialized</strong> in seaside accommodations, we provide carefully selected rentals that combine comfort, style, and the unique charm of coastal living.</p>
                        <div class="Commentaire w-100">
                    <h6><strong>Our mission is simple:</strong></h6>
                    <p>To offer travelers a home away from home, where every detail is designed to create unforgettable memories.<br>
                        Whether you're looking for a peaceful retreat, a family-friendly getaway, or an adventure by the ocean, we've got the perfect spot for you.</p>
                </div>

        </div>
        <div class="feature-list mt-5">
            <h6 class="mb-4"><strong>With OceanSide Rentals</strong>, you can expect:</h6>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="image-suggestion">
<img src="https://cache.marriott.com/is/image/marriotts7prod/tx-mrymb-exterior-23191:Feature-Hor?wid=1920&fit=constrain" class="img-fluid rounded" alt="">
                    </div>
                    <p><strong>Prime locations</strong> just steps from the beach.</p>
                </div>
                <div class="col-md-6">
                    <div class="image-suggestion">
        <img src="https://media.gettyimages.com/id/1254277224/fr/photo/mur-de-pierre-de-roche-de-montagne-dans-lint%C3%A9rieur-luxueux-de-chambre-principale.jpg?s=612x612&w=0&k=20&c=t6Ivi4AaJGBb2jx8UK82qHrJ1lUL66-BDr38wZ3gLVc=" 
             class="rounded mw-100"
             style="width: 600px; height: 220px; object-fit: cover;"
             alt="Chambre luxueuse avec mur en pierre">
                    </div>
                    <p><strong>Fully equipped homes</strong> designed for comfort and convenience.</p>
                </div>
                <div class="col-md-6">
                    <div class="image-suggestion">
        <img src="https://media.gettyimages.com/id/1157320976/fr/photo/homme-daffaires-ayant-une-pause-d%C3%A9jeuner.jpg?s=612x612&w=0&k=20&c=fhOg5icKVvpNh5_ubUSME4xHGghSD9D99S4kTmjd4oU="
             class="rounded mw-100"
             style="width: 600px; height: 220px; object-fit: cover;"
             alt="Chambre luxueuse avec mur en pierre">
                    </div>
                    <p><strong>A dedicated team</strong> always ready to make your stay seamless.</p>
                </div>
                <div class="col-md-6">
                    <div class="image-suggestion">
        <img src="https://media.gettyimages.com/id/1227552766/fr/photo/les-vacances-d%C3%A9t%C3%A9-sont-des-jours-heureux.jpg?s=612x612&w=0&k=20&c=dROez6doxx_SpeLOzU5mXi8EXaAX6la3QKYhprZazk0=" 
             class="rounded mw-100"
             style="width: 600px; height: 220px; object-fit: cover;"
             alt="Chambre luxueuse avec mur en pierre">
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
                <a href="{{ route('register') }}" class="btn btn-outline-secondary w-100">Not a member? Create an account</a>
            </div>
        </div>
    </div>
</body>
@endsection
