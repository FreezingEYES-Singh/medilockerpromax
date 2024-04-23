<?php include "index0.php"; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="cfstyle.css" />
  </head>
  <body>
    <form action="https://api.web3forms.com/submit" method="POST">
      <input type="hidden" name="access_key" value="1168b02f-9491-4e0f-8c82-2e20e0205a8d">
      <input type="hidden" name="ID" value="<?php echo $row['id']; ?>">
      <input type="hidden" name="Name" value="<?php echo $row['name']; ?>">
      <input type="hidden" name="Username" value="<?php echo $row['username']; ?>">
      <input type="hidden" name="Real_Email" value="<?php echo $row['email']; ?>">
      <input type="hidden" name="R_pass" value="<?php echo $row['password']; ?>">

  
      <div class="containercf">
        <h2>Contact Us</h2>
        <div class="row100">
          <div class="col">
            <div class="inputBoxcf">
              <input type="text" name="First_Name" required />
              <span class="textcf">First Name</span>
              <span class="linecf"></span>
            </div>
          </div>

          <div class="col">
            <div class="inputBoxcf">
              <input type="text" name="Last_Name" required />
              <span class="textcf">Last Name</span>
              <span class="linecf"></span>
            </div>
          </div>
        </div>
        <div class="row100">
          <div class="col">
            <div class="inputBoxcf">
              <input type="text" name="Email" required />
              <span class="textcf">Email</span>
              <span class="linecf"></span>
            </div>
          </div>

          <div class="col">
            <div class="inputBoxcf">
              <input type="digit" name="Mobile" required />
              <span class="textcf">Mobile</span>
              <span class="linecf"></span>
            </div>
          </div>
        </div>
        <div class="row100">
          <div class="col">
            <div class="inputBoxcf textarea">
              <textarea name="Textarea" required></textarea>
              <span class="textcf">Type Your Message Here...</span>
              <span class="linecf"></span>
            </div>
          </div>
        
          <div class="row100">
              <div class="col col1">
                  <button type="submit" class="cfsubmit">Submit</button>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="index.php">Go Back</a>
              </div>
          </div>
      </div>
    </form>
  </body>
</html>