<!DOCTYPE html>
<html>
  <head>
	<style>
h1{
	 color: #264d00;
	 font-size:40px;
	font-weight:normal;
	margin-bottom: 12px;	
	line-height:1;
	text-shadow:2px 2px 0 rgba(22,22,22,0.5);
}
h2{
	color: #202020;
	font-size: 20px;
	font-weight: normal;
	text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.1);
	padding: 15px 0;
}
	</style>
	
	
	
  </head>
  <body background='ar.jpg'>
      <div class="center">
      <h1><center>Teachers Information</center></h1>
        </div>
		<div class="center">

        <h2><center>
        <?php

  
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "dbtest";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT tname, fieldofinterest, designation, phone, email, image FROM teacher";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    while($row = $result->fetch_assoc()) {
		
		?> <img src="<?php echo $row["image"]; ?>" height="200" width="200"> <?php 
		
		echo "<br>";
        echo "Name             : " . $row["tname"]. "<br>";
		echo "Designation      : " . $row["designation"]. "<br>";
		echo "Field of Interest: " . $row["fieldofinterest"]. "<br>";
		echo "Email ID         : " . $row["phone"]. "<br>";
		echo "Phone Number     : " . $row["email"]. "<br>";
		echo "<br>";
		echo "<br>";

    }
} else {
    echo "There is no data in database";
}
   echo "</table>";
$conn->close();
	
?>

        </center></h2>

      </div>

 </body>
</html>