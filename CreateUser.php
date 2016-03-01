<?php
$userid = $_POST["user_id"];
if($userid == NULL || $userid =="")
{
  echo "User id must be filled out<br><br>";
}
else {
  $mysqli = new mysqli("mysql.eecs.ku.edu", "aevans", "kyloRENis53", "aevans");

  /* check connection */
  if ($mysqli->connect_errno) {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      exit();
  }
  $query = "INSERT INTO Users(user_id) VALUES('".$userid."');";

  if($result = $mysqli->query($query))//if it actually works
  {
    echo "User_id succesfully submitted";
    $result->free();
  }
  else {
    echo"User id must be unique";
  }



  $mysqli->close();
}


?>
