<?php

$conn = mysqli_connect("localhost","root","","facebook");

	$sql = "SELECT * FROM posts";
	$query = mysqli_query($conn, $sql);

	// $sql2 = "SELECT * FROM users";
	// $query2 = mysqli_query($conn, $sql2);
	$profile_image = $row['img'];
	$profile_name = $row['fname'] . " " . $row['lname'];

	if(isset($_REQUEST['sub'])){
		$content = htmlentities($_REQUEST['content']);
		$upload_image = $_FILES['upload_image']['name'];
		$image_tmp = $_FILES['upload_image']['tmp_name'];
		$random_number = rand(1, 100);

        if(strlen($content) > 250){
			echo "<script>alert('Please Use 250 or less than 250 words!')</script>";
			echo "<script>window.open('users.php', '_self')</script>";
		}else{
			if(strlen($upload_image) >= 1 && strlen($content) >= 1){
				move_uploaded_file($image_tmp, "imagepost/$random_number.$upload_image");
				$insert = "insert into posts (post_content, upload_image, post_date,profile_image,profile_name) values('$content', '$random_number.$upload_image', NOW(),'$profile_image','$profile_name')";

                $run = mysqli_query($conn, $insert);

				if($run){
					echo "<script>alert('Your Post updated a moment ago!')</script>";
					echo "<script>window.open('users.php', '_self')</script>";
				}
                exit();
			}else{
				if($upload_image=='' && $content == ''){
					echo "<script>alert('Error Occured while uploading!')</script>";
					echo "<script>window.open('users.php', '_self')</script>";
				}else{
					if($content==''){
						move_uploaded_file($image_tmp, "imagepost/$random_number.$upload_image");
						$insert = "insert into posts (post_content,upload_image,post_date,profile_image,profile_name) values (' ','$random_number.$upload_image',NOW(),'$profile_image','$profile_name')";
						$run = mysqli_query($conn, $insert);

                        if($run){
							echo "<script>alert('Your Post updated a moment ago!')</script>";
							echo "<script>window.open('users.php', '_self')</script>";
						}

						exit();
                    }else{
						$insert = "insert into posts (post_content, post_date,profile_image,profile_name) values('$content',NOW(),'$profile_image','$profile_name')";
						$run = mysqli_query($conn, $insert);

						if($run){
							echo "<script>alert('Your Post updated a moment ago!')</script>";
							echo "<script>window.open('users.php', '_self')</script>";
						}
                    }
				}
			}
		}
	}


