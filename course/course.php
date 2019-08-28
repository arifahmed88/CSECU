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
    border: 2px solid #73AD21;
    padding: 10px;
   }


h1{
	font-size:45px;
	font-weight:normal;
	margin-bottom: 12px;	
	line-height:1;
	text-shadow:2px 2px 0 rgba(22,22,22,0.5);
}

h2{
	color: #202020;
	font-size: 22px;
	font-weight: normal;
	text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.1);
	padding: 15px 0;
}
	</style>
	
	
	
  </head>
  <body bgcolor="#E6E6FA">
      <div class="center">
      <h1>Course Information</h1>
        </div>
		<div class="center">

        <h2>
        <?php

  
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "dbtest";


$conn = new mysqli($servername, $username, $password, $dbname);

$var = $_POST['query'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM course WHERE (`semister` LIKE '%".$_POST['query']."%') OR (`courseno` LIKE '%".$_POST['query']."%')";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        echo "semester         : " . $row["semister"]. "<br>";
        echo "Course No        : " . $row["courseno"]. "<br>";
		echo "Course Title     : " . $row["coursetitle"]. "<br>";
		echo "Credits          : " . $row["credit"]. "<br>";
		echo "Hours/Week       : " . $row["hours"]. "<br>";
		echo "Recommended Books: " . $row["books"]. "<br>";
		echo "<br>";
		echo "<br>";
    }
} else {
    echo "There is no data in database";
}
$conn->close();
	
?>

        </h2>

      </div>

 </body>
</html>