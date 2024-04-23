<?php include "header.php"; ?>

        <div class="everything">
        <h1 ><span class="e1">Welcome Back <?php echo $row["name"]; ?></span></h1>
            <div id="e2">
                <br>
                <br>
                <br><br>
                <p>Here you can save your precious data and can access from anywhere.</p>
                <br><br><br>
                <p>How to Submit??</p>
                <br>
                <a href="about.php" id="cm">Click me</a>
                <br>
                <br>
                <br>
                <br>
                <?php 
                    if (isset($_GET['error'])): ?>
                        <p><?php echo $_GET['error']; ?></p>
                <?php endif?>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="my_image" required id="file-uploader">
                    <input type="text" name="image_name" required>
                    <input type="submit" name="submit" value="Submit" id="submitf">
                </form>

            </div>
        </div>
        <script src="uploader.js"></script>
                    
<?php include "footer.php"; ?>
