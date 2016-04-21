<?php
	session_start();
	include_once("db.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Blog</title>
</head>
<body>
<?php

	require_once("nbbc/nbbc.php");

	$bbcode = new BBCode;

	$sql = "SELECT * FROM blog_tbl ORDER BY id DESC";

	$res = mysqli_query($db, $sql) or die(mysqli_error());

	$post = "";

	if(mysqli_num_rows($res) > 0) {
		while($row = mysqli_fetch_assoc($res)) {
			$id = $row['id'];
			$title = $row['title'];
			$content = $row['content'];
			$author = $row['author'];
			$date = $row['published_date'];

			$admin = "<div><a href='delete.php?pid=$id'>Delete</a>&nbsp;<a href='edit.php?pid=$id'>Edit</a></div>";

			$output = $bbcode->Parse($content);

			$post .= "<div><h2><a href='view_post.php?pid=$id'>$title</a></h2><h3>$date</h3><p>$output</p>$admin<hr/></div>";
		}

		echo $post;
	} else {
		echo "There are no posts to display";
	}
?>
<p><a href="post.php" target="blank">Post</a></p>

</body>
</html>