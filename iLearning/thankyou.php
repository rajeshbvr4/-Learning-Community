<?php

    session_start();

    if(!$_SESSION["login_user"])
    {
        header("location:index.php?notlogedin=Your are not legal user");
    }


$loggin = $_SESSION["login_user"];

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Asking Question</title>
        <!-- css external style sheet -->
        <link type="text/css" href="css/stylequestion.css" rel="stylesheet">
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
        <style>
            body {

                background-image: url(photos/thanx4.jpg);
                background-size: cover;
            }

            .thx {
                padding-top: 80px;
            }

        </style>

    </head>

    <body>


        <!-- Image and text -->
        <nav class="navbar navbar-light bg-success">
            <a class="navbar-brand" href="home.php">
    <img src="../iLearning/photos/vishnu.png" width="30" height="30" class="d-inline-block align-top" alt="">
    DR B V RAJU COLLEGE
  </a>
            <a class="navbar-brand" href="home.php?page=1">
    
     Home
  </a>
            <a class="navbar-brand" href="question.php">
    
   Ask questions
  </a>

            <li class="nav-item dropdown navbar-right">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Rajesh
                </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">My Questions</a>
                    <a class="dropdown-item" href="profile.php">Settings</a>
                    <a class="dropdown-item" href="index.php">logout</a>
                </div>
            </li>

        </nav>

        <div class="container thx">
            <div class="jumbotron text-xs-center">
                <h1>Thank You! <strong style="color:green;"><?php echo"$loggin";?></strong></h1>
                  
             
                <p class="lead"><strong>When you transfer knowledge to someone, </strong> you're not giving them everything but rather a foundation to build upon and to make greater.</p>
                <hr>
                <!--  <p>
                    Having trouble? <a href="">Contact us</a>
                </p> -->
                <p class="lead">
                    <a class="btn btn-success btn-sm" href="home.php" role="button">Continue to view Question</a>
                </p>
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
