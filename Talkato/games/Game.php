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
    <link rel="stylesheet" href="Game.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&family=Roboto+Condensed:ital@1&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />


    <!-- Main Title -->
    <title>Talkato | Games</title>

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
            overflow-x: hidden;
            overflow-y: hidden;
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

        .active_icon {
            border-bottom: 4px solid #2d88ff;
        }

        .active_icon i {
            color: #2d88ff !important;
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

        #myBtn {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            font-size: 18px;
            border: none;
            outline: none;
            background-color: black;
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 50%;
        }

        #myBtn:hover {
            background-color: rgb(150,150,150);
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
    <div class="nav_body">
        <div class="navbar nav_body" >
            <div class="navbar_left">
                <img class="navbar_logo" src="../assets/facebook.png" alt="logo" />
                <div class="input-icons">
                    <i class="fas fa-search icon"></i>
                    <input class="input-field" type="text" placeholder="Search on Facebook" />
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
                <a href="../movies_and_songs/index.php">
                    <i class="fas fa-video"></i>
                </a>
                <a href="#">
                    <i class="fas fa-bell"></i>
                </a>
                <a href="Game.php" class="active_icon">
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

    <!-- Top -->
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-chevron-up"></i></button>
    <script>
        //Get the button
        var mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- <div class="Top" id="top">
        <h1>FACEBOOK-GAMES</h1>
        <h2>Let the fun begin!</h2>
    </div> -->


    <!-- Navigationbar -->


    <div class="left">
        <ul class="nvbar">
            <li><a href="#topgames">Topgames</a></li>
            <li><a href="#action">Action</a></li>
            <li><a href="#adventure">Adventure</a></li>
            <li><a href="#arcade">Arcade</a></li>
            <li><a href="#racing">Racing</a></li>
            <li><a href="#simulationgames">Simulation Games</a></li>
            <li><a href="#strategy">Strategy</a></li>
            <li><a href="#wargames">War Games</a></li>
            <li><a href="#gameplay">Gameplay</a></li>
        </ul>
    </div>

    <!-- maingamepage -->

    <!-- Gamebar basic syntax -->
    <!-- <h3>categoryname</h3>
    <div class="category box">
    <li>
        <a href="" target="_blank">
            <img src="" alt="">
            <p></p>
        </a>
    </li>
</div> -->
    <div id="gamebar">
        <!-- top games -->
        <h3 id="topgames">Top Games</h3>
        <div class="topgames box">
            <!-- compact conflict -->
            <li>
                <a href="https://wasyl.eu/games/compact-conflict/play.html#" target="_blank">
                    <img src="https://wasyl.eu/assets/images/compact-1-210.png" alt="Compact conflict">
                    <p>Compact Conflict</p>
                </a>
            </li>
            <!-- compact conflict -->

            <!-- bullet force -->
            <li>
                <a href="https://www.crazygames.com/game/bullet-force-multiplayer" target="_blank">
                    <img src="https://images.crazygames.com/games/bullet-force-multiplayer/cover-1588010858655.png?auto=format,compress&q=75&cs=strip&ch=DPR&w=1200&h=630&fit=crop"
                        alt="bullet force">
                    <p>Bullet Force</p>
                </a>
            </li>
            <!-- bullet force -->

            <!-- Battleship -->
            <li>
                <a href="https://www.crazygames.com/game/battleship" target="_blank">
                    <img src="https://images.crazygames.com/games/battleship/cover-1576608307836.png?auto=format,compress&q=75&cs=strip&ch=DPR&w=1200&h=630&fit=crop"
                        alt="Battleship">
                    <p>Battleship</p>
                </a>
            </li>
            <!-- Battleship -->

            <!-- Taco Terror -->
            <li>
                <a href="https://www.cartoonnetworkhq.com/games/victor-and-valentino-taco-terror/play" target="_blank">
                    <img src="https://cn.i.cdn.ti-platform.com/content/1722/taco-terror/game/za/cn_hero_1280x720.c90ac7e4.jpg?imwidth=300"
                        alt="Taco Terror">
                    <p>Taco Terror</p>
                </a>
            </li>
            <!-- Taco Terror -->
            <!-- Skate Rush -->
            <li>
                <a href="https://www.cartoonnetworkhq.com/games/teen-titans-go-skate-rush/play" target="_blank">
                    <img src="https://cn.i.cdn.ti-platform.com/content/438/skate-rush/game/uk/skaterush-1600x900-en.9eac61f0.jpg?imwidth=300"
                        alt="Skate Rush">
                    <p>Skate Rush</p>
                </a>
            </li>
            <!-- Skate Rush -->

            <!-- crazyshooters2 -->
            <li>
                <a href="https://www.crazygames.com/game/crazy-shooters-2" target="_blank">
                    <img src="https://images.crazygames.com/crazyshooters2.png?auto=format,compress&q=75&cs=strip&ch=DPR&w=1200&h=630&fit=crop"
                        alt="Crazy Shooters 2">
                    <p>Crazy Shooters</p>
                </a>
            </li>
            <!-- crazyshooters2 -->
            <!-- brutalmania -->
            <li>
                <a href="https://www.crazygames.com/game/brutalmania-io" target="_blank">
                    <img src="https://images.crazygames.com/games/brutalmania-io/cover-1584553430060.png?auto=format,compress&q=75&cs=strip&ch=DPR&w=1200&h=630&fit=crop"
                        alt="Brutal Mania">
                    <p>Brutal Mania</p>
                </a>
            </li>
            <!-- brutalmania -->
            <!-- Dynasty War -->
            <li>
                <a href="https://www.crazygames.com/game/dynasty-war" target="_blank">
                    <img src="https://images.crazygames.com/games/dynasty-war/thumb-1585295167997.png?auto=format,compress&q=75&cs=strip&ch=DPR&w=1200&h=630&fit=crop"
                        alt="Dynasty War">
                    <p>Dynasty War</p>
                </a>
            </li>
            <!-- Dynasty War -->

            <!-- Air wars 3 -->
            <li>
                <a href="https://www.crazygames.com/game/air-wars-3" target="_blank">
                    <img src="https://images.crazygames.com/air-wars-3-cover?auto=format,compress&q=75&cs=strip&ch=DPR&w=1200&h=630&fit=crop"
                        alt="Air wars 3">
                    <p>Air wars</p>
                </a>
            </li>
            <!-- Air wars 3 -->

        </div>
        <!-- top games -->
        <!-- arcade -->
        <h3 id="action">Action</h3>
        <div class="action box">

            <!-- monster-kicks -->
            <li>
                <a href="https://www.cartoonnetworkhq.com/games/victor-and-valentino-monster-kicks/play"
                    target="_blank">
                    <img src="https://cn.i.cdn.ti-platform.com/content/1722/monster-kicks/game/za/monsterkicks-1600x900-en.292a04f8.jpg?imwidth=300"
                        alt="monster-kicks">
                    <p>Monster-Kicks</p>
                </a>
            </li>
            <!-- monster-kicks -->

            <!-- lion-o's quest -->
            <li>
                <a href="https://www.cartoonnetworkhq.com/games/thundercats-roar-lionos-quest/play" target="_blank">
                    <img src="https://cn.i.cdn.ti-platform.com/content/1851/lion-os-quest/game/za/lionoquest-1600x900-en.5fba1eaf.jpg?imwidth=300"
                        alt="Lion-O's Quest">
                    <p>Lion-O's Quest</p>
                </a>
            </li>
            <!-- lion-o's quest -->

            <!-- foodfight -->
            <li>
                <a href="https://www.cartoonnetworkhq.com/games/dc-super-hero-girls-food-fight/play" target="_blank">
                    <img src="https://cn.i.cdn.ti-platform.com/content/1178/food-fight/game/uk/foodfight-1600x900-en.3eda124d.jpg?imwidth=300"
                        alt="Food Fight">
                    <p>Food Fight</p>
                </a>
            </li>
            <!-- foodfight -->

            <!-- the perect adventure -->
            <li>
                <a href="https://www.cartoonnetworkhq.com/games/mao-mao-the-perfect-adventure/play" target="_blank">
                    <img src="https://cn.i.cdn.ti-platform.com/content/1793/the-perfect-adventure/game/za/maomao-perfadv-1600x900-en.f2862dd9.png?imwidth=300"
                        alt="The Perfect Adventure">
                    <p>The Perfect Adventure</p>
                </a>
            </li>
            <!-- the perect adventure -->

            <!-- Alien Rivals -->
            <li>
                <a href="https://www.cartoonnetworkhq.com/games/ben-10-alien-rivals/play" target="_blank">
                    <img src="https://cn.i.cdn.ti-platform.com/content/710/alien-rivals/game/za/alienrivals-1280x720-en.015ad65c.jpg?imwidth=300"
                        alt="Alien Rivals">
                    <p>Alien Rivals</p>
                </a>
            </li>
            <!-- Alien Rivals -->

            <!-- Smashy Pinata -->
            <li>
                <a href="https://www.cartoonnetworkhq.com/games/teen-titans-go-smashy-pinata/play" target="_blank">
                    <img src="https://cn.i.cdn.ti-platform.com/content/437/smashy-pinata/game/za/cn_hero_1280x720-1.24f74433.jpg?imwidth=300"
                        alt="Smashy Pinata">
                    <p>Smashy Pinata</p>
                </a>
            </li>
            <!-- Smashy Pinata -->

            <!-- Stellar Odyssey -->
            <li>
                <a href="https://www.cartoonnetworkhq.com/games/gumball-stellar-odyssey/play" target="_blank">
                    <img src="https://cn.i.cdn.ti-platform.com/content/20/stellar-odyssey/game/za/stellaodyssey-1600x900-en.a3f12116.jpg?imwidth=300"
                        alt="Stellar Odyssey">
                    <p>Stellar Odyssey</p>
                </a>
            </li>
            <!-- Stellar Odyssey -->

            <!-- jelly of the belly -->
            <li>
                <a href="https://www.cartoonnetworkhq.com/games/mao-mao-jelly-of-the-beast/play" target="_blank">
                    <img src="https://cn.i.cdn.ti-platform.com/content/1793/jelly-of-the-beast/game/za/cn_hero_1280x720.346c475b.jpg?imwidth=300"
                        alt="jelly-of-the-beast">
                    <p>Jelly of the Beast</p>
                </a>
            </li>
            <!-- jelly of the belly -->

            <!-- Battle of Behemoths -->
            <li>
                <a href="https://www.cartoonnetworkhq.com/games/regular-show-battle-of-the-behemoths/play"
                    target="_blank">
                    <img src="https://cn.i.cdn.ti-platform.com/cnemea/content/4141/game/4.0Migration_RegularShow_BattleOfTheBehemoths_Cover.jpg?imwidth=300"
                        alt="Battle of Behemoths">
                    <p>Battle of Behemoths</p>
                </a>
            </li>
            <!-- Battle of Behemoths -->

            <!-- Hero Time -->
            <li>
                <a href="https://www.cartoonnetworkhq.com/games/ben-10-hero-time/play" target="_blank">
                    <img src="https://cn.i.cdn.ti-platform.com/cnemea/content/22945/game/HeroTime-B10-Cover-EN.jpg?imwidth=300"
                        alt="Hero Time">
                    <p>Hero Time</p>
                </a>
            </li>
            <!-- Hero Time -->
        </div>
        <!-- adventure -->
        <h3 id="adventure">Adventure</h3>
        <div class="adventure box">
            <!-- crystal chaos -->
            <li>
                <a href="https://www.cartoonnetworkhq.com/games/elliott-from-earth-crystal-chaos/play" target="_blank">
                    <img src="https://cn.i.cdn.ti-platform.com/content/1952/crystal-chaos/game/uk/crystalchaos-titlecard_standard.1485f338.jpg?imwidth=300"
                        alt="Crystal Chaos">
                    <p>Crystal Chaos</p>
                </a>
            </li>
            <!-- crystal chaos -->

            <!-- Darwin's Yearbook -->
            <li>
                <a href="https://www.cartoonnetworkhq.com/games/gumball-darwins-yearbook/play" target="_blank">
                    <img src="https://cn.i.cdn.ti-platform.com/content/20/darwins-yearbook/game/za/cn_hero_1280x720_darwin_yearbook.5ad1e70a.jpg?imwidth=300"
                        alt="Darwin's Yearbook">
                    <p>Darwin's Yearbook</p>
                </a>
            </li>
            <!-- Darwin's Yearbook -->

            <!-- Ben 10 world rescue -->
            <li>
                <a href="https://www.cartoonnetworkhq.com/games/ben-10-world-rescue/play" target="_blank">
                    <img src="https://cn.i.cdn.ti-platform.com/content/710/ben-10-world-rescue/game/za/cn_hero_1280x720-world-rescue-play-now.3679b013.jpg?imwidth=300"
                        alt="Ben 10 world rescue">
                    <p>Ben 10 World rescue</p>
                </a>
            </li>
            <!-- Ben 10 world rescue -->

            <!-- The principals -->
            <li>
                <a href="https://www.cartoonnetworkhq.com/games/gumball-the-principals/play" target="_blank">
                    <img src="https://cn.i.cdn.ti-platform.com/content/20/game/the-principals/za/gumball-principals-banner-min.jpg?imwidth=300"
                        alt="The principals">
                    <p>The principals</p>
                </a>
            </li>
            <!-- The principals -->

            <!-- The legandary trails -->
            <li>
                <a href="https://www.cartoonnetworkhq.com/games/craig-of-the-creek-the-legendary-trials/play"
                    target="_blank">
                    <img src="https://cn.i.cdn.ti-platform.com/content/1539/game/the-legendary-trials/za/cotc_cover_image_english-min.jpg?imwidth=300"
                        alt="The Legandary Trails">
                    <p>The Legandary Trails</p>
                </a>
            </li>
            <!-- The legandary trails -->

            <!-- BMO-Play Along with me -->
            <li>
                <a href="https://www.cartoonnetworkhq.com/games/adventure-time-play-along-with-me/play" target="_blank">
                    <img src="https://cn.i.cdn.ti-platform.com/cnemea/content/328/game/bmo---play-along-with-me/uk/cover-en-1080x608.jpg?imwidth=300"
                        alt="BMO-Play Along with me">
                    <p>BMO-Play Along with me</p>
                </a>
            </li>
            <!-- BMO-Play Along with me -->

            <!-- Hypno Bliss -->
            <li>
                <a href="https://www.cartoonnetworkhq.com/games/the-powerpuff-girls-hypno-bliss/play" target="_blank">
                    <img src="https://cn.i.cdn.ti-platform.com/cnemea/content/31431/game/HypnoBliss-PPG-Cover-EN.jpg?imwidth=300"
                        alt="Hypno Bliss">
                    <p>Hypno Bliss</p>
                </a>
            </li>
            <!-- Hypno Bliss -->

            <!-- The quest of towers -->
            <li>
                <a href="https://www.cartoonnetworkhq.com/games/mighty-magiswords-the-quest-of-towers/play"
                    target="_blank">
                    <img src="https://cn.i.cdn.ti-platform.com/cnemea/content/30506/game/TheQuestOfTowers-MM-Cover-EN.jpg?imwidth=300"
                        alt="The quest of towers">
                    <p>The Quest of Towers</p>
                </a>
            </li>
            <!-- The quest of towers -->

            <!-- Rescue of Titans -->
            <li>
                <a href="https://www.cartoonnetworkhq.com/games/teen-titans-go-rescue-of-titans/play" target="_blank">
                    <img src="https://cn.i.cdn.ti-platform.com/cnemea/content/438/game/rescue-of-titans/uk/cover-en.jpg?imwidth=300"
                        alt="Rescue of Titans">
                    <p>Rescue of Titans</p>
                </a>
            </li>
            <!-- Rescue of Titans -->

            <!-- Alien Rush -->
            <li>
                <a href="https://www.cartoonnetworkhq.com/games/ben-10-alien-rush/play" target="_blank">
                    <img src="https://cn.i.cdn.ti-platform.com/cnemea/content/22105/game/AlienRush-B10-Cover-EN.jpg?imwidth=300"
                        alt="Alien Rush">
                    <p>Alien Rush</p>
                </a>
            </li>
            <!-- Alien Rush -->
        </div>
        <!-- Adventure -->

        <!-- arcade -->
        <h3 id="arcade">Arcade</h3>
        <div class="arcade box">
            <!-- Teen Titans GOAL! -->
            <li>
                <a href="https://www.cartoonnetworkhq.com/games/teen-titans-go-teen-titans-goal/play" target="_blank">
                    <img src="https://cn.i.cdn.ti-platform.com/content/437/teen-titans-goal-do-not-publish/game/za/teentitansgoal-1600x900-en.c0875224.jpg?imwidth=300"
                        alt="Teen Titans GOAL!">
                    <p>Teen Titans GOAL!</p>
                </a>
            </li>
            <!-- Teen Titans GOAL! -->

            <!-- Surf's Up! -->
            <li>
                <a href="https://www.cartoonnetworkhq.com/games/monster-beach-surfs-up/play" target="_blank">
                    <img src="https://cn.i.cdn.ti-platform.com/content/2014/surfs-up/game/za/surfsup-1280x720_en.e61a20e3.jpg?imwidth=300"
                        alt="Surf's Up">
                    <p>Surf's Up</p>
                </a>
            </li>
            <!-- Surf's Up! -->
            <!-- Spelugies -->
            <li>
                <a href="https://www.cartoonnetworkhq.com/games/the-fungies-spelungies/play" target="_blank">
                    <img src="https://cn.i.cdn.ti-platform.com/content/1962/spelungies/game/za/spelungies-titlecard-1600x900_en.c0180951.jpg?imwidth=300"
                        alt="Spelugies">
                    <p>Spelugies</p>
                </a>
            </li>
            <!-- Spelugies -->
            <!-- Tomb of Doom -->
            <li>
                <a href="https://www.cartoonnetworkhq.com/games/ben-10-tomb-of-doom/play" target="_blank">
                    <img src="https://cn.i.cdn.ti-platform.com/content/710/tomb-of-doom/game/za/cn_hero_1280x720_1.4952dbec.jpg?imwidth=300"
                        alt="Tomb of Doom">
                    <p>Tomb of Doom</p>
                </a>
            </li>
            <!-- Tomb of Doom -->
            <!-- Rumble Bee -->
            <li>
                <a href="https://www.cartoonnetworkhq.com/games/teen-titans-go-rumble-bee/play" target="_blank">
                    <img src="https://cn.i.cdn.ti-platform.com/content/437/rumble-bee-do-not-publish/game/za/rumblebee-1600x900-en.ae470332.jpg?imwidth=300"
                        alt="Rumble Bee">
                    <p>Rumble Bee</p>
                </a>
            </li>
            <!-- Rumble Bee -->

            <!-- Beats Battle -->
            <li>
                <a href="https://www.cartoonnetworkhq.com/games/apple-and-onion-beats-battle/play" target="_blank">
                    <img src="https://cn.i.cdn.ti-platform.com/content/1513/beats-battle/game/uk/beatsbattle-1280x720_en.f9f487dd.jpg?imwidth=300"
                        alt="Beats Battle">
                    <p>Beats Battle</p>
                </a>
            </li>
            <!-- Beats Battle -->

            <!-- Bottle catch -->
            <li>
                <a href="https://www.cartoonnetworkhq.com/games/apple-and-onion-bottle-catch/play" target="_blank">
                    <img src="https://cn.i.cdn.ti-platform.com/content/1512/bottle-catch-tbd---do-not-publish/game/za/bottlecatch-1600x900-en.ded413f1.jpg?imwidth=300"
                        alt="Bottle catch">
                    <p>Bottle catch</p>
                </a>
            </li>
            <!-- Bottle catch -->

            <!-- Power Surge -->
            <li>
                <a href="https://www.cartoonnetworkhq.com/games/ben-10-power-surge/play" target="_blank">
                    <img src="https://cn.i.cdn.ti-platform.com/content/710/game/power-surge/za/powersurge-b10-cover-en-min.jpg?imwidth=300"
                        alt="Power Surge">
                    <p>Power Surge</p>
                </a>
            </li>
            <!-- Power Surge -->

            <!-- Diamondhead Shoot -->
            <li>
                <a href="https://www.cartoonnetworkhq.com/games/ben-10-diamondhead-shoot/play" target="_blank">
                    <img src="https://cn.i.cdn.ti-platform.com/cnemea/content/24961/game/DiamondheadShoot-B10-Cover-EN.jpg?imwidth=300"
                        alt="Diamondhead Shoot">
                    <p>Diamondhead Shoot</p>
                </a>
            </li>
            <!-- Diamondhead Shoot -->

            <!-- Wildvine Shoot -->
            <li>
                <a href="https://www.cartoonnetworkhq.com/games/ben-10-wildvine-shoot/play" target="_blank">
                    <img src="https://cn.i.cdn.ti-platform.com/cnemea/content/710/game/wildvine-shoot/za/wildvineshoot-b10-cover-en.jpg?imwidth=300"
                        alt="Wildvine Shoot">
                    <p>Wildvine Shoot</p>
                </a>
            </li>
            <!-- Wildvine Shoot -->
            <!-- Gold Digger FRVR -->
            <li>
                <a href="https://www.crazygames.com/game/gold-digger-frvr" target="_blank">
                    <img src="https://images.crazygames.com/games/gold-digger-frvr/cover-1608107647188.png?auto=format,compress&q=75&cs=strip&ch=DPR&w=1200&h=630&fit=crop"
                        alt="Gold Digger FRVR">
                    <p>Gold Digger FRVR</p>
                </a>
            </li>
            <!-- Gold Digger FRVR -->

            <!-- Fireboy and Watergirl Elements -->
            <li>
                <a href="https://www.crazygames.com/game/fireboy-and-watergirl-5-elements" target="_blank">
                    <img src="https://tcf.admeen.org/game/17000/16959/400x246/fireboy-and-watergirl-5-elements.jpg"
                        alt="Fireboy and Watergirl Elements">
                    <p>Fireboy and Watergirl Elements</p>
                </a>
            </li>
            <!-- Fireboy and Watergirl Elements -->

        </div>
        <!-- arcade -->

        <!-- Race -->
        <h3 id="racing">Racing</h3>
        <div class="Racing box">
            <!-- Rock-n-Raven -->
            <li>
                <a href="https://www.cartoonnetworkhq.com/games/teen-titans-go-rock-n-raven/play" target="_blank">
                    <img src="https://cn.i.cdn.ti-platform.com/cnemea/content/28522/game/RockNRaven-TTG-Cover-EN.jpg?imwidth=300"
                        alt="Rock-n-Raven">
                    <p>Rock-n-Raven</p>
                </a>
            </li>
            <!-- Rock-n-Raven -->

            <!-- Adventure Time -->
            <li>
                <a href="https://www.cartoonnetworkhq.com/games/adventure-time-candy-dive/play" target="_blank">
                    <img src="https://cn.i.cdn.ti-platform.com/cnemea/content/15349/game/CandyDive-AT-Cover-EN.jpg?imwidth=300"
                        alt="Adventure Time">
                    <p>Adventure Time</p>
                </a>
            </li>
            <!-- Adventure Time -->

            <!-- Toon Cup 2020 -->
            <li>
                <a href="https://www.cartoonnetworkhq.com/games/toon-cup-2020/play" target="_blank">
                    <img src="https://cn.i.cdn.ti-platform.com/content/336/toon-cup-2020/game/uk/tooncup2020-1280x720-en.0b74787d.jpg?imwidth=300"
                        alt="Toon Cup 2020">
                    <p>Toon Cup 2020</p>
                </a>
            </li>
            <!-- Toon Cup 2020 -->
            <!-- Super Bike The Champion -->
            <li>
                <a href="https://www.crazygames.com/game/super-bike-the-champion" target="_blank">
                    <img src="https://images.crazygames.com/super-bike-the-champion/20201014153042/super-bike-the-champion-cover?auto=format,compress&q=75&cs=strip&ch=DPR&w=1200&h=630&fit=crop"
                        alt="Super Bike The Champion">
                    <p>Super Bike The Champion</p>
                </a>
            </li>
            <!-- Super Bike The Champion -->
            <!-- Dirt Rally driver -->
            <li>
                <a href="https://www.crazygames.com/game/dirt-rally-driver" target="_blank">
                    <img src="https://images.crazygames.com/games/dirt-rally-driver/thumb-1557732540104.png?auto=format,compress&q=75&cs=strip&ch=DPR&w=1200&h=630&fit=crop"
                        alt="Dirt Rally driver">
                    <p>Dirt Rally driver</p>
                </a>
            </li>
            <!-- Dirt Rally driver -->

            <!-- Fury Bike Rider -->
            <li>
                <a href="https://www.crazygames.com/game/fury-bike-rider" target="_blank">
                    <img src="https://images.crazygames.com/fury-bike-rider/20201114072321/fury-bike-rider-cover?auto=format,compress&q=75&cs=strip&ch=DPR&w=1200&h=630&fit=crop"
                        alt="Fury Bike Rider">
                    <p>Fury Bike Rider</p>
                </a>
            </li>
            <!-- Fury Bike Rider -->

            <!-- Gas and Sand -->
            <li>
                <a href="https://www.crazygames.com/game/gas-and-sand" target="_blank">
                    <img src="https://www.play-games.com/files/img/Gas-And-Sand_1428920728.png" alt="Gas and Sand">
                    <p>Gas and Sand</p>
                </a>
            </li>
            <!-- Gas and Sand -->

            <!-- Super star car -->
            <li>
                <a href="https://www.crazygames.com/game/super-star-car" target="_blank">
                    <img src="https://images.crazygames.com/games/super-star-car/cover-1617446681511.png?auto=format,compress&q=75&cs=strip&ch=DPR&w=1200&h=630&fit=crop"
                        alt="Super star car">
                    <p>Super star car</p>
                </a>
            </li>
            <!-- Super star car -->

            <!-- Beach City Drifters -->
            <li>
                <a href="https://www.cartoonnetworkhq.com/games/steven-universe-beach-city-drifter/play"
                    target="_blank">
                    <img src="https://cn.i.cdn.ti-platform.com/cnemea/content/31535/game/BeachCityDrifters-SU-Cover-EN.jpg?imwidth=300"
                        alt="Beach City Drifters">
                    <p>Beach City Drifters</p>
                </a>
            </li>
            <!-- Beach City Drifters -->

            <!-- Upgrade Chasers -->
            <li>
                <a href="https://www.cartoonnetworkhq.com/games/ben-10-upgrade-chasers/play" target="_blank">
                    <img src="https://cn.i.cdn.ti-platform.com/content/710/game/upgrade-chasers/za/d680dd3732264a3389e351a79702b3b4.jpg?imwidth=300"
                        alt="Upgrade Chasers">
                    <p>Upgrade Chasers</p>
                </a>
            </li>
            <!-- Upgrade Chasers -->
        </div>
        <!-- Race -->

        <!-- Simulation Games -->
        <h3 id="simulationgames">Simulation Games</h3>
        <div class="simulationgames box">
            <!-- dragonsimulator -->
            <li>
                <a href="https://www.crazygames.com/game/dragon-simulator-3d" target="_blank">
                    <img src="https://images.crazygames.com/dragon-simulator-3d/20210211141800/dragon-simulator-3d-cover?auto=format,compress&q=75&cs=strip&ch=DPR&w=1200&h=630&fit=crop"
                        alt="Dragon Simulation">
                    <p>Dragon Simulation</p>
                </a>
            </li>
            <!-- dragonsimulator -->
            <!-- Stickman Simulator -->
            <li>
                <a href="https://www.crazygames.com/game/stickman-simulator-final-battle" target="_blank">
                    <img src="https://images.crazygames.com/games/stickman-simulator-final-battle/thumb-1572948552252.png?auto=format,compress&q=75&cs=strip&ch=DPR&w=1200&h=630&fit=crop"
                        alt="Stickman Simulator">
                    <p>Stickman battle simulation</p>
                </a>
            </li>
            <!-- Stickman Simulator -->
            <!-- Horse Simulator -->
            <li>
                <a href="https://www.crazygames.com/game/horse-family-animal-simulator-3d" target="_blank">
                    <img src="https://i.pinimg.com/564x/6a/a6/6e/6aa66e1ead30e39152be446a9f772ba5.jpg"
                        alt="Horse Simulator">
                    <p>Horselife Simulation</p>
                </a>
            </li>
            <!-- Horse Simulator -->
            <!-- Truck Simulator -->
            <li>
                <a href="https://www.crazygames.com/game/truck-simulator-russia" target="_blank">
                    <img src="https://cdn.mos.cms.futurecdn.net/Ju543VFSShDbZaNBX6n5Ti.jpg" alt="Truck Simulator">
                    <p>Truck Simulator</p>
                </a>
            </li>
            <!-- Truck Simulator -->
            <!-- Tiger Simulation  -->
            <li>
                <a href="https://www.crazygames.com/game/tiger-simulator-3d" target="_blank">
                    <img src="https://images.crazygames.com/tiger-simulator-3d/20210208144425/tiger-simulator-3d-cover?auto=format,compress&q=75&cs=strip&ch=DPR&w=1200&h=630&fit=crop"
                        alt="Tiger Simulation">
                    <p>Tigerlife Simulation</p>
                </a>
            </li>
            <!-- Tiger Simulation  -->
            <!-- Wolf Simulation -->
            <li>
                <a href="https://www.crazygames.com/game/wolf-simulator-wild-animals-3d" target="_blank">
                    <img src="https://images.crazygames.com/wolf-simulator-wild-animals-3d/20210210181832/wolf-simulator-wild-animals-3d-cover?auto=format,compress&q=75&cs=strip&ch=DPR&w=1200&h=630&fit=crop"
                        alt="Wolf Simulation">
                    <p>Wolf Simulation</p>
                </a>
            </li>
            <!-- Wolf Simulation -->
            <!-- Parrot Simulation -->
            <li>
                <a href="https://www.crazygames.com/game/parrot-simulator" target="_blank">
                    <img src="https://images.crazygames.com/parrot-simulator/20210212073910/parrot-simulator-cover?auto=format,compress&q=75&cs=strip&ch=DPR&w=1200&h=630&fit=crop"
                        alt="Parrot Simulation">
                    <p>Parrot Simulation</p>
                </a>
            </li>
            <!-- Parrot Simulation -->
        </div>
        <!-- Simulation Games -->
        <!-- <li>
        <a href="" target="_blank">
            <img src="" alt="">
            <p></p>
        </a>
    </li> -->
        <!-- Strategy -->
        <h3 id="strategy">Strategy</h3>
        <div class="strategy box">
            <!-- compact conflict -->
            <li>
                <a href="https://wasyl.eu/games/compact-conflict/play.html#" target="_blank">
                    <img src="https://wasyl.eu/assets/images/compact-1-210.png" alt="Compact conflict">
                    <p>Compact Conflict</p>
                </a>
            </li>
            <!-- compact conflict -->
            <!-- escaping the prision -->
            <li>
                <a href="https://www.crazygames.com/game/escaping-the-prison" target="_blank">
                    <img src="https://images.crazygames.com/escapingtheprisonb.png?auto=format,compress&q=75&cs=strip&ch=DPR&w=1200&h=630&fit=crop"
                        alt="Escaping the prision">
                    <p>Escaping the prision</p>
                </a>
            </li>
            <!-- escaping the prision -->
            <!-- Ducklings -->
            <li>
                <a href="https://www.crazygames.com/game/ducklings" target="_blank">
                    <img src="https://img.itch.zone/aW1hZ2UvNDg1NzQ2LzI1MDc0MDYucG5n/original/0Pqak%2F.png"
                        alt="Ducklings">
                    <p>Ducklings</p>
                </a>
            </li>
            <!-- Ducklings -->
            <!-- Stickman Clans -->
            <li>
                <a href="https://www.crazygames.com/game/stick-war-legacy-2" target="_blank">
                    <img src="https://images.crazygames.com/games/stick-war-legacy-2/cover-1617443947007.png?auto=format,compress&q=75&cs=strip&ch=DPR&w=1200&h=630&fit=crop"
                        alt="Stickman Clans">
                    <p>Stickman Clans</p>
                </a>
            </li>
            <!-- Stickman Clans -->
            <!-- Anocris -->
            <li>
                <a href="https://www.crazygames.com/game/anocris" target="_blank">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPw4YnWXHbIEe8Hpo0_hzIwVjf9SjFlURA_PS7GtEtwDfo-SIlhfn_ERG17Evs9jtI9Cc&usqp=CAU"
                        alt="Anocris">
                    <p>Anocris</p>
                </a>
            </li>
            <!-- Anocris -->
            <!-- Ducklife Adventure -->
            <li>
                <a href="https://www.crazygames.com/game/duck-life-adventure-demo" target="_blank">
                    <img src="https://images.crazygames.com/duck-life-adventure-demo/20200722114337/duck-life-adventure-demo-cover?auto=format,compress&q=75&cs=strip&ch=DPR&w=1200&h=630&fit=crop"
                        alt="Ducklife Adventure">
                    <p>Ducklife Adventure</p>
                </a>
            </li>
            <!-- Ducklife Adventure -->
            <!-- Ducklife Battle -->
            <li>
                <a href="https://www.crazygames.com/game/duck-life-battle" target="_blank">
                    <img src="https://images.crazygames.com/duck-life-battle?auto=format,compress&q=75&cs=strip&ch=DPR&w=1200&h=630&fit=crop"
                        alt="Ducklife Battle">
                    <p>Ducklife Battle</p>
                </a>
            </li>
            <!-- Ducklife Battle -->
            <!-- Ducklife -->
            <li>
                <a href="https://www.crazygames.com/game/ducklife-4" target="_blank">
                    <img src="https://play-lh.googleusercontent.com/A9JTxfNNzoHoMRzABMG7FC9Q6jm2I0CEV7CT7a1OQ542at3mX4nMln70iLIrnQfW3sI"
                        alt="Ducklife">
                    <p>Ducklife</p>
                </a>
            </li>
            <!-- Ducklife -->
        </div>
        <!-- Strategy -->

        <!-- wargames -->
        <h3 id="wargames">War Games</h3>
        <div class="wargames box">
            <!-- Tiny Rifles -->
            <li>
                <a href="https://www.crazygames.com/game/tiny-rifles" target="_blank">
                    <img src="https://images.crazygames.com/tinyrifles.png?auto=format,compress&q=75&cs=strip&ch=DPR&w=1200&h=630&fit=crop"
                        alt="Tiny Rifles">
                    <p>Tiny Rifles</p>
                </a>
            </li>
            <!-- Tiny Rifles -->

            <!-- Air wars -->
            <li>
                <a href="https://www.crazygames.com/game/air-wars-2" target="_blank">
                    <img src="https://images.crazygames.com/games/air-wars-2/thumb-1583742812354.png?auto=format,compress&q=75&cs=strip&ch=DPR&w=1200&h=630&fit=crop"
                        alt="Air wars">
                    <p>Air wars</p>
                </a>
            </li>
            <!-- Air wars -->
            <!-- crazyshooters2 -->
            <li>
                <a href="https://www.crazygames.com/game/crazy-shooters-2" target="_blank">
                    <img src="https://images.crazygames.com/crazyshooters2.png?auto=format,compress&q=75&cs=strip&ch=DPR&w=1200&h=630&fit=crop"
                        alt="Crazy Shooters 2">
                    <p>Crazy Shooters</p>
                </a>
            </li>
            <!-- crazyshooters2 -->
            <!-- brutalmania -->
            <li>
                <a href="https://www.crazygames.com/game/brutalmania-io" target="_blank">
                    <img src="https://images.crazygames.com/games/brutalmania-io/cover-1584553430060.png?auto=format,compress&q=75&cs=strip&ch=DPR&w=1200&h=630&fit=crop"
                        alt="Brutal Mania">
                    <p>Brutal Mania</p>
                </a>
            </li>
            <!-- brutalmania -->
            <!-- Dynasty War -->
            <li>
                <a href="https://www.crazygames.com/game/dynasty-war" target="_blank">
                    <img src="https://images.crazygames.com/games/dynasty-war/thumb-1585295167997.png?auto=format,compress&q=75&cs=strip&ch=DPR&w=1200&h=630&fit=crop"
                        alt="Dynasty War">
                    <p>Dynasty War</p>
                </a>
            </li>
            <!-- Dynasty War -->
            <!-- bullet force -->
            <li>
                <a href="https://www.crazygames.com/game/bullet-force-multiplayer" target="_blank">
                    <img src="https://images.crazygames.com/games/bullet-force-multiplayer/cover-1588010858655.png?auto=format,compress&q=75&cs=strip&ch=DPR&w=1200&h=630&fit=crop"
                        alt="bullet force">
                    <p>Bullet Force</p>
                </a>
            </li>
            <!-- bullet force -->

            <!-- Battleship -->
            <li>
                <a href="https://www.crazygames.com/game/battleship" target="_blank">
                    <img src="https://images.crazygames.com/games/battleship/cover-1576608307836.png?auto=format,compress&q=75&cs=strip&ch=DPR&w=1200&h=630&fit=crop"
                        alt="Battleship">
                    <p>Battleship</p>
                </a>
            </li>
            <!-- Battleship -->

            <!-- Warfare 1917 -->
            <li>
                <a href="https://www.crazygames.com/game/warfare-1917" target="_blank">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTyqTDRVBQ1LGDBWwPQPeat4DzFaNnm37hmvTw2RQJYtxS1erO1clgCfzywWp5v3blwyLw&usqp=CAU"
                        alt="Warfare 1917">
                    <p>Warfare 1917</p>
                </a>
            </li>
            <!-- Warfare 1917 -->
            <!-- Warfare 1944 -->
            <li>
                <a href="https://www.crazygames.com/game/warfare-1944" target="_blank">
                    <img src="https://images.igdb.com/igdb/image/upload/t_screenshot_huge/bnggxmnmvfme46h9zvon.jpg"
                        alt="Warfare 1944">
                    <p>Warfare 1944</p>
                </a>
            </li>
            <!-- Warfare 1944 -->
            <!-- Fighter Aircraft Piolet -->
            <li>
                <a href="https://www.crazygames.com/game/fighter-aircraft-pilot" target="_blank">
                    <img src="https://images.crazygames.com/fighter-aircraft-pilotb.png?auto=format,compress&q=75&cs=strip&ch=DPR&w=1200&h=630&fit=crop"
                        alt="Fighter Aircraft Piolet">
                    <p>Fighter Aircraft Piolet</p>
                </a>
            </li>
            <!-- Fighter Aircraft Piolet -->
        </div>
        <!-- wargames -->

        <!-- Gameplay -->
        <h3 id="gameplay">Gameplay</h3>
        <div class="gameplay box">
            <!-- Call of Duty WW2 -->
            <li>
                <a href="https://www.youtube.com/watch?v=grw6bIJ_kbg" target="_blank">
                    <img src="https://www.callofduty.com/content/dam/atvi/callofduty/wwii/home/Stronghold_Metadata_Image.jpg"
                        alt="Call of Duty WW2">
                    <p>Call of Duty WW2</p>
                </a>
            </li>
            <!-- Call of Duty WW2 -->
            <!-- Call of Duty Modern Warefare 3 -->
            <li>
                <a href="https://www.youtube.com/watch?v=0dn10Fsj_Pg" target="_blank">
                    <img src="https://i.ytimg.com/vi/0dn10Fsj_Pg/maxresdefault.jpg" alt="Call of Duty Modern Warefare">
                    <p>Call of Duty Modern Warefare 3</p>
                </a>
            </li>
            <!-- Call of Duty Modern Warefare 3 -->


            <!-- Call of Duty Modern Warefare 2 -->
            <li>
                <a href="https://www.youtube.com/watch?v=V5rq_arUBkM&list=PLOjTvnnlKIGJBMV0A2XhiRlVZWquWW9De&index=18"
                    target="_blank">
                    <img src="https://i.ytimg.com/vi/V5rq_arUBkM/hqdefault.jpg?sqp=-oaymwEbCKgBEF5IVfKriqkDDggBFQAAiEIYAXABwAEG&rs=AOn4CLD1yKJSeRl7fmWHHyIADzR18Y-WFQ"
                        alt="Call of Duty Modern Warefare 2">
                    <p>Call of Duty Modern Warefare 2</p>
                </a>
            </li>
            <!-- Call of Duty Modern Warefare 2 -->

            <!-- Call of Duty Modern Warfare -->
            <li>
                <a href="https://www.youtube.com/watch?v=w6cJRU4JQ5o&list=PLOjTvnnlKIGJBMV0A2XhiRlVZWquWW9De&index=22"
                    target="_blank">
                    <img src="https://i.ytimg.com/vi/w6cJRU4JQ5o/hqdefault.jpg?sqp=-oaymwEbCKgBEF5IVfKriqkDDggBFQAAiEIYAXABwAEG&rs=AOn4CLDgMy_96DH1lkvTPRQG_dQR5_bmig"
                        alt="Call of Duty Modern Warfare">
                    <p>Call of Duty Modern Warfare</p>
                </a>
            </li>
            <!-- Call of Duty Modern Warfare -->

            <!-- Call of Duty Black Ops Cold War -->
            <li>
                <a href="https://www.youtube.com/watch?v=h9XOJhEJlJg&list=PLOjTvnnlKIGJBMV0A2XhiRlVZWquWW9De&index=40"
                    target="_blank">
                    <img src="https://i.ytimg.com/vi/h9XOJhEJlJg/hqdefault.jpg?sqp=-oaymwEbCKgBEF5IVfKriqkDDggBFQAAiEIYAXABwAEG&rs=AOn4CLCJaqnI4G_s5BCRhu2gIM587ebzJg"
                        alt="Call of Duty Black Ops Cold War">
                    <p>Call of Duty Black Ops Cold War</p>
                </a>
            </li>
            <!-- Call of Duty Black Ops Cold War -->

            <!-- Call of Duty 4 Modern Warefare -->
            <li>
                <a href="https://www.youtube.com/watch?v=JWL9CxsdpWE&list=PLOjTvnnlKIGJBMV0A2XhiRlVZWquWW9De&index=100"
                    target="_blank">
                    <img src="https://i.ytimg.com/vi/JWL9CxsdpWE/hqdefault.jpg?sqp=-oaymwEbCKgBEF5IVfKriqkDDggBFQAAiEIYAXABwAEG&rs=AOn4CLBM_pvWjnRxjyQWcXKfn9o7oI9ECA"
                        alt="Call of Duty 4 Modern Warefare">
                    <p>Call of Duty 4 Modern Warefare</p>
                </a>
            </li>
            <!-- Call of Duty 4 Modern Warefare -->

            <!-- Call of Duty - Ghosts -->
            <li>
                <a href="https://www.youtube.com/watch?v=Kf8R-74bEwc&list=WL&index=7&t=4703s" target="_blank">
                    <img src="https://i.ytimg.com/vi/Kf8R-74bEwc/hqdefault.jpg?sqp=-oaymwEbCKgBEF5IVfKriqkDDggBFQAAiEIYAXABwAEG&rs=AOn4CLDlIFDD9w-V0BDWLxMRy0M1-7w5pA"
                        alt="Call of Duty - Ghosts">
                    <p>Call of Duty - Ghosts</p>
                </a>
            </li>
            <!-- Call of Duty - Ghosts -->

            <!-- Call of Duty Infinite Warfare -->
            <li>
                <a href="https://www.youtube.com/watch?v=ixzKvJeXrY4&list=PLOjTvnnlKIGJBMV0A2XhiRlVZWquWW9De&index=96"
                    target="_blank">
                    <img src="https://i.ytimg.com/vi/ixzKvJeXrY4/hqdefault.jpg?sqp=-oaymwEbCKgBEF5IVfKriqkDDggBFQAAiEIYAXABwAEG&rs=AOn4CLBEVlz1zKD15E7-fiasrVQNM_7hbQ"
                        alt="Call of Duty Infinite Warfare">
                    <p>Call of Duty Infinite Warfare</p>
                </a>
            </li>
            <!-- Call of Duty Infinite Warfare -->

            <!-- Call of Duty 3 -->
            <li>
                <a href="https://www.youtube.com/watch?v=ATvF046tI0E&list=PLOjTvnnlKIGJBMV0A2XhiRlVZWquWW9De&index=116"
                    target="_blank">
                    <img src="https://i.ytimg.com/vi/ATvF046tI0E/hqdefault.jpg?sqp=-oaymwEbCKgBEF5IVfKriqkDDggBFQAAiEIYAXABwAEG&rs=AOn4CLAYAOe6LOa6d_l33bgQQQsZ31PjWQ"
                        alt="Call of Duty 3">
                    <p>Call of Duty 3</p>
                </a>
            </li>
            <!-- Call of Duty 3 -->

            <!-- Call of Duty Black Ops 3 -->
            <li>
                <a href="https://www.youtube.com/watch?v=pj_q9JhyxUg&list=PLOjTvnnlKIGJBMV0A2XhiRlVZWquWW9De&index=138"
                    target="_blank">
                    <img src="https://i.ytimg.com/vi/pj_q9JhyxUg/hqdefault.jpg?sqp=-oaymwEbCKgBEF5IVfKriqkDDggBFQAAiEIYAXABwAEG&rs=AOn4CLDzLk8k4aQaXVT_KFLVFlMc_PPZhQ"
                        alt="Call of Duty Black Ops 3">
                    <p>Call of Duty Black Ops 3</p>
                </a>
            </li>
            <!-- Call of Duty Black Ops 3 -->
            <!-- Call of Black Ops 2 -->
            <li>
                <a href="https://www.youtube.com/watch?v=O1Waxbax_6o&list=PLOjTvnnlKIGJBMV0A2XhiRlVZWquWW9De&index=150"
                    target="_blank">
                    <img src="https://i.ytimg.com/vi/O1Waxbax_6o/hqdefault.jpg?sqp=-oaymwEbCKgBEF5IVfKriqkDDggBFQAAiEIYAXABwAEG&rs=AOn4CLDMdz46zZrjqtg0gklVjZzNMBmDJQ"
                        alt="Call of Black Ops 2">
                    <p>Call of Black Ops 2</p>
                </a>
            </li>
            <!-- Call of Black Ops 2 -->

            <!-- Call of Duty Advanced Warefare -->
            <li>
                <a href="https://www.youtube.com/watch?v=aMYhjSjhAMY&list=PLOjTvnnlKIGJBMV0A2XhiRlVZWquWW9De&index=156"
                    target="_blank">
                    <img src="https://i.ytimg.com/vi/aMYhjSjhAMY/hqdefault.jpg?sqp=-oaymwEbCKgBEF5IVfKriqkDDggBFQAAiEIYAXABwAEG&rs=AOn4CLDxHFeF3A1XfZZWYI55QPftDg1usQ"
                        alt=" Call of Duty Advanced Warefare">
                    <p>Call of Duty Advanced Warefare</p>
                </a>
            </li>
            <!-- Call of Duty Advanced Warefare -->

            <!-- Call of Duty Black Ops -->
            <li>
                <a href="https://www.youtube.com/watch?v=pBm_uZidDT0&list=PLOjTvnnlKIGJBMV0A2XhiRlVZWquWW9De&index=169"
                    target="_blank">
                    <img src="https://i.ytimg.com/vi/pBm_uZidDT0/hqdefault.jpg?sqp=-oaymwEbCKgBEF5IVfKriqkDDggBFQAAiEIYAXABwAEG&rs=AOn4CLBRjDVTN8kcUrZAS-px4O8nJr3-ow"
                        alt="Call of Duty Black Ops">
                    <p>Call of Duty Black Ops</p>
                </a>
            </li>
            <!-- Call of Duty Black Ops -->

            <!-- Call of Duty World at War -->
            <li>
                <a href="https://www.youtube.com/watch?v=wbTYqoboN48&list=PLOjTvnnlKIGJBMV0A2XhiRlVZWquWW9De&index=182"
                    target="_blank">
                    <img src="https://i.ytimg.com/vi/wbTYqoboN48/hqdefault.jpg?sqp=-oaymwEbCKgBEF5IVfKriqkDDggBFQAAiEIYAXABwAEG&rs=AOn4CLAPPqWZDZkOSeLQtaAxhw58CJnMjw"
                        alt="Call of Duty World at War">
                    <p>Call of Duty World at War</p>
                </a>
            </li>
            <!-- Call of Duty World at War -->

            <!-- Call of Duty 2 -->
            <li>
                <a href="https://www.youtube.com/watch?v=gvPSgG_nyEo&list=PLOjTvnnlKIGJBMV0A2XhiRlVZWquWW9De&index=185"
                    target="_blank">
                    <img src="https://i.ytimg.com/vi/gvPSgG_nyEo/hqdefault.jpg?sqp=-oaymwEbCKgBEF5IVfKriqkDDggBFQAAiEIYAXABwAEG&rs=AOn4CLA7xDOu-u0IL-atMvL7fBYL7x8e3Q"
                        alt="Call of Duty 2">
                    <p>Call of Duty 2</p>
                </a>
            </li>
            <!-- Call of Duty 2 -->

            <!-- Battlefield 1 -->
            <li>
                <a href="https://www.youtube.com/watch?v=uNUArn_FIwg" target="_blank">
                    <img src="https://cdn.ndtv.com/tech/gadgets/battlefield_1_key_art.jpg" alt="Battlefield 1">
                    <p>Battlefield 1</p>
                </a>
            </li>
            <!-- Battlefield 1 -->

            <!-- Battlefield 2 -->
            <li>
                <a href="https://www.youtube.com/watch?v=r8tcEzayFio" target="_blank">
                    <img src="https://cdn.cloudflare.steamstatic.com/steam/apps/24960/header.jpg?t=1615390775"
                        alt="Battlefield 2">
                    <p>Battlefield 2</p>
                </a>
            </li>
            <!-- Battlefield 2 -->

            <!-- Battlefield3 -->
            <li>
                <a href="https://www.youtube.com/watch?v=V0GdtkMOMxc" target="_blank">
                    <img src="https://steamcdn-a.akamaihd.net/steam/apps/1238820/capsule_616x353.jpg?t=1592013087"
                        alt="Battlefield3">
                    <p>Battlefield3</p>
                </a>
            </li>
            <!-- Battlefield3 -->

            <!-- Battlefield4 -->
            <li>
                <a href="https://www.youtube.com/watch?v=8rHPxgOf9nc" target="_blank">
                    <img src="https://media.contentapi.ea.com/content/dam/gin/images/2017/01/bf4-keyart.jpg.adapt.crop191x100.628p.jpg"
                        alt="Battlefield4">
                    <p>Battlefield4</p>
                </a>
            </li>
            <!-- Battlefield4 -->


            <!-- Battlefield5 -->
            <li>
                <a href="https://www.youtube.com/watch?v=QYYfU6Mj1kE" target="_blank">
                    <img src="https://cdn.images.express.co.uk/img/dynamic/143/590x/Battlefield-5-summer-update-1291216.jpg?r=1591349051006"
                        alt="Battlefield 5">
                    <p>Battlefield 5</p>
                </a>
            </li>
            <!-- Battlefield5 -->
        </div>
    </div>
</body>

</html>

<!-- Syntax
    <li>
        <a href="" target="_blank">
            <img src="" alt="">
            <p></p>
        </a>
    </li> 
-->