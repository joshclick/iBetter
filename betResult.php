<?php

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

/*
$array[16] = substr($array[16], 50);

print_r($array);
*/