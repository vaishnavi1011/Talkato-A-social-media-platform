<div class="content_left">
                <ul>
                    <li>
                        <a href="profile.php">
                            <img src="php/images/<?php echo $row['img']; ?>" alt="" style="border-radius: 100%;">
                            <span><?php echo $row['fname'] . " " . $row['lname']; ?></span>
                        </a>
                    </li>
                    <div class="border"></div>
                    <h3 class="shortcut_title">Suggested</h3>
                    <li>
                        <a href="covid/covid.php">
                            <img src="assets/covid.png" alt="covid" />
                            <span>COVID-19 Information Center</span>
                        </a>
                    </li>
                    <li>
                        <a href="movies_and_songs/index.php">
                            <img src="assets/videos.png" alt="videos" /> <span>Movies & Songs</span>
                        </a>
                    </li>
                    <li>
                        <a href="Websites/web.html">
                            <img src="assets/web.png" alt="" /> <span>Websites</span>
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
                            <img src="assets/pages.png" alt="" />
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
                            <a href="covid/covid.php">
                                <img src="assets/covid.png" alt="covid" />
                                <span>COVID-19 Information Center</span>
                            </a>
                        </li>
                        <li>
                            <a href="blood/blood.php">
                                <img src="assets/blood.png" alt="blood" />
                                <span>Blood donation</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="assets/communityhelp.png" alt="" />
                                <span>Community Help</span>
                            </a>
                        </li>


                        <div class="border"></div>
                        <h3 class="shortcut_title">Apps & Entertainmaint</h3>
                        <li>
                        <a href="movies_and_songs/index.html">
                            <img src="assets/videos.png" alt="videos" /> <span>Movies & Songs</span>
                        </a>
                        </li>
                        <li>
                            <a href="messenger.php">
                                <img src="assets/messenger.png" alt="messenger" /> <span>Messenger</span>
                            </a>
                        </li>
                        <li>
                            <a href="games/Game.php">
                                <img src="assets/gaming.png" alt="gaming" /> <span>Games</span>
                            </a>
                        </li>
                        <li>
                            <a href="weather/weather.html">
                                <img src="assets/whether.png" alt="whether" />
                                <span>Whether</span>
                            </a>
                        </li>
                        <div class="border"></div>
                        <h3 class="shortcut_title">Help & Settings</h3>
                        <li>
                            <a href="#">
                                <img src="assets/help.png" style="border-radius:100%" />
                                <span>Help Centre</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="assets/setting.png" />
                                <span>Settings</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="assets/privacy.png" />
                                <span>Privacy shortcuts</span>
                            </a>
                        </li>
                        <li>
                            <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>">
                                <img src="assets/logout.png" style="border-radius:100%" />
                                <span>Logout</span>
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