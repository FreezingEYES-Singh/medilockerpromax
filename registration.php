<?php 
include "config.php";

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $duplicate = mysqli_query($conn,"SELECT * FROM db_user WHERE username = '$username' OR email ='$email' " );
    if(mysqli_num_rows($duplicate) > 0){
        echo
        "<script> alert('Username or Email has already taken'); </script>";
    } else {
        if(strlen($password) >= 6){
            
        if($password == $cpassword){
            
            $query = "INSERT INTO db_user (name, username, email, password) VALUES ('$name','$username','$email','$password')";
            mysqli_query($conn, $query);
            // $stmt = mysqli_prepare($conn, $query);

            
            echo
            "<script> alert('Registration Successful'); </script>";
        } else{
            echo
            "<script> alert('Password does not match'); </script>";
        }
        } else{
            echo
            "<script> alert('Password must be atleast of 6 characters'); </script>";
       
    };
};
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="stylelogin.css">
</head>
<body>

    <div class="login_container">
      <div class="box" style="--clr: #0f0"></div>
      <div class="box" style="--clr: #ff0"></div>
      <div class="box" style="--clr: #f00"></div>
      <div class="box" style="--clr: #f0f"></div>
      <div class="box" style="--clr: #0ff"></div>
      <div class="box" style="--clr: #0f0"></div>
      <div class="box" style="--clr: #ff0"></div>
      <div class="box" style="--clr: #f00"></div>
      <div class="box" style="--clr: #f0f"></div>
      <div class="box" style="--clr: #0ff"></div>
      <div class="box" style="--clr: #0f0"></div>
      <div class="box" style="--clr: #ff0"></div>
      <div class="box" style="--clr: #f00"></div>
      <div class="box" style="--clr: #f0f"></div>
      <div class="box" style="--clr: #0ff"></div>
    </div>


    <div class="login">
      
    <h2>Registration</h2>
        <form action="" method="post">
            <div class="inputBox">
                <input type="text" name="name" id="name" required />
                    <span>Name</span>
            </div>
            <div class="inputBox">
                <input type="text" name="username" id="username" required />
                <span>Userame</span>
            </div>
            <div class="inputBox">
                <input type="text" name="email" id="email" required />
                <span>Email</span>
            </div>
            <div class="inputBox">
                <input type="password" name="password" id="password" required />
                <span>Password</span>
            </div>
            <div class="inputBox">
                <input type="password" name="cpassword" id="cpassword" required />
                <span>Confirm Password</span>
            </div>
            <div class="inputBox">
                <button type="submit" name="submit" class="lbtn">Sign Up</button>
            </div>
            <!-- <button type="submit" name="submit">Register</button> -->
        </form> 
        <div class="group">
            <a href="login.php">Sign In</a>
        </div>
    </div>
    <script src="app3.js"></script>

</body>
</html>