
<?php
	
	$query = "select * from posts";

	$result = mysqli_query($con, $query);

	$total_posts = mysqli_num_rows($result);

	$total_pages = ceil($total_posts / $per_page);

	echo"
		<center>
		<div class='pagination'>
		<a href='users.php?page=1'>First Page</a>
	";

	for ($i=1; $i <= $total_pages ; $i++) { 
		echo"<a href='users.php?page=$i'>$i</a>";
	}

	echo"<a href='users.php?page=$total_pages'>Last Page</a></div>";
?>