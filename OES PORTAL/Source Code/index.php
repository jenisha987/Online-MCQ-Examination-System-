<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="final.css">
    <style>
        /* CSS style to set font size for headings */
        h1 {
            font-size: 30px;
            /* Example font size for h1 */
        }

        h3 {
            font-size: 30px;
            /* Example font size for h2 */
        }

        .mid h3 {
            font-family: "Karla", sans-serif;
            font-size: 35px;
            color: #fff;
            font-weight: 700;
        }

        .mid h1 {
            font-family: "Karla", sans-serif;
            font-size: 29px;
            color: #fff;
            font-weight: 700;
        }

        .left {
            width: 50%;
            height: 840px;
            background-color: #152233;
            float: left;
        }

        .container {
            width: 100%;
            /* height: 100vh; */
            height: 100%;
            position: fixed;
        }

        /* You can similarly define font sizes for h3, h4, h5, and h6 */
    </style>
</head>

<body>
    <header>
        <div class="container">
            <div class="navbar">
                <h1 class="ok">KHWOPA ENGINEERING COLLEGE</h1>
            </div>
            <div class="left">
                <div class="top">
                    <img class="logo" src="./pictures/KhEC.png" alt="KhEC">
                    <p><br>Khwopa Online Examination Portal</p>
                </div>
                <div class="mid">
                    <p><i><br>..Built for the realities of the classroom..</i></p>
                    <h3>Simplify Powerful</h3>
                    <h1>ONLINE EXAMS</h1>
                    <p><br>Easy to get started and intuitive to use. This system equips you with all<br> the power and
                        function you need to create exams for your students, your way. </p>
                    <p>Also get access to Question Banks.</p>
                </div>
                <div class="btn">
                    <a href="final.html">Sign In</a>
                </div>
            </div>
            <div class="right">
                <img src="eaxmm.jpg" alt="exam" height="841" width="960">
                <div class="btnn btn1">
                    <a href="admin/login.php" target="_self">Admin</a>
                </div>
                <div class="btnn btn2">
                    <a href="teacher/login.php" target="_self">Teacher</a>
                </div>
                <div class="btnn btn3">
                    <a href="login.php" target="_self">Student</a>
                </div>
            </div>
        </div>
    </header>
</body>

</html>