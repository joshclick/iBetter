
<link rel="stylesheet" href="../style.css" type="text/css"> 
<?php

require 'config.php';

use iBetter\DB;

$conn = mysql_connect("localhost",$config['DB_USERNAME'],$config['DB_PASSWORD']) or die("no way jose");
	    mysql_select_db($config['DB_DB'], $conn);
	    
	    function query1( $query, $conn ) {
     $result=mysql_query($query, $conn) or die ("Having error in execution 1 ==".mysql_error());
	return $result;
	/*$stmt = $conn->prepare( $query );
	$stmt->execute($bindings);
	return ($stmt->rowCount()>0) ? $stmt : false;*/
}

function get( $tableName, $conn, $limit=5)
{
	try {
		$result = query1("SELECT * FROM $tableName ORDER BY id DESC LIMIT $limit", $conn);
          if($result === FALSE)
      				return FALSE;
      	   return $result;
		//return ( $result->rowCount() > 0 ) ? $result : false;
	} catch( Exception $e ) {
		return $e;
	}
}

$bets = get('bets',$conn,$limit=5);

$teams = array(
      'buf'                => 'Buffalo Bills',
      'nyj'                                => 'New York Jets',
      'ne'                                        => 'New England Patriots',
      'mia'                                => 'Miami Dolphins',
      'dal'                                => 'Dallas Cowboys',
      'wsh'                                => 'Washington Redskins',
      'nyg'                                => 'New York Giants',
      'phi'                                => 'Philadelphia Eagles',
      'den'                                => 'Denver Broncos',
      'kc'                                        => 'Kansas City Chiefs',
      'oak'                                => 'Oakland Raiders',
      'sd'                                        => 'San Diego Chargers',
      'ari'                                => 'Arizona Cardinals',
      'sf'                                        => 'San Francisco 49ers',
      'sea'                                => 'Seattle Seahawks',
      'stl'                                => 'Saint Louis Rams',
      'cin'                                => 'Cincinnati Bengals ',
      'pit'                                => 'Pittsburgh Steelers',
      'cle'                                => 'Cleveland Browns',
      'bal'                                => 'Baltimore Ravens',
      'chi'                                => 'Chicago Bears',
      'det'                                => 'Detroit Lions',
      'gb'                                        => 'Green Bay Packers',
      'min'                                => 'Minnesota Vikings',
      'hou'                                => 'Houston Texans',
      'ind'                                => 'Indianapolis Colts',
      'jac'                                => 'Jacksonville Jaguars',
      'ten'                                => 'Tennessee Titans',
      'atl'                                => 'Atlanta Falcons',
      'no'                                        => 'New Orleans Saints',
      'car'                                => 'Carolina Panthers',
      'tb'                                        => 'Tampa Bay Buccaneers');
?>

<div id = "main">
<div id = "constructor">

<!--Logo Image I want it to be around W: 818 & H:150-->
<!-- <img src="logo.jpg" alt="Logo" width="918" height="170"> -->

<!--Navigation--> 
<nav>
	<ul>
	<li><a href="http://localhost/~rocketshot6/iBetter/index.php"><div class = nav_text> HOME </div></a></li>
	<li><a href="http://localhost/~rocketshot6/iBetter/create.php"><div class = nav_text> BET </div></a></li>
	<li><a href="http://localhost/~rocketshot6/iBetter/about.html"><div class = nav_text> ABOUT </div></a></li>	
	</ul>
</nav>
<!--Scrolling-->
<h1>The Wall of Bets</h1>
	<!-- PHP -->

	<?php while($bet=mysql_fetch_object($bets)) { ?>
    <div class="bet_body" style="cursor: pointer;" onclick='window.location="single.php?id=<?= $bet->id; ?>";'>
<!--         	<div class = "L_pic"> <img class = "noborder" src="Images/home.gif" alt="Picture" width="100" height="150"> </div>
 -->        	<div id = "cash">$<?= $bet->amount ?></div>
<!--         	<div class = "R_pic"> <img class = "noborder" src="Images/home.gif" alt="Picture" width="100" height="150"> </div>
 -->        <br /> <div class= "team"><?= $teams[$bet->team1] ?> </div> <span>vs.</span> <div class="team"><?= $teams[$bet->team2] ?> </div>
            <br /> <div class= "name"><?= $bet->name1 ?></div> <span>vs.</span><div class="name"><?= $bet->name2 ?></div>
 </div>           

    <?php } ?>
</div> <!-- Constructor ID -->
</div> <!-- Main ID --> 
