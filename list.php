

<?php
include './env.php';
$query = "SELECT * FROM datas";
$result=mysqli_query($conn,$query);

$posts = mysqli_fetch_all($result,1);


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



<div class="container">
  
<div class="col-lg-8 text-center ">
<table class="table table-bordered table-hover text-center">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($posts as $key=> $post) {
      ?>
    <tr>
      <th scope="row"><?= ++$key ?></th>
      <td><?= $post['Name'] ?></td>
      <td><?= $post['Email'] ?></td>
      <td><?= $post['password'] ?></td>
      <td><?= strlen($post['Description']) > 20 ? substr($post['Description'],0,50).'...': $post['Description'] ?></td>
      <td>
        <div class=" btn-group-sm">
          <button class="btn btn-outline-primary">view</button>
          <button class="btn btn-outline-success">Edit</button>
          <a href="./controllers/deletecontroller.php?Id=<?= $post['Id'] ?>" class="btn btn-outline-danger">Delete </a>
        </div>
      </td>
    </tr>
    <?php
  }
  ?>
  </tbody>
</table>
</div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>