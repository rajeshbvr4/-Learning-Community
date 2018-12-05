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
        <title>Answer</title>
        <!-- css external style sheet -->
        <link type="text/css" href="css/stylehome.css" rel="stylesheet">
        <link type="text/css" href="css/stylequestion.css" rel="stylesheet">
        <link type="text/css" href="css/styleanswer.css" rel="stylesheet">
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
            h6{
                text-align: left;
            }
            h4{
                color: red;
            }
            p{
                color: green;
                font-size: 14px;
               
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
            <a class="navbar-brand" href="home.php?page=1"> Home </a>


            <a class="navbar-brand" href="question.php"> Ask questions</a>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>

            <li class="nav-item dropdown navbar-right">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   My Account
                </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">My-Queries</a>
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="index.php">logout</a>
                </div>
            </li>

        </nav>
        <div class="container-fluid ans">


        </div>
        <div class="container-fluid">
            <div class="col-md-1">
            </div>

            <div class="col-md-5">

                    <?php
                                    $space =" ";
                                    include './db.php';
                                    $a = intval($_GET['id']);
                                    $sql = "SELECT * FROM posting where q_id= '$a'";
                                    $result = $conn->query($sql);
                            ?>
                        <hr>
                        <hr>
                        <h1>Question</h1>

                        <?php
                                    if ($result->num_rows > 0) {
                                    // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            
                                ?>
                
                 <hr><span class="glyphicon glyphicon-user" aria-hidden="true"><?php echo "$space";echo "" . $row["q_pos_email"]. "" ;  ?></span>
                <br>
                <?php
                                            echo "<h4>" . $row["question"]. "<h4" ; 
                            ?>
                            <hr>
                            <h3>Answers</h3>
                
                <hr>
                            <?php
                                            
                                        }
                                    } else {
                                        echo "0 results";
                                    }

                                     $a = intval($_GET['id']);
                $space = " ";

                                    $sql = "SELECT * FROM answer where q_id= '$a'";
                                    $result = $conn->query($sql);
                
                                    if ($result->num_rows > 0) {
                    
                                        // output data of each row

                                        while($row = $result->fetch_assoc()) {
                                            
                                ?>
                <hr><span class="glyphicon glyphicon-user" aria-hidden="true"><?php echo "$space";echo "" . $row["email"]. "" ;  ?></span>
                <br>
                <?php
                                            
                                            
                                           echo "<br>";
                                             echo "$space";
                                           
                                            
                                            echo "<p>" . $row["userAnswer"]. "</p>" ; 
              
                                            echo "<br>";
                                            echo "<br>";
                                        }
                                    } else {
                                        echo "Yet 0 Answers";
                                    }

                                    mysqli_close($conn);
                                   
                             ?>



            </div>
            <div class="col-md-5">

                <form method="post" action="insertAnswer.php?id=<?php echo" $a "?>">
                    <div class="frma">
                        <div class="form-group">
                            <label for="exampleTextarea">Type Your Answer here</label>
                            <textarea class="form-control" id="answer" name="answer" rows="5" required></textarea>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; <button type="submit" class="btn btn-primary" name="btnanswer" >Answer</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-md-1">


            </div>


        </div>




        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>

    </html>


  <?php

if(isset($_POST["btnanswer"])) {
    
    include './db.php';

    if($_SESSION["login_user"])
    {
        $loggin = $_SESSION["login_user"];
    }
    $loggin = $_SESSION["login_user"];

    $answer = $_POST["answer"];

    $sql = "INSERT INTO answer (email,userAnswer,q_id) VALUES ('$loggin','$answer','$a')";
if ($conn->query($sql) === TRUE) {
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

?>
