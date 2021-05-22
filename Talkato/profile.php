<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: index.php");
  }
?>
<?php include_once "header1.php"; ?>
<?php include_once "navbar.php"; ?>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
    .navbar a,
.navbar a i {
    text-decoration: none;
}
    .navbar_right_profile {
        border-bottom: 3px solid #2d88ff;
    }

    .navbar_right_profile:hover {
        border: none;
    }

    .active_icon {
        border: none;
    }

    .active_icon i {
        color: #b8bbbf !important;
    }
    .cover_images{
        margin:10px
    }

	#cover-img{
		height: 400px;
		width: 100%;
	}#profile-img{
		position: absolute;
		top: 160px;
		left: 40px;
	}
	#update_profile{
		position: relative;
		top: -33px;
		cursor: pointer;
		left: 93px;
		border-radius: 4px;
		background-color: rgba(0,0,0,0.2);
		transform: translate(-50%, -50%);
	}
	#button_profile{
		position: absolute;
		top: 82%;
		left: 50%;
		cursor: pointer;
		transform: translate(-50%, -50%);
	}
    label{
	padding: 7px;
	display: table;
	color: #fff;
    }
    input[type="file"]{
        display: none;
    }
	body{
		background-color:rgb(50,50,50);
	}
</style>

<div class="row">
	<div class="col-sm-2">	
	</div>
	<div class="col-sm-8">
			<div>
				<div><img id='cover-img' class='img-rounded' src='php/images/cover.jpg' alt='cover'></div>
				<form action='' method='post' enctype='multipart/form-data'>

				<ul class='nav pull-left' style='position:absolute;top:10px;left:40px;'>
					<li class='dropdown'>
						<button class='dropdown-toggle btn btn-default' data-toggle='dropdown'>Change Cover</button>
						<div class='dropdown-menu'>
							<center>
							<p>Click <strong>Select Cover</strong> and then click the <br> <strong>Update Cover</strong></p>
							<label class='btn btn-info'> Select Cover
							<input type='file' name='u_cover' size='60' />
							</label><br><br>
							<button name='submit' class='btn btn-info'>Update Cover</button>
							</center>
						</div>
					</li>
				</ul>

				</form>
			</div>
			<div id='profile-img'>
				<img src='php/images/<?php echo $row['img']; ?>' alt='Profile' class='img-circle' width='180px' height='185px'>
				<form action='' method='post' enctype='multipart/form-data'>

				<label id='update_profile'> Select Profile
				<input type='file' name='u_image' size='60' />
				</label><br><br>
				<button id='button_profile' name='update' class='btn btn-info'>Update Profile</button>
				</form>
			</div><br>

