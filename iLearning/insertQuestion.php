<?php


    
    include './db.php';
session_start();

    if($_SESSION["login_user"])
    {
        $loggin = $_SESSION["login_user"];
    }
    $loggin = $_SESSION["login_user"];

    $question = $_POST["question"];
  
    $sql = "INSERT INTO posting (question,q_no_ans,q_pos_email) VALUES ('$question','0','$loggin' )";
if ($conn->query($sql) === TRUE) {
   header("location: home.php?page=1");
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;

}


?>
