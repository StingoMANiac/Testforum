
<?php
  require_once 'connection.php';
  $link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));

  if ((isset($_POST["user_name"]))&&(isset($_POST["title"]))&&(isset($_POST["text"]))) {
    $user_name = $_POST["user_name"];
    $title = $_POST["title"];
    $text = $_POST["text"];

    $post_query ="INSERT INTO testforum (poster, title, text) VALUES ('$user_name', '$title', '$text')";
    $result = mysqli_query($link, $post_query) or die("Ошибка " . mysqli_error($link)); 
  }
  mysqli_close($link);

?>

<!DOCTYPE HTML>
<html>

<head>
  <meta charset="utf-8">
  <title>Forum Page</title>
  <link rel="stylesheet" type="text/css" href="Style/style.css">
</head>

<?php
  require_once 'connection.php';
  $link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
  $show_query ="SELECT * FROM testforum";
  $result = mysqli_query($link, $show_query);
  $rows = mysqli_num_rows($result);

  for ($i=1; $i<=$rows; $i++) {
    $row = mysqli_fetch_row($result);
    echo 

    "<body>
  <div class='main_wraper'>
    <div class='post_wraper'>
      <div class='user_wraper'>
        <div class='user_img'>
          <img class='user_img' src='' alt=''>
        </div>
        <div class='user_info'>
          <h4 class='user_name' style='text-align: center; vertical-align: top;'>$row[1]</h4>
          <ul>
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </div>
      </div>
      <div class='msg_wrpaer'>
        <div class='msg_title'>
          <p>$row[2]</p>
        </div>
        <div class='text_wraper'>
          <div class='text'>
            <p>$row[4]</p>
          </div>
          <div class='text_date'>
            <p></p>
          </div>
        </div>
        <div class='answer_button'>
        <form method='post' action='forum.php'>
          <input class='button' type='submit' value='Answer'>
        </form>
      </div>
      </div>    
    </div>";

  } 
      mysqli_close($link);
  
  ?>

    <div class="new_post_button">
      <form method="post" action="newpost.php">
        <input class="button" type="submit" value="New post">
      </form>
  </div>
</body>

</html>