 <link rel="stylesheet" href="../style.css" type="text/css">
 <?php
 
require 'config.php';

use iBetter\DB;


$conn = mysql_connect("localhost",$config['DB_USERNAME'],$config['DB_PASSWORD']) or die("no way jose");
	    mysql_select_db($config['DB_DB'], $conn);
	    
function query1( $query, $conn ) 
{
     $result=mysql_query($query, $conn) or die ("Having error in execution 1 ==".mysql_error());
	return $result;
	/*$stmt = $conn->prepare( $query );
	$stmt->execute($bindings);
	return ($stmt->rowCount()>0) ? $stmt : false;*/
}

function get_by_id($id,$conn)
{
	$query = query1(
		"SELECT * FROM bets WHERE id='$id' Limit 1 ",
		$conn);
	if ( $query ) {
	return mysql_fetch_array($query);
	} 
}

$bet = get_by_id($_GET["id"],$conn);

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




    <div class="bet_body" style="cursor: pointer;" onclick='window.location="<?= $bet['payLink'] ?>";'>
<!--         	<div class = "L_pic"> <img class = "noborder" src="Images/home.gif" alt="Picture" width="100" height="150"> </div>
 -->        	<div id = "cash">$<?= $bet[amount] ?></div>
<!--         	<div class = "R_pic"> <img class = "noborder" src="Images/home.gif" alt="Picture" width="100" height="150"> </div>
 -->        <br /> <div class= "team"><?= $teams[$bet[team1]] ?> </div> <span >vs.</span> <div class="team"><?= $teams[$bet[team2]] ?> </div>
            <br /> <div class= "name"><?= $bet[name1] ?></div> <span>vs.</span><div class="name"><?= $bet[name2]?></div>
 </div>           

	
	<div id="bet_body"></div>
<button onclick="makeFrame()">Follow Bet</button>
    <script>
	function makeFrame(){	
var para= document.createElement("iframe");
para.src="<?=$bet['boxLink']?>";
   		para.style.width = 918+"px"; 
   		para.style.height = 480+"px"; 
para.sandbox = "allow-top-navigation";
var element = document.getElementById("bet_body");
element.appendChild(para);
	}
	</script>


<a href="index.php">Back</a> 
