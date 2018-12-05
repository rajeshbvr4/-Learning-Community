<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

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

            background-image: url(photos/never.jpg);
            background-size: cover;
        }

        .login {
            background-color: white;
        }

        .form-control {
            border-radius: 0px;
            background-color: #fff8f8;
            color: white;
            border-radius: 1px solid #291212
        }

        .loginm {

            padding-top: 80px;
        }

        .butt {
            padding-left: 215px;
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
    </nav>
    <div class="container loginm">

        <div class="col-sm-offset-0 col-sm-12">


            <form action="login.php" method="post">
                <div class="col-sm-6 login">
                    <h1 style="text-align: center; font-size: 50px; text-decoration-color: brown">!Learning</h1>
                    <p style="text-align: center; text-decoration-color: brown; font-family: monospace; font-display: fallback;">A plAce to share knowledge and better understand</p>
                    <div class="col-sm-12">
                    </div>
                    <div class="col-sm-12">
                    </div>
                    <div class="col-sm-12">
                    </div>
                    <div class="col-sm-12">
                    </div>
                    <div class="col-sm-12">
                    </div>
                    <div class="col-sm-12">
                    </div>
                    <div class="col-sm-12">
                        <h3 align="center" style="color:red;">
                            <?php echo @$_GET["success"]; ?>
                        </h3>
                        <h3 align="center" style="color:red;">
                            <?php echo @$_GET["invalid"]; ?>
                        </h3>

                    </div>
                    <div class="col-sm-12">
                    </div>
                    <div class="col-sm-12">
                    </div>
                    <div class="col-sm-12">
                    </div>
                    <div class="col-sm-12">
                    <div class="col-sm-12">
                    </div>

                    <div class="col-sm-10">
                        <div class="form-group row">
                            <label for="example-email-input" class="col-3 col-form-label">Email</label>
                            <div class="row-8">
                                <input class="form-control" type="text" placeholder="bootstrap@example.com" name="txtuser">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-password-input" class="col-3 col-form-label ">Password</label>
                            <div class="row-8">
                                <input class="form-control" type="password" placeholder="********" name="txtpass">
                            </div>
                        </div>
                        <div class="form-group row">

                            <div class="row-8 butt ">
                                <input class="form-control btn btn-success" type="submit" name="sub" id="sub">
                            </div>
                        </div>

                    </div>
                    <div class="row-sm-offset-4 col-sm-12">
                    </div>


                </div>
                </div>

            </form>
        </div>
    </div>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
