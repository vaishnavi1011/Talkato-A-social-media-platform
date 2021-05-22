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
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
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
        .active_icon {
            border-bottom: 4px solid #2d88ff;
        }

        .active_icon i {
            color: #2d88ff !important;
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
            <a class="" href="../users.php">
                <i class="fas fa-home"></i>
            </a>
            <a href="#">
                <i class="fas fa-user-friends"></i>
            </a>
            <a href="#">
                <i class="fas fa-users"></i>
            </a>
            <a class="active_icon" href="index.php">
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
    <!-- ***************************** -->

    <header>
        <nav class="navbody">
            <ul>
                <li><a href="songs.html" id="songs">Songs</a></li>
            </ul>
        </nav>
    </header>
    <div class="movies">
        <div class="container">
            <div class="box">
                <img src="1.png" alt="image h"><br>

                <a id="link" href="https://drive.google.com/file/d/1Cda-xbfi91W-zt-YCkRfAau_norv-MUP/view?usp=sharing">Watch Now!</a>



            </div>
            <div class="box">

                <img src="2.png" alt="image h"> <br>
                <a id="link" href="https://drive.google.com/file/d/1yQ_ScslJK5BHE0WQGp9XCVbieqBtZPT-/view?usp=sharing">Watch Now!</a>

            </div>

            <div class="box">
                <img src="3.jpg" alt="image h"> <br>
                <a id="link" href="https://drive.google.com/file/d/1RV_Rj6CP60JKAZAzoeIvDKpUPsAceoRm/view?usp=sharing">Watch Now!</a>

            </div>
            <div class="box">
                <img src="4.png" alt="image h"> <br>
                <a id="link" href="https://drive.google.com/file/d/1kO3ljfyhycE7P2cADDg1a7xcstOPJyFE/view?usp=sharing">Watch Now!</a>

            </div>
            <div class="box">
                <img src="5.png" alt="image h"> <br>
                <a id="link" href="https://drive.google.com/file/d/1v2X_Rb_IgZJwG38JXUXMZNfydGTZlLPz/view?usp=sharing">Watch Now!</a>

            </div>
            <div class="box">
                <img src="6.jpg" alt="image h"> <br>
                <a id="link" href="https://drive.google.com/file/d/1dRfV7Bngb67NXCkD-2q9mxSG-8nUf0n6/view?usp=sharing">Watch Now!</a>
            </div>
            <div class="box">

                <img src="7.jpg" alt="image h"> <br>
                <a id="link" href="https://drive.google.com/file/d/1Ox0D0PRYFSNgJ-3e4SuGvUfW2dAqTBP8/view?usp=sharing">Watch Now!</a>

            </div>

            <div class="box">
                <img src="8.png" alt="image h"> <br>
                <a id="link" href="https://drive.google.com/file/d/1sXNulL7OpeyPv7wcCL_ka_miU07exJLA/view?usp=sharing">Watch Now!</a>

            </div>
            <div class="box">
                <img src="9.png" alt="image h"> <br>
                <a id="link" href="https://drive.google.com/file/d/1LLAOqImxtIeZ1l5R20YVZSbG0tZU1PFT/view?usp=sharing"></a>Watch Now!</a>

            </div>
            <div class="box">
                <img src="10.png" alt="image h"> <br>
                <a id="link" href="https://drive.google.com/file/d/19Matrks6SDmIatYlWnyCppZNSJeyNl2M/view?usp=sharing">Watch Now!</a>

            </div>
            <div class="box">
                <img src="11.png" alt="image h"> <br>
                <a id="link" href="https://drive.google.com/file/d/1v9Noe1z1ztINVpDvOcnHv_Wpgyr_Ud83/view?usp=sharing">Watch Now!</a>
            </div>
            <div class="box">

                <img src="12.png" alt="image h"> <br>
                <a id="link" href="https://drive.google.com/file/d/1z2NPk4LxrRTUXZjdjY-d3AohKZdJ1VP3/view?usp=sharing">Watch Now!</a>

            </div>

            <div class="box">
                <img src="13.png" alt="image h">
                <br>
                <a id="link" href="https://drive.google.com/file/d/1itNAUIuEHG4nmxOjCs4BrvAIEqTyz3m_/view?usp=sharing">Watch Now!</a>

            </div>
            <div class="box">
                <img src="14.png" alt="image h"> <br>
                <a id="link" href="https://drive.google.com/file/d/1Ajos2cfgDB-bbv-LBkGHYMxPmjUy4eko/view?usp=sharing">Watch Now!</a>

            </div>
            <div class="box">
                <img src="15.png" alt="image h"> <br>
                <a id="link" href="https://drive.google.com/file/d/1WjzxD9_-s93Z3woxW8qqS59HRy8eSVYn/view?usp=sharing">Watch Now!</a>

            </div>
        </div>
    </div>

</body>

</html>