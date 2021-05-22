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
    <title>Talkato | Symptoms</title>
    <link rel="stylesheet" href="symptoms.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>


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
    <a  href="covid.php">Latest Data</a>
    <a href="precautions.php">Precautions</a>
    <a href="symptoms.php" class="active">Symptoms</a>
    <a href="https://www.cowin.gov.in" target="_blank">Vaccination Portal</a>
    </div>
    <header class="head">
        <h1>Symptoms of Covid-19</h1>
    </header>
    <div class="container">
        <div class="box">
            <img src="images/pain.png" alt="image h">
            <h3>
                Muscles ache and pain</h3>
            <P>COVID-19-related muscle pain is usually different than the way one might feel after a hard bout of physical activity. It can persist for days, unlike the pain from working out which tends to ward off within a few hours.</P>
        </div>
        <div class="box">

            <img src="images/throat.png" alt="image h">
            <h3> Sore Throat</h3>
            <p>A sore throat can make it painful to eat and even talk. It brings scratchiness and irritation to the throat that can become worse when swallowing.Common causes include a viral infection, such as a cold or the flu, or bacteria.</p>
        </div>

        <div class="box">
            <img src="images/sense.png" alt="image h">
            <h3>Decrease in sence of smell or taste</h3>
            <p>According to one 2020 studyTrusted Source, a sudden, severe loss of taste and smell in the absence of an allergy or other chronic nasal condition could be an early symptom of COVID-19.However, if someone is experiencing any sort of unexpected
                dysfunction in taste and smell, even if it is mild, they should self-isolate and get a test for COVID-19.</p>
        </div>
        <div class="box">
            <img src="images/breath.png" alt="image h">
            <h3>Shortness of Breathe</h3>
            <p>When it is severe, the issue can cause a person to continually gasp or struggle to catch their breath.A person may also feel tightness in their chest, especially when trying to inhale or exhale fully.</p>
        </div>
        <div class="box">
            <img src="images/fever.png" alt="image h">
            <h3>Fever
            </h3>
            <p>Fever is highly likely to occur alongside fatigue (tiredness) and headaches. It often comes together with persistent coughing, chest pain, shortness of breath, sore throat</p>
        </div>
    </div>
</body>

</html>