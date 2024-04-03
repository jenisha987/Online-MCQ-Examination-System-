<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/startmin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="login.css">

    <title>Teacher Login</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Teacher Login Panel</h3>
                    </div>
                    <div class="panel-body">
                        <form action="user.php" method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <label for="email">Enroll Number</label>
                                    <input class="form-control" placeholder="Enroll Number" name="email" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input class="form-control" placeholder="Password" name="password" type="password">
                                </div>
                                <div class="form-group">
                                    <!-- <a href="forgot.php" class="psw">Forgot Password?</a> -->
                                </div>
                                <button type="submit" class="btn btn-lg btn-success btn-block" name="btn">Login</button>
                                <br>
                                <a href="../index.php" class="btn btn-block btn-primary">Go to Home</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>