<?php

$conn = mysqli_connect('63070039itflab02.mysql.database.azure.com', 'chutima@63070039itflab02', 'Fah931755', 'ITFLab', 3306);
$sql = 'DELETE FROM guestbook WHERE ID = '.$_GET['ID'].'';

if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

if (mysqli_query($conn, $sql)) {
    echo "Successfully."; 
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
