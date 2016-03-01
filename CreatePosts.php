<?php
$name = $_POST["name"];
$post = $_POST["post"];

if($name == NULL || $name ==""||$post == NULL || $post == "")
{
  echo "Name and post must be filled out<br><br>";
}
else {
  $mysqli = new mysqli("mysql.eecs.ku.edu", "aevans", "kyloRENis53", "aevans");

  /* check connection */
  if ($mysqli->connect_errno) {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      exit();
  }
  $query = "INSERT INTO Posts(author_id, content) VALUES('".$name."','".$post."');";

  if($result = $mysqli->query($query))//if it actually works
  {
    echo "Post succesfully submitted";
    $result->free();
  }
  else {
    echo"author id must be unique";
  }



  $mysqli->close();
}


?>
