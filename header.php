<?php 

include "index0.php";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medilocker</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="tublight.css">
    <link rel="stylesheet" href="e2.css">
    <link rel="stylesheet" href="style12.css">
    <link rel="stylesheet" href="styledoc1.css">
    <link rel="stylesheet" href="abstyle.css">
    <link rel="stylesheet" href="scroll1.css">
        <meta property="og:image" content="https://i.imgur.com/9xiPyyv.png" />

</head>
<body class="body">

    <nav class="sidebar">
        <ul class="tltext logo">
        <li>M</li>
        <li>E</li>
        <li>D</li>
        <li>I</li>
        <li>L</li>
        <li>O</li>
        <li>C</li>
        <li>K</li>
        <li>E</li>
        <li>R</li>
        </ul>

      <div class="menu-content">
        <ul class="menu-items">
          <div class="menu-title"><h1>Hello <br> <span class="username"><?php echo $row["name"]; ?></span> </h1></div>
            <br>
            <br>
          <li class="item">
            <a href="index.php">HOME</a>
          </li>

          <li class="item">
            <a href="docs.php">My Documents</a>
          </li>

          <li class="item">
            <a href="about.php">About</a>
          </li>

          <li class="item">
            <a href="contact.php">Contact</a>
          </li>

          <li class="item">
            <a href="logout.php">Logout</a>
          </li>


        </ul>
      </div>
    </nav>

    <nav class="navbar">
      <i class="fa-solid fa-bars" id="sidebar-close"></i>
    </nav>
    <main class="main">