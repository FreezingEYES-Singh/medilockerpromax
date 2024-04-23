<?php 
include "config.php";

if(isset($_POST["submit"])){
    $usernameemail = $_POST["usernameemail"];
    $password = $_POST["password"];
    $result = mysqli_query($conn,"SELECT * FROM db_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        if($password == $row["password"]){
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location: index.php");
        } else {
            echo
            "<script> alert('Wrong Password'); </script>";
        }
    } else{
        echo
        "<script> alert('Username not registered'); </script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="stylelogin.css">
</head>
<body>
    <div class="login_container">
      <div class="box" style="--clr:#0f0;"></div>
      <div class="box" style="--clr:#ff0;"></div>
      <div class="box" style="--clr:#f00;"></div>
      <div class="box" style="--clr:#f0f;"></div>
      <div class="box" style="--clr:#0ff;"></div>
      <div class="box" style="--clr:#0f0;"></div>
      <div class="box" style="--clr:#ff0;"></div>
      <div class="box" style="--clr:#f00;"></div>
      <div class="box" style="--clr:#f0f;"></div>
      <div class="box" style="--clr:#0ff;"></div>
      <div class="box" style="--clr:#0f0;"></div>
      <div class="box" style="--clr:#ff0;"></div>
      <div class="box" style="--clr:#f00;"></div>
      <div class="box" style="--clr:#f0f;"></div>
      <div class="box" style="--clr:#0ff;"></div>
    </div>
    <div class="login login2">
        <h2>Login</h2>
        <form action="" method="POST">
            <div class="inputBox">
                <input type="text" name="usernameemail" id="usernameemail" required/>
                <span>Username</span>
            </div>
            <div class="inputBox">
                <input type="password" name="password" id="password" required />
                <span>Password</span>
            </div>
            <div class="inputBox">
                <button type="submit" name="submit" class="lbtn">Sign in</button>
            </div>

        </form>
        <div class="group">
            <a href="registration.php">Signup</a>
        </div>

    </div>
    <!-- --------- -->
    
    <script src="app3.js"></script>
</body>
</html>