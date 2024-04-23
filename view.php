<?php include "config.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="index.php">&#8592;</a>  
    <?php
        $sql = "SELECT * FROM images ORDER BY id DESC";
        $res = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($res) > 0){
            while ($images = mysqli_fetch_assoc($res)) { ?>
                <div class="alb">
                    <img src="uploads/<?=$images['image_url']?>">

                </div>
    <?php }}?>  
</body>
</html>