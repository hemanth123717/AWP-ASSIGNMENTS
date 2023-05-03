<!DOCTYPE html>
<html>
  <head>
    <title>Responsive Website using Bootstrap</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/esm/popper.min.js"></script>

    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <style>
      /* Custom styles */
      body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
      }
      .jumbotron {
        background-color: #343a40;
        color: #fff;
      }
    </style>
  </head>
  <body>
    <!-- Navigation bar -->
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
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Welcome to My Website!</h1>
        <p class="lead">This is a simple website created using Bootstrap.</p>
      </div>
    </div>

    <!-- Main content -->
    <div class="container">
      <h2>About Us</h2>
      <p>Hello Everyone! <br>This is B.Hemanth kumar studying B-TECH in Centurion University Of Technology and Management.This is a simple website to know about us which is created by using Bootstrap</p><br> 
      <h2>Our Services</h2>
      <ul>
        <li>Web Design</li>
        <li>Web Development</li>
        <li>Mobile App Development</li>
        <li>Digital Marketing</li>
      </ul>

      <h2>Contact Us</h2>
      <form>
        <div class="form-group">
          <label for="name">Name: B.Hemanth Kumar</label><br>
          <label for="Email">Email: hemanth123717@gmail.com</label><br>
          <label for="Phone-no">Phone-no: 6304957250</label><br>
    </div>
    </form>
    </body>
    </html>

