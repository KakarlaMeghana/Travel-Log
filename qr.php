<?php 
include 'Register.php';
?><html>
    <head>
        <link rel="stylesheet" href="contact1.css">
        <style>
            .left-col{
                background-image: linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12);
                height:110vh;
            }
            .left-col input{
                padding:10px;
                width:45vh;
            }
            .left-col input::placeholder{
                color:gray;
                padding-left: 20px;
            }
            .left-col input:hover{
                opacity: 1;
            }
            .left-col input:focus{
                border:1px solid black;
                outline-width:1px;
                outline-style: solid;
                outline-color: white;
                transition: outline 1s;
                transition: border 1s;
            }
            .left-col input[type='text']{
                background-color: rgba(255,255,255,0.7);
            }

        </style>
    </head>
    <body>
        <!-- Responsive Contact Page with Dark Mode and Form Validation (vanilla JS).

*Designed & built for desktop and tablets with viewport width >= 720px and in landscape orientation.  -->

<div class="contact-container">
    <div class="left-col">
        <center>
      <img src="qr.jpg" width="40%" id="qr-image" height="40%" style="margin-top:10%;" >
      <form action="Register.php" method="post">
        
            <input type="text" placeholder="Enter Your Banking Name" id="bname" name="bname" required>
            <input type="text" placeholder="Enter Transaction-ID" id="tid" name="tid" required>
            <button type="submit" name="qrsubmit" id="qrsubmit" style="margin-top: 8%; padding:10px 20px "> <b>SUBMIT</b></button>


        
      </form>
      </center>
    </div>
            
    <form id="tripdetails" onsubmit="return myfun()" style="margin-left:9%;margin-top:3%;">
        <div style="margin-bottom:8%;text-align: center;">
             <h1>BOOK YOUR TOUR</h1>
             <h1 style="font-size:20px;margin:5% 0;letter-spacing: 0.1;">Your Trip Details</h1>
        </div>
            <label for="date"> Date Of Travelling </label>
            <input type="date" value="<?php echo $_SESSION['date']; ?>" readonly>
            <label for="place"> Package Opted </label>
            <input type="text" value="<?php echo $_SESSION['place']; ?>" readonly>
            <label for="pdetails"> Passenger Details </label>
            <div id="passdetails"> 
            <?php for($x=0;$x < $_SESSION['persons'];$x++) {?>
            <!-- <label for="gender" style="color:black;margin-left:20px;font-weight:bolder;font-size:11px;display:inline;">Gender</label> -->
            <input type="text" id="name" value="<?php echo $_SESSION['pass_name'][$x] ?>" style="margin-right:30px;" readonly>
            <!-- <label for="gender" style="color:black;margin-left:20px;font-weight:bolder;font-size:11px;display:inline;">Gender</label> -->
            <input type="text" id="name" value="<?php echo $_SESSION['pass_gender'][$x] ?>" readonly>
            <?php } ?>
            </div>
            <?php 
            $sql = "SELECT * FROM tours WHERE PLACE='".$_SESSION['place']."'" ;
            $query = mysqli_query($con,$sql);
            if(mysqli_num_rows($query)>0)    
                 while($result=mysqli_fetch_array($query)){
                    $amount = $result['PRICE'] * $_SESSION['persons'];
                    echo "<h1 style='font-size:20px;letter-spacing:0.2rem;float:right;margin-top:20px;'>Amount:₹<b>".$amount."</b></h1>";
            }
            ?>
    </form>

    </div>
  </div>
  
  <!-- Image credit: Oliver Sjöström https://www.pexels.com/photo/body-of-water-near-green-mountain-931018/  -->
</body>
</html>

  
