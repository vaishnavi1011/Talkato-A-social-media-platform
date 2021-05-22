<?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
<body>
    <div class="newmessage">
        <a href="messenger.php"><img src="assets/newmessenger.png" alt=""></a>
    </div>
    <div class="navbar">
        <div class="navbar_left">
            <img class="navbar_logo" src="assets/facebook.png" alt="logo" />
            <div class="input-icons">
                <i class="fas fa-search icon"></i>
                <input class="input-field" type="text" placeholder="Search on Talkato" />
            </div>
        </div>

        <div class="navbar_center">
            <a class="active_icon" href="users.php">
                <i class="fas fa-home"></i>
            </a>
            <a href="#">
                <i class="fas fa-user-friends"></i>
            </a>
            <a href="#">
                <i class="fas fa-users"></i>
            </a>
            <a href="movies_and_songs/index.php">
                <i class="fas fa-video"></i>
            </a>
            <a href="#">
                <i class="fas fa-bell"></i>
            </a>
            <a href="games/Game.php">
                <i class="fas fa-gamepad"></i>
            </a>            
          </div>

        <div class="navbar_right">
            <a href="profile.php">
                <div class="navbar_right_profile">
                    <img src="php/images/<?php echo $row['img']; ?>" alt="">
                    <span><?php echo $row['fname'] . " " . $row['lname']; ?></span>
                </div>
            </a>
            <div class="navbar_right_links">
                <a href="messenger.php"><i class="fab fa-facebook-messenger"></i></a>
                <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout"><i class="fas fa-sign-out-alt"></i></a>
            </div>
        </div>

        <div class="navbar_right_bars">
        <a onclick>
              <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>