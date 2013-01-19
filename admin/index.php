<?php 

require '../bets.php';
$data = array();

if ( $_SERVER['REQUEST_METHOD']=='POST') {
	$title = $_POST['title'];
	$name1 = $_POST['name1'];
	$name2 = $_POST['name2'];
	$amount = $_POST['amount'];

	if ( empty($title) || empty($name1) || empty($name2) || empty($amount) ) {
		$data['status'] = "Please fill out the form completely.";
	} else {
		iBetter\DB\query(
			"INSERT INTO posts(title,name1,name2,amount) VALUES(:title,:name1,:name2,:amount)",
			array('title' => $title, 'name1' => $name1, 'name2' => $name2, 'amount' => $amount),
			$conn);

		$data['status'] = 'Your bet has been placed!';

	}
}

view('admin/create', $data);