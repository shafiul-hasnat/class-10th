<?php
session_start();
include './../env.php';
$name = trim($_REQUEST['name']);
$email=trim($_REQUEST['email']);
$password=$_REQUEST['password'];
$description=trim($_REQUEST['description']);
$veri= password_hash($password,PASSWORD_BCRYPT);


$error=[];

$_SESSION=$error;
// name condation check



if(empty($name)) {
    $error['name_error']='tor name likh';
}else{

      if(strlen($name) >30) {
        $error['name_error']= 'komy likh';
      }
};

// email condition checking


if(empty($email) ) {
  $error['email_error']= 'tor email likh';
}else{
      if(strlen($email)> 50) {
        $error['email_error']= 'komy likh';
      }
}


// password condtion checking

if(empty($password)) {
  $error['password_error']= 'tor password de';
}else{
      if(strlen($password)< 8) {
        $error['password_error']= 'komy likh';
      }
}



// Description condtion checking

if(empty($description)) {
  $error['description_error']= 'kiso mothamot de';
}else{
      if(strlen($description) > 5000) {
        $error['descrtion_error']= 'komy likh';
      }
}


if(count($error) > 0) {


  $_SESSION =$error;
  header('Location: ./../create.php');
}else{

  $query=  "INSERT INTO datas(Name,Email,password, Description) VALUES ('$name','$email','$veri','$description')";

  $result = mysqli_query($conn,$query);
  


  if($result){
    $_SESSION['msg'] = "good";
    header("Location: ./../create.php");
}else{
    $_SESSION['msg'] = 'bad';
    header("Location: ./../create.php");
  }
 
  
}

?>