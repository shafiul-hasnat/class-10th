<?php

 $hostname ='localhost';
 $username ='root';
 $password ='';
 $database ='form';


  $conn =mysqli_connect($hostname, $username, $password, $database);

  $_SESSION=$conn;
