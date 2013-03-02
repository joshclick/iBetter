<?php 

require 'bets.php';
use iBetter\DB;
$conn = mysql_connect("localhost",$config['DB_USERNAME'],$config['DB_PASSWORD']) or die("no way jose");
mysql_select_db($config['DB_DB'], $conn);
$data = array();


if ( $_SERVER['REQUEST_METHOD']=='POST') {
	$name1 = $_POST['name1'];
	$name2 = $_POST['name2'];	
	$team1 = $_POST['team1'];
	$team2 = $_POST['team2'];
	$amount = $_POST['amount'];

	if ( empty($name1) || empty($name2) || empty($team1) || empty($team2) || empty($amount) ) {
		$data['status'] = "Please fill out the form completely.";
	} else {
	     DB\query1("INSERT INTO bets (name1, name2, team1, team2, amount, active) VALUES ('".$name1."','". $name2 ."', '". $team1 ."', '". $team2 ."', '". $amount."', '1')", $conn);
		$data['status'] = 'Your bet has been placed!';

	}
}

view('create', $data);