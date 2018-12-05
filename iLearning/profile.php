

<?php

    session_start();

    if(!$_SESSION["login_user"])
    {
        header("location:index.php?notlogedin=Your are not legal user");
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>
    <!-- external css file -->
    <link type="text/css" href="css/style.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>


    <!-- Image and text -->
    <nav class="navbar navbar-light bg-success">
        <a class="navbar-brand" href="home.php?page=1">
    <img src="../iLearning/photos/vishnu.png" width="30" height="30" class="d-inline-block align-top" alt="">
    DR B V RAJU COLLEGE
  </a>
    </nav>

    <div class="container">
        <div class="row profile">
            <div class="col-md-3">
                <div class="profile-sidebar">
                    <div class="profile-user-pic">
                        
                        <img src="photos/profile-pictures.png" alt="" class="imgr-responsive img-circle">
                    </div>
                    <div class="profile-user-detail">
                        <div class="profile-user-name">rajesh</div>
                        <div class="profile-user-job">Developer</div>
                    </div>
                    <br>
                    <div class="profile-user-buttons">
                      &nbsp;&nbsp; &nbsp;&nbsp;
                        <button class="btn btn-success btn-sm"> Fallow</button>
                        <button class="btn btn-danger btn-sm"> Fallow</button>
                    </div>
                    <div class="profile-user-menu">
                        <ul class="nav">
                            <li> <a href=""><i class="glyphicon glyphicon-home">Overview</i></a></li>
                            <li> <a href=""><i class="glyphicon glyphicon-user">Account</i></a></li>
                            <li> <a href=""><i class="glyphicon glyphicon-ok">Tasks</i></a></li>
                            <li> <a href=""><i class="glyphicon glyphicon-flag">help</i></a></li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                 <hr>

                <?php
                                     include './db.php';
                                 
                                    $loggin = $_SESSION["login_user"];
                                    $sql = "SELECT * FROM posting where q_pos_email = '$loggin'";
                                    $result = $conn->query($sql);
                echo "56";
        

                                    if ($result->num_rows > 0) {

                                        // output data of each row

                                        while($row = $result->fetch_assoc()) {
                                            $a = $row["q_id"];
                                           
                                            echo "<br>";
                                            echo "<br>";
                                             
                                    ?>



                    <hr>

                    <?php
                                          echo "<p style='color:red;'>".$row['question']."</p>";
                                    
                                            ?>
                        <p><input type="button" name="Back" value="View or Answer" onclick="window.location ='answer.php?id=<?php echo" $a "?>'" /></p>
                        <?php
                                        }
                                        
                                


                                        
                                    } else {
                                        echo "0 results";
                                    }

                                    mysqli_close($conn);
                                   
                                    ?>

            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="foot">
            <div class="container-fluid bg-dark">

                <br>
                <br>
                <br>

                <div class="row">
                    <div class="col-sm-8"></div>
                    <div class="col-sm-4">
                        <p class="text-primary">Made by !Learning community, © 2018</p>
                    </div>
                </div>


            </div>
        </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
