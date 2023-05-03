<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>My Responsive Website</title>

  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

  <!-- Include custom CSS -->
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">My Website</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Header Section -->
  <header>
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1>Welcome to My Website</h1>
        <p>This is a simple responsive website built using Bootstrap.</p>
      </div>
    </div>
  </header>

  <!-- Main Section -->
  <main>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2>About Us</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis feugiat auctor tellus, ac lobortis lorem sodales id. Sed lacinia, mi eu posuere interdum, nibh arcu pulvinar leo, non malesuada quam nunc ut neque. Cras aliquam ut nulla at iaculis. In ut vehicula nisi. Vestibulum vitae fermentum dolor.</p>
        </div>
        <div class="col-md-6">
          <img src="https://via.placeholder.com/500x350" class="img-fluid" alt="Responsive image">
        </div>
      </div>
    </div>
  </main>

  <!-- Footer Section -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p>&copy; 2023 My Website</p>
        </div>
        <div class="col-md-6">
          <p class="text-right">Designed by Me</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Include Bootstrap JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.
