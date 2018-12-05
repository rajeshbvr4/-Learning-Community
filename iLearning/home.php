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
        <!-- css external style sheet -->
        <link type="text/css" href="css/stylehome.css" rel="stylesheet">
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
            input[type=text] {
                width: 100px;
                box-sizing: border-box;
                border: 2px solid #ccc;
                border-radius: 4px;
                font-size: 16px;
                background-color: white;
                background-image: url('searchicon.png');
                background-position: 10px 10px;
                background-repeat: no-repeat;
                padding: 12px 20px 12px 40px;
                -webkit-transition: width 0.4s ease-in-out;
                transition: width 0.4s ease-in-out;
            }

            input[type=text]:focus {
                width: 500px;
            }

            .home {
                margin-top: 0px;

            }

            .question {
                background: yellow;
            }

        </style>
    </head>

    <body>


        <!-- Image and text -->
        <nav class="navbar navbar-light bg-success">
            <a class="navbar-brand" href="#">
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

        <div class="container home">
            <div class="jumbotron hero-nature">

            </div>
        </div>
        <div class="container-fluid">
            <div class="col-md-3 leftsidehome">

            </div>
            <div class="col-md-6 qestion">
                <h1>Recent Questions</h1>
                <?php
           
                                    include './db.php';
                                    $loggin = $_SESSION["login_user"];
                                    $space = " ";
                                    $page = $_GET["page"];
                                    if ($page =="" || $page == "1") {
                                        $page1 = 0;
                                    }
                                    else {
                                        $page1 = ($page*20)+1;
                                    }

                                    
                                    $sql = "SELECT * FROM posting order by q_id desc LIMIT $page1, 20";
                                    
                                    $result = $conn->query($sql);
    
                                    if ($result->num_rows > 0) {

                                        // output data of each row

                                        while($row = $result->fetch_assoc()) {
                                           
                                             $a = $row["q_id"];
                                             $name = $row["q_pos_email"];
                         ?>
                    <hr>

                    <hr><span class="glyphicon glyphicon-user" aria-hidden="true">  <?php echo "$space";echo "$name"; ?></span>
                    <br>

                    <?php
                                          echo "<p style='color:red;'>".$row['question']."</p>";
                                    
                                            ?>
                        <p><input type="button" name="Back" value="View or Answer" onclick="window.location ='answer.php?id=<?php echo" $a "?>'" /></p>
                        <?php
                                        }
                                        
                              
                                    } else {
                                        echo "0 results";
                                    }
                                    $sql1 = "SELECT * from posting";
                                    if ($result1=mysqli_query($conn,$sql1))
                                    {
                                      // Return the number of rows in result set
                                      $rowcount=mysqli_num_rows($result1);

                                      $row_count = $rowcount/20;

                                      $row_count_pages = ceil ($row_count);
                                      // Free result set
                                      mysqli_free_result($result);

                                      for ($b = 1; $b <= $row_count_pages; $b++) {


                                          ?>

                                        <a href= "home.php?page=<?php echo $b;?>"><?php echo $b;?></a>
                                    <?php
                                      } 
                                    }

                                    mysqli_close($conn);
                                   
                                    ?>



            </div>
            <div class="col-md-3">



            </div>


        </div>

      

                <br>
                <br>

                
                <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                <!-- Include all compiled plugins (below), or include individual files as needed -->
                <script src="js/bootstrap.min.js"></script>
    </body>

    </html>
