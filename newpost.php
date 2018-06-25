<!DOCTYPE HTML>
<html>

<head>
  <meta charset="utf-8">
  <title>New Post</title>
  <link rel="stylesheet" type="text/css" href="Style/style.css">
</head>

<body>
	<form method="post" action="forum.php">
		<p style="color:white;">Your name: <input type="text" name="user_name" required></p><br>
		<p style="color:white;">Title: <input type="text" name="title" required></p><br>
		<textarea maxlength="200" cols="50" rows="5" name="text" required></textarea><br>
		<input type="submit" value="send">
	</form>
	<form method="post" action="forum.php">
		<input type="submit" value="back">
	</form>
</body>

</html>