<?php 

function view($path, $data = null)
{
	if ( $data ) {
		extract($data);
	}

	$path = $path . '.view.php';
	include 'views/layout.php';
}

function check_win($bet) {
	$team1 = $bet['team1'];
	$team2 = $bet['team2'];
	$file = file_get_contents("http://espn.go.com/nfl/team/_/name/" . $team1 );
	$array = explode('<li class="team-name', $file);
	for($i=1; $i<18; $i++)
	{
		$array2 = explode('/', $array[$i]);
		if ($array2[7] == $team2)
		{
			$array3 = explode(">", $array2[12]);
			$result= substr($array3[5], 0,1);
			if ($result == 'W') {
				return 1;
			} elseif ($result == 'L') {
				return -1;
			} elseif ($result == 'T') {
				return 0;
			} else {
				return 2;
			}
		}
	}
	//print_r($result);
}