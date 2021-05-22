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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talkato | Precautions</title>
    <link rel="stylesheet" href="precautions.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
        integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
</head>

<style>
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

<body>
<!-- ************************** -->
<div class="navbar">
        <div class="navbar_left">
            <img class="navbar_logo" src="../assets/facebook.png" alt="logo" />
            <div class="input-icons">
                <i class="fas fa-search icon"></i>
                <input class="input-field" type="text" placeholder="Search on Talkato" />
            </div>
        </div>

        <div class="navbar_center">
            <a class="active_icon" href="../users.php">
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
            <a href="../games/Game.php">
                <i class="fas fa-gamepad"></i>
            </a>            
          </div>

        <div class="navbar_right">
            <a href="../profile.php">
                <div class="navbar_right_profile">
                    <img src="../php/images/<?php echo $row['img']; ?>" alt="">
                    <span><?php echo $row['fname'] . " " . $row['lname']; ?></span>
                </div>
            </a>
            <div class="navbar_right_links">
                <a href="../messenger.php"><i class="fab fa-facebook-messenger"></i></a>
                <a href="../php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout"><i class="fas fa-sign-out-alt"></i></a>
            </div>
        </div>

        <div class="navbar_right_bars">
        <a href="#">
              <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>
<!-- ************************** -->


    <div class="topnav" style="position: sticky;top:60px;">
        <a href="covid.php">Latest Data</a>
        <a href="precautions.php" class="active">Precautions</a>
        <a href="symptoms.php">Symptoms</a>
        <a href="https://www.cowin.gov.in" target="_blank">Vaccination Portal</a>
    </div>
    <header class="head">
        <h1>Ways to prevent Ourself from Corona Virus</h1>
    </header>
    <div class="container">
        <div class="box">
            <img src="images/mask.png" alt="image h">
            <h3>
                Wear a mask</h3>
            <P>Wear your mask over your nose and mouth and secure it under your chin. Fit the mask snugly against the
                sides of your face, slipping the loops over your ears or tying the strings behind your head.</P>
        </div>
        <div class="box">

            <img src="images/distance.png" alt="image h">
            <h3> Stay 6 feet away from others</h3>
            <p>Put 6 feet of distance between yourself and people who don’t live in your household. Remember that some
                people without symptoms may be able to spread virus.</p>
        </div>

        <div class="box">
            <img src="images/avoid.png" alt="image h">
            <h3>Avoid crowds and poorly ventilated spaces</h3>
            <p>Being in crowds like in restaurants, bars, fitness centers, or movie theaters puts you at higher risk for
                COVID-19. Avoid indoor spaces that do not offer fresh air from the outdoors as much as possible. If
                indoors, bring in fresh air by opening
                windows and doors, if possible.</p>
        </div>
        <div class="box">
            <img src="images/wash.png" alt="image h">
            <h3>Wash your hands often</h3>
            <p>Wash your hands often with soap and water for at least 20 seconds especially after you have been in a
                public place, or after blowing your nose, coughing, or sneezing.</p>
        </div>
        <div class="box">
            <img src="images/vaccine.png" alt="image h">
            <h3>Get Vaccinated
            </h3>
            <p>Authorized COVID-19 vaccines can help protect you from COVID-19. Once you are fully vaccinated, you may
                be able to start doing some things that you had stopped doing because of the pandemic.</p>
        </div>
    </div>
</body>

</html>