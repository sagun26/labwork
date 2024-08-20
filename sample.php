<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Khabar Clone</title>
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
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">Online Khabar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">News</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Lifestyle</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Entertainment</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Sports</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Health</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Slider -->
    <div id="newsSlider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://via.placeholder.com/1200x400" class="d-block w-100" alt="Slider Image 1">
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/1200x400" class="d-block w-100" alt="Slider Image 2">
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/1200x400" class="d-block w-100" alt="Slider Image 3">
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

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <!-- Main News Section -->
            <div class="col-md-8 news-section">
                <h2>Latest News</h2>
                <div class="news-item">
                    <img src="https://via.placeholder.com/750x300" alt="News Image">
                    <h3>News Headline 1</h3>
                    <p>Short description of the news article goes here...</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
                <div class="news-item">
                    <img src="https://via.placeholder.com/750x300" alt="News Image">
                    <h3>News Headline 2</h3>
                    <p>Short description of the news article goes here...</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
                <!-- Add more news items as needed -->
            </div>

            <!-- Sidebar -->
            <div class="col-md-4">
                <div class="news-section">
                    <h2>Trending News</h2>
                    <ul class="list-group">
                        <li class="list-group-item">Trending News 1</li>
                        <li class="list-group-item">Trending News 2</li>
                        <li class="list-group-item">Trending News 3</li>
                        <!-- Add more trending news -->
                    </ul>
                </div>
                <div class="news-section">
                    <h2>Advertisements</h2>
                    <img src="https://via.placeholder.com/300x250" class="img-fluid" alt="Ad Image">
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 Online Khabar. All Rights Reserved.</p>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Ensure jQuery and Bootstrap JavaScript are loaded
        $(document).ready(function(){
            $('.carousel').carousel({
                interval: 5000 // changes the speed of the carousel
            });
        });
    </script>
</body>

</html>
