<?php 
  session_start();
  include_once "php/config.php";
?>
<?php include_once "header1.php"; ?>
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
                <input class="input-field" type="text" placeholder="Search on Facebook" />
            </div>
        </div>

        <div class="navbar_center">
            <a class="active_icon" href="#">
                <i class="fas fa-home"></i>
            </a>
            <a href="#">
                <i class="fas fa-user-friends"></i>
            </a>
            <!-- <a href="#">
                <i class="fas fa-users"></i>
            </a> -->
            <a href="#">
                <i class="fas fa-video"></i>
            </a>
            <a href="#">
                <i class="fas fa-bell"></i>
            </a>
            <a href="#">
                <i class="fas fa-gamepad"></i>
            </a>            
          </div>

        <div class="navbar_right">
            <div class="navbar_right_profile">
                <img src="php/images/<?php echo $row['img']; ?>" alt="">
                <span><?php echo $row['fname'] . " " . $row['lname']; ?></span>
            </div>
            <div class="navbar_right_links">
                <a href="messenger.php"><i class="fab fa-facebook-messenger"></i></a>
                <a href="#"><i class="fas fa-bell"></i></a>
                <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout</a>
            </div>
            <div id="plus" class="plus_minus">
              <div>
              <h1><i class="fa fa-cog"></i>Settings & Privacy</h1>
              </div>
              <div>
              <h1><i class="fa fa-question-circle"></i>Help & Support</h1>
              </div>
              <div>
              <h1><i class="fa fa-moon"></i>Display & accessibility</h1>
              </div>
              <div>
              <h1><i class="fa fa-log-out"></i>Sign Out</h1>
              </div>
            </div>
        </div>

        <div class="navbar_right_bars">
        <a href="#">
              <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>
    <!-- navbar ends -->
    <!-- content starts -->
    <div class="content">
        <div class="">
            <div class="content_left">
                <ul>
                    <li>
                        <a href="#">
                            <img src="php/images/<?php echo $row['img']; ?>" alt="" style="border-radius: 100%;">
                            <span><?php echo $row['fname'] . " " . $row['lname']; ?></span>
                        </a>
                    </li>
                    <div class="border"></div>
                    <br>
                    <li>
                        <a href="covid/covid.html">
                            <img src="assets/covid.png" alt="covid" />
                            <span>COVID-19 Information Center</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="assets/friends.png" alt="friends" />
                            <span>Friends</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="assets/pages.png" alt="marketplace" />
                            <span>Pages</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="assets/groups.png" alt="groups" /> <span>Groups</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="assets/videos.png" alt="videos" /> <span>Videos</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="assets/memories.png" alt="memories" />
                            <span>Memories</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="assets/events.png" alt="Events" />
                            <span>Events</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="assets/saved.png" alt="saved" /> <span>Saved</span>
                        </a>
                    </li>


                    <div id="hide_show" style="display: none;">
                        <div class="border"></div>
                        <h3 class="shortcut_title">Community resources</h3>
                        <li>
                            <a href="covid/covid.html">
                                <img src="assets/covid.png" alt="covid" />
                                <span>COVID-19 Information Center</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="assets/blood.png" alt="blood" />
                                <span>Blood donation</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="assets/communityhelp.png" alt="Community" />
                                <span>Community Help</span>
                            </a>
                        </li>


                        <div class="border"></div>
                        <h3 class="shortcut_title">Apps</h3>
                        <li>
                            <a href="messenger.php">
                                <img src="assets/messenger.png" alt="messenger" /> <span>Messenger</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="assets/gaming.png" alt="gaming" /> <span>Gaming</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="assets/marketplace.png" alt="marketplace" />
                                <span>Marketplace</span>
                            </a>
                        </li>
                        <li>
                            <a href="weather/weather.html">
                                <img src="assets/whether.png" alt="whether" />
                                <span>Whether</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="assets/jobs.png" alt="Jobs" />
                                <span>Jobs</span>
                            </a>
                        </li>
                    </div>
                    <li>
                        <a id="foo1" onclick="hide()"><span class="see_more"><i class="fas fa-arrow-down"></i>See
                                more</span></a>

                    </li>
                    <li>
                        <a id="foo2" onclick="hide()" style="display: none;"><span class="see_less"><i
                                    class="fas fa-arrow-up"></i>See less</span></a>
                    </li>


                    <div class="border"></div>
                    <h3 class="shortcut_title">Your shortcuts</h3>
                    <div class="shortcuts_wrapper">
                        <a href="#">
                            <img src="assets/shortcuts.jpg" alt="shortcuts" />
                            <span>Cebu Perfumes And Accessories</span>
                        </a>
                    </div>
                </ul>
            </div>
        </div>





        <div>
            <div class="content_right">
                <div class="stories">
                    <button id="story"><i class="fa fa-plus-circle"></i><br> Create Story</button>
                </div>
                <div class="media_container">
                    <div class="share">
                        <div class="share_upSide">
                        <img src="php/images/<?php echo $row['img']; ?>" alt="" style="border-radius: 100%;">
                            <button id="share_upSide_btn">What's on your mind, <?php echo $row['fname']; ?>? </button>
                        </div>
                        <hr />
                        <div class="share_downSide">
                            <div class="share_downSide_link">
                                <i class="fas fa-video live-video-icon"></i>
                                <span>Live Video</span>
                            </div>
                            <div class="share_downSide_link">
                            <!-- <input type="file"> -->
                                <i class="fas fa-photo-video photo-video-icon"></i>
                                <span>Photo/Video</span>
                            </div>
                            <div class="share_downSide_link">
                                <i class="far fa-grin-alt feeling-icon"></i>
                                <span>Feeling/Activity</span>
                            </div>
                        </div>
                    </div>





                    <!-- news feed -->
                    <div class="news_feed">
                        <div class="news_feed_title">
                            <img src="assets/user.png" alt="user" />
                            <div class="news_feed_title_content">
                                <p>Codersbite Magazine</p>
                                <span>12h . <i class="fas fa-globe-americas"></i></span>
                            </div>
                        </div>
                        <div class="news_feed_description">
                            <p class="news_feed_subtitle">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi esse cum id vero odit tempora dicta. Saepe corporis voluptatibus laboriosam?
                            </p>
                            <img src="assets/sunflower.jpg" alt="sunflower" />
                            <div class="news_feed_description_title">
                                <span>YOUTUBE / CODERSBITE</span>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt repudiandae exercitationem mollitia, suscipit labore rem reiciendis distinctio atque totam facere placeat officia ea quia? Atque.
                                </p>
                            </div>
                        </div>

                        <div class="likes_area">
                            <div class="emojis">
                                <img src="assets/emoji_like.png" alt="like" />
                                <img src="assets/emoji_surprised.png" alt="surprised" />
                                <img src="assets/emoji_angry.png" alt="angry" />
                                <span>25</span>
                            </div>
                            <div class="comment_counts">
                                <span>4 Comments</span>
                                <span>13 Shares</span>
                            </div>
                        </div>

                        <div class="divider">
                            <hr />
                        </div>
                        <div class="likes_buttons">
                            <div class="likes_buttons_links">
                                <i class="far fa-thumbs-up"></i>
                                <span>Like</span>
                            </div>
                            <div class="likes_buttons_links">
                                <i class="far fa-comment-alt"></i>
                                <span>Comment</span>
                            </div>
                            <div class="likes_buttons_links">
                                <i class="fas fa-share"></i>
                                <span>Share</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <script src="script.js">
    </script>
  
</body>
</html>
