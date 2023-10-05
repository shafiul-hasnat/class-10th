<?php
  $postid = $_REQUEST['Id'];
  include './../env.php';
  $query ="DELETE FROM datas WHERE Id = '$postid'";
  $result = mysqli_query($conn,$query);
  
  header('Location: ./../list.php');



?>