<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel ="stylesheet" type="text/css" href="style.css">
   
    <title>Document</title>
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
<div class="jumbotron">
  <h1 class="display-4">Welcome to Car Service Point</h1>
  <p class="lead">We provide the Best service in the Town.</p>
  <hr class="my-4">
 
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="index.php" role="button">Learn more</a>
  </p>
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