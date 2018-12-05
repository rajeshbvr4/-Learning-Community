<?php

    session_start();
    if(!$_SESSION["login_user"])
    {
        header("location:index.php?notlogedin=Your are not legal user");
    }
    else {
        echo "<h3> Welcome :" .$_SESSION["login_user"]. "</h3";
        echo "<br>";
        
           echo "<br>";echo "<br>";echo "<br>";echo "<br>"; 
        echo "<a href = 'logout.php'>Logout </a>";
    }

?>