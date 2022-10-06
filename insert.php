<?php
require 'config.php';

if(isset($_POST["insert"])){
  $badword = $_POST["badword"];
  $goodword = $_POST["goodword"];

  $query = "INSERT INTO word VALUES('', '$badword', '$goodword')";
  mysqli_query($conn, $query);
  echo
  "
  <script> alert('Word Inserted Successfully'); </script>
  ";
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insert bad & good word here</title>
  </head>
  <body>
    <form class="" action="" method="post">
      Bad Word <input type="`text`" name="badword" value=""> <br>
      Good Word <input type="text" name="goodword" value=""> <br>
      <button type="submit" name="insert">Insert</button>
    </form>
  </body>
</html>
