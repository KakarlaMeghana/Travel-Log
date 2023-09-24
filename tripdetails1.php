<?php 
include 'Register.php';
?><html>
    <head>
        <link rel="stylesheet" href="contact.css">
    </head>
    <body>
<div class="contact-container">
    <div class="left-col">
      <img class="logo" src="https://www.indonesia.travel/content/dam/indtravelrevamp/en/logo.png"/>
    </div>
    
   <form id="contact-form" action="Register.php" style="margin-left:8%;margin-top:4%;"  method="post">
   <div style="margin-bottom:8%";>
        <h1>BOOK YOUR TOUR</h1>
    </div>
        <label for="name">Full name</label>
    <input type="text" id="name" name="name" value="<?php echo $_SESSION['uname']; ?>" placeholder="Your Full Name" required>
        <label for="email">Email Address</label>
    <input type="email" id="email" name="email" value="<?php echo $_SESSION['email']; ?>" placeholder="Your Email Address" required>
    <label for="package">Package Opted:</label>
    <input type="text" id="pkg" name="pkg" value="<?php echo $_SESSION['place']; ?>" required>
    <label for="Date">Date</label>
    <input type="date" value="<?php echo $_SESSION['date']; ?>" id="date" name="date"  required>
        
        <label for="No of Passengers">Number of Passengers</label>
    <input type="number" value="1"  id="nop" name="persons" max="7" required>
    <button type="submit" id="submit" name="noOfPasengers" >Next >></button>
    
  </form>

    </div>
  </div>

</body>
</html>

  
