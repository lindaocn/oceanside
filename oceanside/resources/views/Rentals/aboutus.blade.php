@extends('app')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - OceanSide Rentals</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f8f9fa;
        }
        
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
        
        .image-suggestion::before {
            font-size: 2rem;
            display: block;
            margin-bottom: 0.5rem;
        }
        .Commentaire{
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
        
        .suggestion-badge {
            position: absolute;
            top: -8px;
            right: -8px;
            background: #ff5722;
            color: white;
            padding: 0.3rem 0.6rem;
            border-radius: 15px;
            font-size: 0.7rem;
            font-weight: bold;
        }
        
        .hero-image {
            height: 250px;
        }
        
        .side-image {
            height: 200px;
            left: 25%;
        }
        
        .feature-image {
            height: 150px;
        }
        
        .gallery-image {
            height: 120px;
        }
        
        .content-highlight {
            background: linear-gradient(135deg, #fff3e0, #ffeaa7);
            padding: 1rem;
            border-radius: 8px;
            border-left: 4px solid #ff9800;
            margin-left: 50%;
        }
        
        .navbar-brand {
            font-weight: bold;
            color: #1976d2 !important;
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
        
        <h1 class="alert alert-primary" role="alert">About Us – OceanSide Rentals</h1>
        
        <div class="image-suggestion hero-image">
            <img src="/oceanside/resources/views/Images/camping-villes-proche-nice.webp" class="suggestion-desc"></div>
        </div>

        <div class="container-xxl" style="margin-top: 3%">
            
            <div class="row">
                <div class="col-lg-8">
                    <h4>At OceanSide Rentals</h4>
                    
                    <p>We believe your vacation should be as effortless and relaxing as the waves on the shore.
                    <strong>Specialized</strong> in seaside accommodations, we provide carefully selected rentals that combine comfort, style, and the unique charm of coastal living.</p>


                    <div class="image-suggestion side-image my-4">
                        <div class="suggestion-text">IMAGE AMBIANCE</div>
                        <div class="suggestion-desc">Intérieur cosy d'une location ou terrasse avec vue mer<br>
                        Format carré 400x400px</div>
                    </div>



                </div>
                                    <div class="Commentaire">
                        <h6><strong>Our mission is simple:</strong></h6>
                        <p>To offer travelers a home away from home, where every detail is designed to create unforgettable memories.<br> 
                        Whether you're looking for a peaceful retreat, a family-friendly getaway, or an adventure by the ocean, we've got the perfect spot for you.</p>
                    </div>
            </div>


            <div class="feature-list mt-5">
                <h6 class="mb-4"> <strong> OceanSide Rentals</strong>, you can expect:</h6>
                

                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="image-suggestion feature-image">
                            <div class="suggestion-text">LOCALISATION</div>
                            <div class="suggestion-desc">Vue aérienne de la plage</div>
                        </div>
                        <p><strong>Prime locations</strong> just steps from the beach.</p>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="image-suggestion feature-image">
                            <div class="suggestion-text">CONFORT</div>
                            <div class="suggestion-desc">Salon moderne et équipé</div>
                        </div>
                        <p><strong>Fully equipped homes</strong> designed for comfort and convenience.</p>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="image-suggestion feature-image">
                            <div class="suggestion-text">SERVICE</div>
                            <div class="suggestion-desc">Équipe accueillante</div>
                        </div>
                        <p><strong>A dedicated team</strong> always ready to make your stay seamless.</p>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="image-suggestion feature-image">
                            <div class="suggestion-text">EXPÉRIENCE</div>
                            <div class="suggestion-desc">Famille heureuse en vacances</div>
                        </div>
                        <p><strong>We're more than just rentals</strong> — we're your trusted partner for coastal escapes.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>


@endsection