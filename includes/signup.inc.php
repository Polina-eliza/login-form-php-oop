<?php

if (isset($_POST["submit"])) {
    // Grabbing the data
    $uid = $_POST["uid"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
  
    // Include necessary classes
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";

    // Instantiate SignupContr class
    $signup = new SignupContr($uid, $email, $pwd);

    // Running error handlers and user signup
    $signup->signupUser();

    // Redirecting back to the front page
    header("location: ../index.php?error=none");
}