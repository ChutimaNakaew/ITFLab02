<?php

$conn = mysqli_connect('63070039itflab02.mysql.database.azure.com', 'chutima@63070039itflab02', 'Fah931755', 'ITFLab', 3306);
$sql = 'SELECT * FROM guestbook WHERE ID = '.$_GET['ID'].'';
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Comment Form</title>
</head>
<body>
  <form action = "upload.php" method = "post">
    <input type="text" name="ID" value="<?php echo $row['ID'] ?>">
    Name:<br>
    <input type="text" name = "name" id="idName" value="<?php echo $row['name'];?>" placeholder="Enter Name"><br>
    Comment:<br>
    <textarea rows="10" cols="20" name = "comment" id="idComment" placeholder="Enter Comment"><?php echo $row['comment'];?></textarea><br>  
    Link:<br>
    <input type="text" name = "link" id="idLink" value="<?php echo $row['link'];?>" placeholder="Enter Link"> <br><br>
    <button type="submit">SAVE</button>
  </form>
</body>
</html>
