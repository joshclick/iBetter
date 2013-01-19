<?php

require 'bets.php';
use iBetter\DB:

$bets = DB\get('bets',$conn);
foreach($bets as $bet)
{
if($bet["id"] == /* We need to track each bet and keep it in contact with the corresponding
					event. So we have to track the bets and events together. Also we have to 
					have updates of the events to get a winner as soon as the event ends. 
					*/
$amount= $bet['amount']
}
$team1 = 'mia';
$team2 = 'hou';
$file = file_get_contents("http://espn.go.com/nfl/team/_/name/" . $team1  );
$array = explode('<li class="team-name', $file);
unset($array[0]);
for($i=1; $i<18; $i++)
{
	$array2 = explode('/', $array[$i]);
	if ($array2[7] == $team2)
	{
		$teamPlayed= $array2[7];
		$array3 = explode(">", $array2[12]);
		$result= substr($array3[5], 0,1);
		break;
	}
}
print_r($result);
$paymentLink= "https://venmo.com?txn=Pay&recipients=$winner&amount=$bet&note=won%20the%20bet";
