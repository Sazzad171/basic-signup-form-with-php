<?php

  $con = mysqli_connect("localhost", "root", "", "dynamic_signup");

  $fName = $_POST['fName'];
  $lName = $_POST['lName'];
  $fullName = $fName. " " .$lName;
  $userName = $_POST['userName'];
  $email = $_POST['email'];
  $password = $_POST['passowrd'];
  $gender = $_POST['gender'];
  $bDate = $_POST['bDate'];

  $sql = "INSERT INTO reg (first_name, last_name, full_name, user_name, email, password, gender, birth_date)
   values ('$fName', '$lName', '$fullName', '$userName', '$email', '$password', '$gender', '$bDate')";

   if(!mysqli_query($con, $sql)) {
     echo "Error in signup";
   }
   else {
     echo "<h1>Signup Successfully!</h1>";
   }

?>