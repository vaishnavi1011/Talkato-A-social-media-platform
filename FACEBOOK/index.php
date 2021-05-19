<?php 
  session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .wrapper {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
            background: linear-gradient(90deg, black, blue, rgb(39, 53, 248), blue, black);
        }

        h2 {
            padding-top: 13%;
            text-align: center;
            font-size: 50px;
            font-weight: bold;
            color: white;
            text-transform: capitalize;
        }

        .box div {
            position: absolute;
            width: 60px;
            height: 60px;
            background-color: transparent;
            border: 12px solid rgb(127, 209, 209);
        }

        .box div:nth-child(1) {
            top: 12%;
            left: 42%;
            animation: animate 10s linear infinite;
        }

        .box div:nth-child(2) {
            top: 70%;
            left: 50%;
            animation: animate 7s linear infinite;
        }

        .box div:nth-child(3) {
            top: 52%;
            left: 92%;
            animation: animate 9s linear infinite;
        }

        .box div:nth-child(4) {
            top: 2%;
            left: 12%;
            animation: animate 7s linear infinite;
        }

        .box div:nth-child(5) {
            top: 30%;
            left: 4%;
            animation: animate 9s linear infinite;
        }

        .box div:nth-child(6) {
            top: 72%;
            left: 2%;
            animation: animate 11s linear infinite;
        }

        .box div:nth-child(7) {
            top: 5%;
            left: 97%;
            animation: animate 9s linear infinite;
        }

        .box div:nth-child(8) {
            top: 96%;
            left: 96%;
            animation: animate 4s linear infinite;
        }

        .box div:nth-child(9) {
            top: 35%;
            left: 72%;
            animation: animate 10s linear infinite;
        }

        .box div:nth-child(10) {
            top: 16%;
            left: 80%;
            animation: animate 7s linear infinite;
        }

        .box div:nth-child(11) {
            top: 42%;
            left: 32%;
            animation: animate 9s linear infinite;
        }

        .box div:nth-child(12) {
            top: 72%;
            left: 42%;
            animation: animate 7s linear infinite;
        }

        .box div:nth-child(13) {
            top: 10%;
            left: 70%;
            animation: animate 9s linear infinite;
        }

        .box div:nth-child(14) {
            top: 77%;
            left: 22%;
            animation: animate 11s linear infinite;
        }

        .box div:nth-child(15) {
            top: 92%;
            left: 52%;
            animation: animate 9s linear infinite;
        }

        .box div:nth-child(16) {
            top: 20%;
            left: 90%;
            animation: animate 4s linear infinite;
        }

        @keyframes animate {
            0% {
                transform: scale(0) translateY(0) rotate(0);
                opacity: 1;
            }

            100% {
                transform: scale(1.3) translateY(-90px) rotate(360deg);
                opacity: 0;
            }
        }

        .right {
            z-index: 9;
            margin: auto;
        }

        #signup {
            z-index: 9;
            width: 50%;
            padding: 15px;
            background-color: #1da1f2;
            color: #fff;
            margin-top: 3%;
            margin-left: 25%;
            border: 1px solid #1da1f2;
            border-radius: 30px;
            font-size: 20px;
            cursor: pointer;
        }


        #login {
            z-index: 9;
            width: 50%;
            margin-top: 3%;
            margin-left: 25%;
            padding: 15px;
            background-color: #fff;
            border: 1px solid #1da1f2;
            color: #1da1f2;
            border-radius: 30px;
            font-size: 20px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="box">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <div>
        <h2>Welcome to Facebook!</h2>
    </div>
    <div class="right">
        <form action="" method="POST">
            <button id="signup" name="signup">Sign Up</button><br><br>
            <?php
                    if(isset($_POST['signup'])){
                        echo "<script>window.open('sign_up.php','_self')</script>";
                    }
                ?>
            <button id="login" name="login">Login</button>
            <?php
                    if(isset($_POST['login'])){
                        echo "<script>window.open('login.php','_self')</script>";
                    }
                ?>
        </form>

    </div>
    </div>
</body>

</html>