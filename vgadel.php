<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "uclims";

$conn = new mysqli($hostname,$username,$password,$dbname);
if($conn->connect_error) {
		    die("Connection Fail".$conn->connect_error);
		}
		$id = $_GET["sn"];
$sql = "DELETE FROM vga WHERE vga.sn = $id";
if ($conn->query($sql) == TRUE) {
    header('Location: vga.php');
} else {
         echo "<center><h2>Problem To DELETE</h2></center>";
}

?>