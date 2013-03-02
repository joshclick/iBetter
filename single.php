<?php
require 'bets.php';
use iBetter\DB;

$bet = DB\get_by_id($_GET["id"],$conn);
$file = file_get_contents("http://espn.go.com/nfl/team/_/name/{$bet['team1']}" );
$boxScoreDiv= explode('<div class="scoring', $file);
$boxScoreLine= explode('<a', $boxScoreDiv[1]);
$boxScoreSection= explode('href="',$boxScoreLine[4]);
$boxScoreLink= explode('">', $boxScoreSection[1]);
$boxScoreLink= "http://espn.go.com$boxScoreLink[0]";


iBetter\DB\query1("UPDATE  `iBetter`.`bets` SET  `bets`.`boxLink` = '".$boxScoreLink." ' WHERE  `bets`.`id` =$bet[id] ",
	$conn);
		

$bet = DB\get_by_id($_GET['id'],$conn);


if ( $bet ) {
	$bet = $bet[0];

	view('single', array (
		'bet' => $bet)
	);
} else {
	header("Location: index.php");
}