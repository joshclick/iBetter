<!doctype html>
<html>
<head>

	<title></title>
	<style type="text/css">
		body {
			background-size: 100% auto;
		}
		.container { width: 90%; margin: auto; font-family:Helvetica, sans-serif;}
		form li { list-style: none; }
		form ul { padding: 0; }
		form input[type=text], form textarea { margin-bottom: 1.5em; width: 100%; }
		form textarea { height: 300px; }
		label { display: block; }
		.betBox {
			position: relative;
			  margin: 6px;
			  float: left;
		}
		a {
			color: black;
			text-decoration: none;
		}
		.betBox h3 {
		   position: absolute; 
   			top: 10%; 
   			left: 5%; 
  			width: 90%; 
  		}
  		.betBox h3 span { 
		   color: white; 
		   line-height: 2.0em;
		   letter-spacing: -1px;  
		   background: rgb(0, 0, 0); /* fallback color */
		   background: rgba(0, 0, 0, 0.7);
		   padding: 10px; 
		}
	</style>
</head>
<body id="bg">
	<div class="container">
		<?php include($path); ?>
	</div>

	<script src="/js/jquery-1.9.0.min.js"></script>
	<script src="/js/jquery.masonry.min.js"></script>
	<script>
	  	$(function(){
		    $('.container').masonry({
	  			itemSelector: '.bets',
			});
	  	});
	</script>
		<script type="text/javascript">  
		window.onload=function(){  
		   var thediv=document.getElementById("bg");  
		   var imgarray = new Array("http://www.djc.com/stories/images/20101217/NFL_Stadium_Gensler_big.jpg", "http://c1038.r38.cf3.rackcdn.com/group1/building4462/media/LA_NFL_Stadium_Shot_1.jpg", "http://c1038.r38.cf3.rackcdn.com/group1/building4462/media/LA_NFL_Stadium_Shot_2.jpg");  
		   var spot =Math.floor(Math.random()* imgarray.length);  
		   thediv.style.background="url("+imgarray[spot]+")";  
		}  
	</script>  
</body>
</html>