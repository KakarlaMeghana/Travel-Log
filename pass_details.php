<?php 
include 'Register.php';
?><html>
    <head>
        <link rel="stylesheet" href="contact1.css">
    </head>
    <body>
<div class="contact-container">
    <div class="left-col">
      <img class="logo" src="https://www.indonesia.travel/content/dam/indtravelrevamp/en/logo.png"/>
    </div>
    
   <form id="passdetails" action="Register.php" style="margin-left:11%;margin-top:3%;"  method="post">
   <div style="margin-bottom:8%;">
        <h1>BOOK YOUR TOUR</h1>
        <h1 style="font-size:20px;margin:10% 0;">Enter Passenger Details</h1>
    </div>
    <?php for($x=0;$x <$_SESSION['persons'];$x++) {?>
    <input type="text" id="name" name="name[]" placeholder="<?php echo 'Passenger '.($x+1).' Full Name'?>" required>
    <label for="gender" style="color:black;margin-left:20px;font-weight:bolder;font-size:11px;display:inline;">Gender</label>
    <input type="radio" id="radio" name="gender<?php echo $x?>" value="Male" required><span style="color:grey;">Male</span>
    <input type="radio" id="radio" name="gender<?php echo $x?>" value="female" required><span style="color:grey;">Female<br/>
    <?php } ?>
<center>    <button type="submit" id="submit" name="passdetails" >Next >></button> </center>
    
  </form>

    </div>
  </div>

</body>
</html>

  
