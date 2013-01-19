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
<div id = "main">
    <a href="single.php?id=<?= $bet['id']; ?>">
        <div class="bet_body" >
        	<div class = "L_pic"> <img class = "noborder" src="Images/home.gif" alt="Picture" width="100" height="150"> </div>
        	<div id = "cash">$<?= $bet['amount'];?></div>
        	<div class = "R_pic"> <img class = "noborder" src="Images/home.gif" alt="Picture" width="100" height="150"> </div>
        	<br /> <div class= "team"><?= $bet['team1'];?> </div> <span>vs.</span> <div class="name"><?= $bet['team2']; ?> </div>
        	<br /> <div class= "name"><?= $bet['name1']; ?></div> <span>vs.</span><div class="name"><?= $bet['name2']; ?></div>
        </div>
    </a>
</div>
<?php endforeach ?>