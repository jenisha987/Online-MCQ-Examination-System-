<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">



    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/startmin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- <link rel="stylesheet" href="login.css"> -->
    <style>
        body {

            /* Set background properties */
            background-image: url("KhEC.jpg");
            /* Replace 'path/to/your/image.jpg' with the actual path to your image */
            background-size: cover;
            /* Cover the entire viewport */
            background-position: fixed;
            /* Center the image */
            background-repeat: no-repeat;
            /* Do not repeat the image */

        }
    </style>


</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form action="user.php" method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Enrollment Number" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>

                                <!-- <a href="forgot.php"> <span class="psw">Forgot Password?</a> -->

                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-lg btn-success btn-block" name="btn">Login</button><br>
                            </fieldset>
                        </form>
                        <a href="index.php"><button class="btn btn-block" name="btn">Go to Home</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>