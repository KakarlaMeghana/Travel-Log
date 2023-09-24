<!DOCTYPE html>
<html lang="en">
<head>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <title>Enter OTP</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="login.css">
</head>
<body>
<div class="content">
 <div class="text">Forget Password</div>
  <form action="Register.php" onsubmit="return validate()" method="post" >
  <label for='email' style="color:white;float:left;">Enter Your OTP</label>
    <div class="field"> 
      <span class="fa fa-user"></span>
      <input type="text"id="un" name="otp" placeholder="Enter OTP" autocomplete="off" required>
    </div>
    <button type="submit" name="otpckeck">Verify</button>
  </form>
</div>
</body>
</html>