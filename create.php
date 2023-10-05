<?php
session_start();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

<!-- navber start -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./list.php">List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./create.php">contact</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
<!-- navber end -->

<!-- form start -->
<p class=" alert text-center alert-primary">
<?php

echo isset($_SESSION['msg'])? $_SESSION['msg']:'';
?>
</p>
<form action="./controllers/createController.php " method="post">
<div class="container border-2">
<div class="mb-6 row p-2">

  <div class="col-md-4 p-2">
  <label for="exampleFormControlInput1" class="form-label">Name :</label>
  <input name="name" type="text" class="form-control" placeholder="Enter your Name">
  <p class=" text-danger ">
  <?php
  if(isset($_SESSION['name_error'])){
    echo  $_SESSION['name_error'];
  }
 
  ?>
  </p>
  </div>

  <div class="col-md-4 p-2">
  <label for="exampleFormControlInput1" class="form-label">Email :</label>
  <input name="email" type="email" class="form-control" placeholder="Enter your email">
  <p class=" text-danger ">
  <?php
  if(isset($_SESSION['email_error'])){
    echo  $_SESSION['email_error'];
  }
  ?>
  </p>
  </div>

  
</div>

<div class="col-md-6 p-2">
  <label for="exampleFormControlInput1" class="form-label">password :</label>
  <input name="password" type="password" class="form-control" placeholder="Enter your password">
  <p class=" text-danger ">
  <?php
  if(isset($_SESSION['password_error'])){
    echo  $_SESSION['password_error'];
  }
 
  ?>
  </p>
  </div>


<div class="mb-4 col-4 p-2">
  <label for="exampleFormControlTextarea1" class="form-label">Description</label>
  <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="please write something"></textarea>
 <p class=" text-danger">
 <?php
  if(isset($_SESSION['description_error'])){
    echo  $_SESSION['description_error'];
  }
 
  ?>
 </p>
</div>

<button type="submit" class=" btn btn-danger">Submit</button>
</div>
</form>
<!-- form end -->





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>

<?php
session_unset();

?>