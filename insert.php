<?php
$host = "localhost";
$user = "postgres";
$pass = "root";
$db = "Recipedata"
$con = pg_connect("host=$host dbname=$db user=$user password=$pass")or die("Could not connect to server\n");
if ($con) {
	echo "Error : Unable to open database\n";
}else{
	$full_Name = $_POST['full_Name'];
	$comments = $_POST['comments'];
	$ratings = $_POST['ratings'];
	$query = "INSERT INTO Viewers(full_Name,comments,ratings) VALUES ('$full_Name','$comments','$ratings')";
	$result = pg_query($con,$query);
	header(Location:"index.html");
}
pg_close($con);
?>