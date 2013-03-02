<?php
$host 	= "localhost";
$db	= "iBetter";
$user	= "root";
$pass	= "senorpoopsalot96";

$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);

$sql = "SELECT * FROM books";
$q	 = $conn->query($sql) or die("failed!");
while($r = $q->fetch(PDO::FETCH_ASSOC)){
  echo $r['title'];
}


?>