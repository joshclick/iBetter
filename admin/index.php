<?php 

require '../bets.php';
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
		iBetter\DB\query(
			"INSERT INTO bets(name1,name2,team1,team2,amount) VALUES(:name1,:name2,:team1,:team2,:amount)",
			array( 'name1' => $name1, 'name2' => $name2, 'team1' => $team1, 'team2' => $team2, 'amount' => $amount),
			$conn);

		$data['status'] = 'Your bet has been placed!';

	}
}

view('admin/create', $data);