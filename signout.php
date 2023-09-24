<?php 
    include "index.php";
    include "register.php";
    session_destroy();
    echo '<script type="text/JavaScript"> 
        location.href = "http://localhost/travel-log/home.php";
        </script>';
?>