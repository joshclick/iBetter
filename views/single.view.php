<a href="<?= $bet['payLink']; ?>">
    <div class="bet_body" >
        	<div class = "L_pic"> <img class = "noborder" src="Images/home.gif" alt="Picture" width="100" height="150"> </div>
        	<div id = "cash">$<?= $bet['amount'];?></div>
        	<div class = "R_pic"> <img class = "noborder" src="Images/home.gif" alt="Picture" width="100" height="150"> </div>
        	<br /> <div class= "team"><?= $bet['team1'];?> </div> <span>vs.</span> <div class="name"><?= $bet['team2']; ?> </div>
        	<br /> <div class= "name"><?= $bet['name1']; ?></div> <span>vs.</span><div class="name"><?= $bet['name2']; ?></div>
    </div>
</a>

<a href="index.php">Back</a> 