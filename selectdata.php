<?php

 // connecting to the Database
 $servername = "localhost";
 $username = "root";
 $password = ""; //it is our local host so we dont require password (if we give password it show error)
 $database = "dbkeshav";

 //create a connection
 $conn = mysqli_connect($servername, $username, $password, $database);
 //Die if connection was not successful
 if (!$conn) {
   die("Sorry we failed to connect " . mysqli_connect_error());
 } 
 else {
      echo "Connection was successful<br>";
 }
 $sql = "SELECT * FROM `phptrip`";
 $result = mysqli_query($conn, $sql);

 //find the no. of records returned
 $num = mysqli_num_rows($result);
 echo $num." Records found in database";
 echo"<br>";

 // Display the rows returned by the sql query
 if($num>0){
  //  $row = mysqli_fetch_assoc($result);
  //  echo var_dump($row);
  //   echo"<br>";
  //   $row = mysqli_fetch_assoc($result);
  //  echo var_dump($row);
  //   echo"<br>";
  //   $row = mysqli_fetch_assoc($result);
  //  echo var_dump($row);
  //   echo"<br>";
  //   $row = mysqli_fetch_assoc($result);
  //  echo var_dump($row);
  //   echo"<br>";
  //   $row = mysqli_fetch_assoc($result);
  //  echo var_dump($row);
  //   echo"<br>";
   
  //we can fetch data in a better way by using loops
  while( $row = mysqli_fetch_assoc($result)){
    // echo var_dump($row);
    echo $row['S.no']." Hello ".$row['Name']." Welcome to ".$row['Destination'];
     echo"<br>";
  }
 }
 ?>
