<?php
  $servername="localhost";
  $username="root";
  $passsword="";
  $dbname="webatecha";
  $conn=mysqli_connect($servername,$username,$passsword,$dbname);
  if($conn){
    echo "Connection Successful<br>";
  }
  $sql="create table lab24(id int primary key,name varchar(20));";
  
  $result=mysqli_query($conn,$sql);
  if($result){
    echo "Table created successfully<br>";
  }

  $sql1="insert into lab24 values(1,'Puku');";
  $result1=mysqli_query($conn,$sql1);
  if($result1){
    echo "Data inserted successfully<br>";
  }

  $name="Utsarga Manandhar";
  echo "<br>";
  echo $name."<br>";
  echo "The reverse of string is ".strrev($name)."<br>";
  echo "The string in upper case is ".strtoupper($name)."<br>";
  echo "The string in lower case is ".strtolower($name);
  ?>
