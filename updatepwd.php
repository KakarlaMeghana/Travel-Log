<!DOCTYPE html>
<html lang="en">
 
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <title>Transparent form</title>
  
</head>
<body>
<div class="content">
 <div class="text">Update Password</div>
  <form action="Register.php" onsubmit="return validate()" method="post" >
  <label for='email' style="color:white;float:left;">Enter New Password</label>
    <div class="field"> 
    <span class="fa fa-lock"></span>
      <input type="password"id="password" name="pwd" placeholder="Password" required>
    </div><br/>
    <div class="field"> 
    <span class="fa fa-lock"></span>
      <input type="password"id="confirmPassword" name="cpwd" placeholder="Confirm Password" required>
    </div>
    <button type="submit" name="updatepwd">Update</button>
  </form>
</div>
 
  <script type="text/javascript">
    function validate() {
        var password = document.getElementById('password').value;
      var confpass =
        document.getElementById('confirmPassword').value;

      if (password == "") {
        alert("Please enter your password");
        return false;
      }
      else{  
          var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
          if(!password.match(passw)) 
          { 
            alert('Password must be in between 8 to 15 characters and must contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character');
            return false;
          }
      }
      if(password!=confpass)
      {
        alert("Password should be same");
        return false;
      }
      return true;
    }
  </script>
  
</body>
 
</html>


