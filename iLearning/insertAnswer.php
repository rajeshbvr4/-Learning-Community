<?php

 
    include './db.php';       
        
    $a = intval($_GET['id']); 
    echo "$a";

    session_start();
 
    
    if($_SESSION["login_user"])
    {
        $loggin = $_SESSION["login_user"];
    }
    $loggin = $_SESSION["login_user"];

    $answer = $_POST["answer"];
   
    $sql = "INSERT INTO answer (q_id,userAnswer,email) VALUES ('$a','$answer','$loggin')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("location: thankyou.php");
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>
