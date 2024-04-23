<?php 
include "index0.php";

if(isset($_POST['submit']) && isset($_FILES['my_image']) && isset($_POST['image_name'])) {

    $img_name = $_FILES['my_image']['name'];
    $img_size = $_FILES['my_image']['size'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
    $error = $_FILES['my_image']['error'];
    $image_name = $_POST['image_name'];
    $username1 = $row["name"];
    $userimg = "$username1.(-$image_name-)";
    

    if ($error === 0) {
        if ($img_size > 83886080){
            $em = "Sorry, your file is too large. Limit is 10 MB";
            header("Location: index.php?error=" . urlencode($em));
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);
            
            $allowed_exs = array("jpg","jpeg","png","pdf","ppt","pptx","doc",'docm','docx','dot','dotx',"zip","rar","gif","mp4","mp3");

            if (in_array($img_ex_lc , $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                $img_upload_path = 'uploads/' . $new_img_name;
                $duplicate_img = mysqli_query($conn,"SELECT * FROM images WHERE iname = '$userimg'" );
                
                if(mysqli_num_rows($duplicate_img) >= 1){
                    echo "<script> alert('You have already uploaded a document with this name'); </script>";
                } else {        
                     header("Location: index.php");
                    move_uploaded_file($tmp_name, $img_upload_path);

                    // Insert into Database
                    $sql = "INSERT INTO images(imagenames, image_url, username, iname, type) VALUES('$image_name', '$new_img_name', '$username1', '$userimg' , '$img_ex_lc')";
                    mysqli_query($conn, $sql);
                    
                   
                    die;
                }
            } else {
                $em = "You can't upload a file of this type!!";
                header("Location: index.php?error=" . urlencode($em));
                die;
            }
        }
    } else {
        $em = "unknown error occurred";
        header("Location: index.php?error=" . urlencode($em));
        die;
    }
} else {
    header("Location: index.php");
    die;
}
?>
