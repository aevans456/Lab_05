<?php

$sel = $_POST["sel"];
echo "This is the post of author ".$sel.": <br><br>";
$mysqli = new mysqli("mysql.eecs.ku.edu", "aevans", "kyloRENis53", "aevans");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


$query = "SELECT content FROM Posts WHERE author_id =".$sel.";";
//$query = "INSERT INTO Users(user_id) VALUES('41223');";
echo '<table id ="t" style = " background-color:#6666ff" border="1"  >';

if($result = $mysqli->query($query)) //If something is returned
{
 while ($row = $result->fetch_row()) { //As long as there is data in the returned array
   echo "<tr><td>".$row[0]."</td></tr>"; //Print out the first column in the current row. If you have more than one column, you will need to access them using 0, 1, 2, etc.
 }
$result->free();
}



  $mysqli->close();




?>
