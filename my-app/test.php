<?php include 'Connect.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Rental</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding-top: 56px;
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #343a40;
        }

        .container {
            margin-top: 20px;
        }

        footer {
            background-color: #343a40;
            color: #ffffff;
            text-align: center;
            padding: 1em 0;
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
   
<section>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="movierentals.jpeg" alt="logo" width="80"/></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#home">Home</a>
        </li>
        <li class="nav-item">
<a class="nav-link" href="#Movies">Movies</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <!-- Carousel -->
    <div id="movieCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="sunset.jpeg" class="d-block w-100" alt="Movie 1">
            </div>
            <div class="carousel-item">
                <img src="water.jpg" class="d-block w-100" alt="Movie 2">
            </div>
            <div class="carousel-item">
                <img src="swiss.jpg" class="d-block w-100" alt="Movie 3">
            </div>
        </div>
        <a class="carousel-control-prev" href="#movieCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#movieCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Movie Listings -->
    <div class="container">
        <style> .card{display: inline;
  margin-right: 10px;}
  </style>
        <h2>Featured Movies</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="movie4.jpg" class="card-img-top" alt="Movie 4">
                    <div class="card-body">
                        <h5 class="card-title">Movie 4</h5>
                        <p class="card-text">Description of Movie 4.</p>
                        <a href="#Movies" class="btn btn-primary">Rent Now</a>
                    </div>
                </div>
            </div>
            <!-- Repeat similar blocks for other movies -->
        </div>
    </div>
    <div class="container">
        <h2>Featured Movies</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="movie4.jpg" class="card-img-top" alt="Movie 4">
                    <div class="card-body">
                        <h5 class="card-title">Movie 4</h5>
                        <p class="card-text">Description of Movie 4.</p>
                        <a href="#Movies" class="btn btn-primary">Rent Now</a>
                    </div>
                </div>
            </div>
            <!-- Repeat similar blocks for other movies -->
        </div>
    </div>
    <div class="container">
        <h2>Featured Movies</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="movie4.jpg" class="card-img-top" alt="Movie 4">
                    <div class="card-body">
                        <h5 class="card-title">Movie 4</h5>
                        <p class="card-text">Description of Movie 4.</p>
                        <a href="#Movies" class="btn btn-primary">Rent Now</a>
                    </div>
                </div>
            </div>
            <!-- Repeat similar blocks for other movies -->
        </div>
    </div>

    <!-- Contact Form -->
    <div class="container">
        <h2>Contact Us</h2>
        <p>Have questions or concerns? Reach out to us!</p>

        <form>
            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" rows="3" placeholder="Enter your message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2023 Movie Rental. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS and Popper.js (required for Bootstrap components) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
