<?php

require 'bet.php';
use iBetter\DB;

$bet = DB\get_by_id($_GET['id'],$conn);

if ( $bet ) {
	$bet = $bet[0];

	view('single', array (
		'bet' => $bet)
	);
} else {
	header("Location: index.php");
}