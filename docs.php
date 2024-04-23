<?php include "header.php";?>

<div class="everything2">
    <div class="et2">
        <?php $b =  "SELECT * FROM images ORDER BY id DESC";
        $res2 =  mysqli_query($conn, $b);
        foreach($res2 as $z){
            if ($z['username'] == $row['name']){?>
                 <div>
                    <span>
                        <?php if (($z['type'] == 'png') OR ($z['type'] == 'jpg') OR ($z['type'] == 'jpeg')) {  ?>
                            <img src="uploads/<?=$z['image_url']?>" class="dimg">
                    <?php } elseif (($z['type'] == 'pdf'))  {?>
                            <img src="uploads/PDF/PDF.png" class="dimg">
                    <?php } elseif (($z['type'] == 'ppt') OR ($z['type'] == 'ppt'))  {?>
                            <img src="uploads/PDF/PPT.png" class="dimg">
                    <?php } elseif (($z['type'] == 'txt')) {?>
                            <img src="uploads/PDF/TXT.png" class="dimg">
                    <?php } elseif (($z['type'] == 'doc') OR ($z['type'] == 'docm') OR ($z['type'] == 'docx') OR ($z['type'] == 'dot') OR ($z['type'] == 'dotx')) {?>
                            <img src="uploads/PDF/DOC.png" class="dimg">
                    <?php } elseif (($z['type'] == 'zip')) {?>
                            <img src="uploads/PDF/ZIP.png" class="dimg">
                    <?php } elseif (($z['type'] == 'rar')) {?>
                            <img src="uploads/PDF/RAR.png" class="dimg">
                    <?php } elseif (($z['type'] == 'mp4')) {?>
                            <img src="uploads/PDF/MP4.png" class="dimg">
                    <?php } elseif (($z['type'] == 'gif')) {?>
                            <img src="uploads/PDF/GIF.png" class="dimg">
                    <?php } elseif (($z['type'] == 'mp3')) {?>
                            <img src="uploads/PDF/MP3.png" class="dimg">
                    <?php }; ?>

                            <br>

                        <h3 id="imgn"><?php echo $z['imagenames'];?></h3> 
                        <br>
                        <a href="uploads/<?=$z['image_url']?>" class="link1">View</a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="uploads/<?=$z['image_url']?>" Download class="link1">Download</a>
                        <br><br>
                        <a href="#" class="link1">Uploaded at <?php echo $z['time'] ?></a>
                       
                
                    </span>
                </div>
                    <?php     }
        };  ?>
    </div>


</div>
<script src="app2.js"></script>
<?php include "footer.php"; ?>