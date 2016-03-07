<?php

    $mysqli = new mysqli("mysql.eecs.ku.edu", "aevans", "kyloRENis53", "aevans");
    echo "Here are the Posts rows that you deleted:<br>";
    /* check connection */
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }

$i =1;

  while($i <= 300)// while loop runs as long as Posts is long
  {

    if(isset($_POST['check'.$i.'']))
    {
      $query = "DELETE FROM Posts WHERE post_id = '".$i."'";
      if($result = $mysqli->query($query)) //If something is returned
      {
        echo "<br>Post_id ".$i." has been deleted.<br>";

      }
    }

    $i++;
  }


$result->free();
$result1->free();

$mysqli->close();


 ?>
