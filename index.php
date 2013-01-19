<?php

require 'bets.php';
use iBetter\DB;

$posts = DB\get('bets',$conn);

view('index', array (
	'bets' => $posts)
);