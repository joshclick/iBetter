<!DOCTYPE html>
<html language = "en">
<head> 
	<!-- Page Information --> 
	<meta name = "charset" content ="UTF-8">
	<title> IBetter </title> 
	<!-- <link rel="icon" type="image/png" href="Images/favicon.ico" />  LINK FOR THE FAVICON-->
    <!-- <link rel="shortcut icon" href="Images/favicon.ico" /> Short Cut Icon -->
    <link href="style.css" rel="stylesheet" type="text/css"> <!-- Style Sheet I haven't create yet -->

</head> 
<body>
<div id = "main">
<div id = "container">

	<!--Logo Image I want it to be around W: 818 & H:150-->
	<img src="logo.jpg" alt="Logo" width="818" height="150"> 
	
	<!--Navigation--> 
	<nav>
		<ul>
		<li><a href="index.php"><div class = nav_text> HOME </div></a></li>
		<li><a href="/admin/"><div class = nav_text> BET </div></a></li>
		<li><a href="about.html"><div class = nav_text> ABOUT </div></a></li>	
	</ul>
	</nav>
	
	<!--Scrolling-->
	<h1>The Wall of Bets</h1>
		<!-- PHP -->
		<?php foreach($bets as $bet) : ?>
       	<article class = "boxes">
        	<h2><?= $bet['title']; ?></h2>
            <div class="bet_body">
            	<div class = "L_pic"> <img class = "noborder" src="Images/home.gif" alt="Picture" width="100" height="150"> </div>
            	<div id = "cash"> - 500 <?= $bet['amount'];?> - </div>
            	<div class = "R_pic"> <img class = "noborder" src="Images/home.gif" alt="Picture" width="100" height="150"> </div>
            	<br /> <div class= "team">TEAM1<?= $bet['team1'];?> </div> <span>vs.</span> <div class="name">TEAM3<?= $bet['team2']; ?> </div>
            	<br /> <div class= "name">DUDE1 <?= $bet['name1']; ?></div> <span>vs.</span><div class="name">DUDE2  <?= $bet['name2']; ?></div>
                <!--<a href="single.php?id=<?= $bet['id']; ?>"> Edit </a>-->
                
			</div>
       </article>
	<?php endforeach ?>
	
</div> <!-- End of Containter  -->	
</div> <!-- Main Page ID -- >
</body>
</html>
