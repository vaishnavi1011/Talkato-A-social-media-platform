<!DOCTYPE html>

<html lang="en">

    <?php 
    session_start();
    include_once "../php/config.php";
    if(!isset($_SESSION['unique_id'])){
      header("location: ../index.php");
    }
  ?>
  <?php 
              $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
              if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_assoc($sql);
              }
            ?>
  

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Talkato | Covid-19 Updates LIVE!</title>
    <meta name="viewport" content="width=device-width">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
        integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
            width: 100%;
            background-color: rgb(50,50,50);
            background-size: 400% 400%;
            position: relative;
            animation: change 10s ease-in-out infinite;
        }

        .topnav {
            overflow: hidden;
            background-color: rgb(0, 0, 0);
            position: sticky;
            top: 0;
        }

        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 10px 10px;
            text-decoration: none;
            font-size: 14px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: #4CAF50;
            color: white;
        }

        h2 {
            font-size:35px;
            font-family: Europa, Avenir Next, Montserrat, Fredoka One;
            background-color: #000000;
        }

        #grad {
            width:50%;
            border-radius: 5px;
            text-align: left;
            background-color: rgb(192, 241, 14);
            margin: 15px auto;
            box-shadow: 1px 1px 5px rgba(248, 248, 248, 0.1);
        }

        #header {
            text-align: center;
        }

        #thanks {
            text-align: center;
        }

        @keyframes change {
            0% {
                background-position: 0 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0 50%;
            }
        }

        .table>tbody>tr>td,
        .table>tbody>tr>th,
        .table>tfoot>tr>td,
        .table>tfoot>tr>th,
        .table>thead>tr>td,
        .table>thead>tr>th {
            padding: 12px;
            line-height: 2.428571;
        }


        /* **************** */
        .navbar {
            font-family: "Segoe UI";
            box-sizing: border-box;
            background: #242526;
            padding: 0 20px 0 20px;
            height: 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 2px -2px rgba(255, 255, 255, 0.4);
            overflow: hidden;
            position: sticky;
            top: 0;
        }

        .navbar_hidden {
            display: none;
        }

        .navbar_left {
            display: flex;
            align-items: center;
            margin-right: 50px;
        }

        .navbar_logo {
            width: 45px;
            height: 45px;
            margin-right: 5px;
        }

        .input-icons i {
            position: absolute;
        }

        .input-icons {
            width: 100%;
        }

        .icon {
            padding: 13px 10px;
            color: #a8abaf;
            min-width: 20px;
            text-align: center;
            margin-right: 20px;
        }

        .input-field {
            padding: 12px 0 12px 35px;
            background: #3a3b3c;
            border: none;
            border-radius: 25px;
            font-size: 15px;
            color: #a8abaf;
        }

        .input-field:focus {
            outline: none;
        }

        ::placeholder {
            color: #a8abaf;
        }

        .navbar_center {
            width: 50%;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .navbar_center a {
            width: 150px;
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: 0.2s;
        }

        .navbar_center a:hover {
            background: #3a3b3c;
            border-radius: 10px;
            height: 55px;
            border: none;
        }

        .navbar a,
        .navbar a i {
            text-decoration: none;
            color: #b8bbbf;
            font-size: 26px;
        }

        .navbar_right {
            text-align: right;
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .navbar_right_bars {
            display: none;
            text-align: right;
            justify-content: flex-end;
            align-items: center;
        }

        .navbar_right_profile {
            cursor: pointer;
            display: flex;
            align-items: center;
            height: 40px;
            margin-right: 20px;
            transition: 0.2s;
        }

        .navbar_right_profile:hover {
            background: #3a3b3c;
            border-radius: 25px;
            padding: 0 5px;
        }

        .navbar_right_profile img {
            width: 30px;
            height: 30px;
            margin-right: 5px;
            border-radius: 100%;
        }

        .navbar_right_profile span {
            color: #e7e9ed;
            font-size: 15px;
            font-weight: 500;
        }

        .navbar_right_links i {
            background: #404041;
            padding: 12px;
            border-radius: 100%;
            color: #e7e9ed;
            cursor: pointer;
            transition: 0.3s;
            font-size: 16px;
        }

        .navbar_right_links i:hover {
            background: #4e4f50;
        }

        @media screen and (max-width: 1285px) {
    .content{
        display: flex;
    }
    .content_left{
        display: none;
    }
    .navbar_right{
        display: none;
    }
    .navbar_right{
        width: 100%;
    }
    .navbar_hidden{
        display: flex;
    }
    .navbar_right_bars{
        display: flex;
    }
}
@media screen and (max-width: 900px) {
    .navbar_center{
        display: none;
    }
}
    </style>
</head>


<body>
    <!-- ************************** -->
    
    <div class="nav_body topnav">
        <div class="navbar nav_body" >
            <div class="navbar_left">
                <img class="navbar_logo" src="../assets/facebook.png" alt="logo" />
                <div class="input-icons">
                    <i class="fas fa-search icon"></i>
                    <input class="input-field" type="text" placeholder="Search on Talkato" />
                </div>
            </div>

            <div class="navbar_center">
                <a class="" href="../users.php">
                    <i class="fas fa-home"></i>
                </a>
                <a href="#">
                    <i class="fas fa-user-friends"></i>
                </a>
                <a href="#">
                    <i class="fas fa-users"></i>
                </a>
                <a href="#">
                    <i class="fas fa-video"></i>
                </a>
                <a href="#">
                    <i class="fas fa-bell"></i>
                </a>
                <a href="../games/Game.php" class="active_icon">
                    <i class="fas fa-gamepad"></i>
                </a>
            </div>

            <div class="navbar_right">
                <a href="../profile.php">
                    <div class="navbar_right_profile">
                        <img src="../php/images/<?php echo $row['img']; ?>" alt="">
                        <span>
                            <?php echo $row['fname'] . " " . $row['lname']; ?>
                        </span>
                    </div>
                </a>
                <div class="navbar_right_links">
                    <a href="../messenger.php"><i class="fab fa-facebook-messenger"></i></a>
                    <a href="../php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout"><i
                            class="fas fa-sign-out-alt"></i></a>
                </div>
            </div>

            <div class="navbar_right_bars">
                <a href="#">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </div>
    </div>



    <!-- ***************************** -->



    <div class="topnav" style="position: sticky;top:60px;">
        <a class="active" href="">Latest Data</a>
        <a href="precautions.php">Precautions</a>
        <a href="symptoms.php">Symptoms</a>
        <a href="https://www.cowin.gov.in" target="_blank">Vaccination Portal</a>
    </div>



    <h2 id="header">
        <font color="yellow"><i class="fa fa-heartbeat"></i> Covid-19 Statistics India
        </font>
    </h2>
    <table id="grad" class="table table-borderless">
        <thead>
            <tr>
                <th>Total Cases</th>
                <th>Indians</th>
                <th>Foreigners</th>
                <th>Deaths</th>
                <th>Cured</th>
            </tr>
        </thead>
        <tbody id="datahandler1"></tbody>
    </table>
    <table id="grad" class="table table-borderless">
        <thead>
            <tr>
                <th>State</th>
                <th>Cases</th>
                <th>Deaths</th>
                <th>Cured</th>
            </tr>
        </thead>
        <tbody id="datahandler2"></tbody>
    </table>


</body>
<script src="covidjs.js"></script>



</html>