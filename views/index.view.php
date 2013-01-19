 <?php
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
<img src="logo.jpg" alt="Logo" width="918" height="170"> 

<!--Navigation--> 
<nav>
	<ul>
	<li><a href="index.php"><div class = nav_text> HOME </div></a></li>
	<li><a href="http://localhost/~josh/ibetter/admin/"><div class = nav_text> BET </div></a></li>
	<li><a href="about.html"><div class = nav_text> ABOUT </div></a></li>	
</ul>
</nav>

<!--Scrolling-->
<h1>The Wall of Bets</h1>
	<!-- PHP -->

	<?php foreach($bets as $bet) : ?>
    <div class="bet_body" style="cursor: pointer;" onclick='window.location="single.php?id=<?= $bet['id']; ?>";'>

<!--         	<div class = "L_pic"> <img class = "noborder" src="Images/home.gif" alt="Picture" width="100" height="150"> </div>
 -->        	<div id = "cash">$<?= $bet['amount'];?></div>
<!--         	<div class = "R_pic"> <img class = "noborder" src="Images/home.gif" alt="Picture" width="100" height="150"> </div>
 -->        <br /> <div class= "team"><?= $teams[$bet['team1']];?> </div> <span>vs.</span> <div class="team"><?= $teams[$bet['team2']]; ?> </div>
            <br /> <div class= "name"><?= $bet['name1']; ?></div> <span>vs.</span><div class="name"><?= $bet['name2']; ?></div>
 </div>           

    <?php endforeach ?>
</div> <!-- Constructor ID -->
</div> <!-- Main ID --> 
