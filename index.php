<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel ="stylesheet" type="text/css" href="style.css">
   
    <title>Car Service</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">CarPoint</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="images/Carr.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h2 class="ram" style="color:yellow">Your one-stop for a hassle-free
driving experience</h2>
        <p></p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="images/Car3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/Car3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<section class="my-5">
    <div class="py-5">
        <h3 class="text-center">About Us </h3>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
            <h2 style="color:red">High-Tech Car Point</h2>
            <p class="py-3" style="text-align:right"><b>The right service can make or break your car. Or your schedule. That's why with our portfolio services we ensure that your car gets all the care it needs in 90 minutes flat.</b></p>
            <a href="about.php" class="btn btn-success">check more </a>
      <img src="images/Car3.jpg" class="img-fluid" >
               
                </section>
                <section class="my-5">
    <div class="py-5">
        <h3 class="text-center">Our Services </h3>
        <div class="row2">
            <div class="col-lg-4 col-md-4 col-12">
            <div class="card" style="width:400px" position="center">
  <img class="card-img-top" src="images/spare.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Genuine Spare parts</h4>
    <p class="card-text">Affordable price</p>
    <a href="#" class="btn btn-primary">See Profile</a>

    <div class="card" style="width:400px">
  <img class="card-img-top" src="images/wash.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Car Washing</h4>
    <p class="card-text"></p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
  </div>
</div>
<div class="card" style="width:400px">
  <img class="card-img-top" src="images/ear.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Car Painting</h4>
    <p class="card-text">Orignal and lustrous</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>

</div>
</div>
</section>

<section class="my-5">
<div class="py-5">
<h2 class="text-center">Our Gallery</h2>
</div>

<div class="w-50 m-auto">
<form action="userinfo.php" method="post">
<div class="form-group">
<label>Username</label>
<input type="text" name="user" class="form-control">
</div>

<div class="form-group">
<label>E-mail</label>
<input type="text" name="email" class="form-control">
</div>

<div class="form-group">
<label>Mobile no.</label>
<input type="int" name="mobile" class="form-control">
</div>

<div class="form-group">
<label>Comments</label>
<textarea class="form-control" name="comments">
</textarea>
</div>

<button type="submit" class="btn btn-success" >Submit</button>

</div>
<footer>
<p class="p-3 bg-dark text-white text-center">@abhirao1798<p>
</footer>

</body>
</html>