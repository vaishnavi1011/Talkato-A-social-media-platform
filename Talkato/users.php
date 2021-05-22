<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
      header("location: index.php");
    }
?>
<?php include_once "header1.php"; ?>
<?php include_once "navbar.php"; ?>
<?php include_once "php/functions.php"; ?>

<style>
    /* The Modal (background) */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        padding-top: 50px;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
        padding:10px;
        background-color: #fefefe;
        margin: auto;
        border: 1px solid white;
        border-radius: 10px;
        max-width:fit-content;
    }

    /* The Close Button */
    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        padding-right: 5px;
        border-radius: 10px;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }


    textarea {
    resize:none; 
    font-size:25px;
    border: none;
    overflow: auto;
    outline: none;

    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    }

    .image label,
    .image input
    {
        font-size:22px;
    }

    .button{
        margin:8px;
    }

    .button button{
        font-size:25px;
        width:100%;
    }
    #btn-post{
        border:1px solid blue;
        border-radius:5px;
        background-color:blue;
        font-weight:bold;
        color:white;
    }
</style>
<div class="content">
    <div class="">
        <?php include_once "sidebar.php"; ?>
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
                        <button id="share_upSide_btn">What's on your mind,
                            <?php echo $row['fname']; ?>?
                        </button>
                    </div>

                    <!-- The Modal -->
                    <div id="myModal" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <!-- <div> -->
                            <div id="insert_post" class="wrapper">
                                <section class="form signup">
                                <header style="text-align:center; font-family:bold;">
                                    <div>
                                        <h1>Create post</h1>
                                    </div>
                                </header>
                                <form action="users.php" method="POST" id="f" enctype="multipart/form-data">
                                    <div class="error-text"></div>
                                    <div class="field input">
                                    <textarea name="content" id="content" cols="43" rows="6" placeholder=" What's on your mind <?php echo $row['fname']?>?"></textarea> <br>
                                    </div>
                                    <div class="field image">
                                    <label>Select Image</label>
                                    <input type="file" name="upload_image" id="upload_img">
                                    </div>
                                    <div class="field button">
                                    <button id="btn-post" type="submit" name="sub">Post</button>
                                    </div>
                                </form>
                                </section>
                            </div>
                            <!-- </div> -->
                        </div>

                    </div>




                    <hr />
                    <div class="share_downSide">
                        <div class="share_downSide_link">
                            <i class="fas fa-video live-video-icon"></i>
                            <span>Live Video</span>
                        </div>
                        <div class="share_downSide_link">
                            <label>
                                <i class="fas fa-photo-video photo-video-icon"></i>
                                <span>Photo/Video</span>
                                <!-- <input type="file" style="display:none;"> -->

                            </label>
                        </div>
                        <div class="share_downSide_link">
                            <i class="far fa-grin-alt feeling-icon"></i>
                            <span>Feeling/Activity</span>
                        </div>
                    </div>
                </div>
                




                <?php foreach($query as $q){?>
                    <div class="news_feed">
                <!-- news feed -->
                    <!-- <h1>News feed</h1> -->
                    <div class="news_feed_title">
                        <img src="php/images/<?php echo $q['profile_image']; ?>" alt="user" />
                        <div class="news_feed_title_content">
                            <p><?php echo $q['profile_name']; ?></p>
                            <span><?php echo $q['post_date']?> <i class="fas fa-globe-americas"></i></span>
                        </div>
                    </div>
                    <div class="news_feed_description">
                        <p class="news_feed_subtitle">
                            <?php echo $q['post_content']?>
                        </p>
                        <img src="imagepost/<?php echo $q['upload_image']?>" alt="" />
                        <!-- <div class="news_feed_description_title">
                            <span>YOUTUBE / CODERSBITE</span>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt repudiandae
                                exercitationem mollitia, suscipit labore rem reiciendis distinctio atque totam facere
                                placeat officia ea quia? Atque.
                            </p>
                        </div> -->
                    </div>

                    <!-- <div class="likes_area">
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
                    </div> -->
                    <br>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

</div>


<script src="script.js">
</script>

</body>

</html>