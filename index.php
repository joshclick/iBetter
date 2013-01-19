<?php

require 'bet.php';
use iBetter\DB;

$bets = DB\get('bets',$conn);

view('index', array (
	'bets' => $bets)
);