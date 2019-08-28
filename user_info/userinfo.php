<!DOCTYPE html>
<html>
  <head>
    
	
	<style>
    header{
	display: block;
	margin-bottom: 12px;
}

  .center {
    margin: auto;
    width: 60%;
   
    padding: 10px;
   }


h1{
	color:#80bfff;
	font-size:64px;
	font-weight:normal;
	margin-bottom: 12px;	
	line-height:1;
	text-shadow:2px 2px 0 rgba(22,22,22,0.5);
}

h2{
	color: #202020;
	font-size: 34px;
	font-weight: normal;
	text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.1);
	padding: 15px 0;
}
	</style>
	
	
	
  </head>
  <body background="userinfo.jpg">
      <div class="center">
      <h1><center>User Information</center></h1>
        </div>
		<div class="center">

        <h2><center>
        <?php
       $ename = $_GET['varname'];

  
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "dbtest";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT userId, userName, userEmail FROM users WHERE userEmail = '$ename'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        echo "Name   : " . $row["userName"]. "<br>";
		echo "Email  : " . $row["userEmail"]. "<br>";
		echo "<br>";
		echo "<br>";
    }
} else {
    echo "database not working";
}
$conn->close();
	
?>

        </center></h2>

      </div>

 </body>
</html>