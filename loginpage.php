<!DOCTYPE html>
<html lang="en">
<head>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <title>Transparent login form </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="login.css">
</head>
<body>
<div class="content">
 <div class="text">Login Form</div>
  <form action="Register.php" onsubmit="return validate()" method="post" >
    <div class="field">
      <span class="fa fa-user"></span>
      <input type="text"id="un" name="email" placeholder="Email Id" autocomplete="off" required>
   
    </div>
    <div class="field">
      <span class="fa fa-lock"></span>
      <input type="password"id="p" name="pwd" placeholder="Password" required> 
    </div>
    <a href="forgetpassword.php" style="color:rgba(10, 136, 43, 0.5);float:left;padding-top:10px;font-weight:bolder;">Forget Password</a>
    
    <button type="submit" name="signin">Log in</button>
  </form>
</div>
<script type="text/javascript">
  function validate()
  {
  var name =
        document.getElementById('un').value;
  var password =
        document.getElementById('p').value;
  if (name == "" ) {
        alert("Please enter your name properly.");
        return false;
      }
      if (password == "") {
        alert("Please enter your password");
        return false;
      }
  
      if(password.length <8){
        alert("Password should be atleast 8 character long");
        return false;
  
      }
      return true;
  }
</script>
</body>
</html>