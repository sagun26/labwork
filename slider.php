<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS for styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #1e90ff;
        }

        .navbar-brand,
        .navbar-nav .nav-link {
            color: #fff !important;
        }

        .navbar-brand:hover,
        .navbar-nav .nav-link:hover {
            color: #ffeb3b !important;
        }

        .slider img {
            width: 100%;
            height: auto;
        }

        .news-section {
            padding: 20px 0;
        }

        .news-section h2 {
            margin-bottom: 20px;
        }

        .news-item {
            margin-bottom: 20px;
        }

        .news-item img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .footer {
            background-color: #343a40;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        /* Responsive Design */
        @media (max-width: 767.98px) {
            .news-item img {
                height: auto;
            }
        }
        <style>
  /* Adjust the width and height of the images in the carousel */
  .carousel-item img {
    width: 80%; /* Set the width to 80% of the container */
    height: auto; /* Maintain the aspect ratio of the image */
    margin: 0 auto; /* Center the image horizontally */
  }

  /* Responsive adjustment for smaller screens */
  @media (max-width: 767px) {
    .carousel-item img {
      width: 100%; /* Make the image fill the container on smaller screens */
    }
  }
</style>

    </style>
</head>
<body>
    <!-- Carousel Slider -->
    <div id="newsSlider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img.jpg" class="d-block w-100" alt="Slider Image 1">
            </div>
            <div class="carousel-item">
                <img src="image1.jpeg" class="d-block w-100" alt="Slider Image 2">
            </div>
            <div class="carousel-item">
                <img src="image2.jpeg" class="d-block w-100" alt="Slider Image 3">
            </div>
        </div>
        <a class="carousel-control-prev" href="#newsSlider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#newsSlider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
