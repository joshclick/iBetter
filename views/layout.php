<!doctype html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.container { width: 900px; margin: auto; font-family:Helvetica, sans-serif;}
		form li { list-style: none; }
		form ul { padding: 0; }
		form input[type=text], form textarea { margin-bottom: 1.5em; width: 100%; }
		form textarea { height: 300px; }
		label { display: block; }
		.bet {
			position: relative;
			  margin: 6px;
			  float: left;
		}
		a {
			color: black;
			text-decoration: none;
		}
		.bet h3 {
		   position: absolute; 
   			top: 10%; 
   			left: 5%; 
  			width: 90%; 
  		}
  		.bet h3 span { 
		   color: white; 
		   line-height: 2.0em;
		   letter-spacing: -1px;  
		   background: rgb(0, 0, 0); /* fallback color */
		   background: rgba(0, 0, 0, 0.7);
		   padding: 10px; 
		}
	</style>
</head>
<body>
	<div class="container">
		<?php include($path); ?>
	</div>

	<script src="/js/jquery-1.9.0.min.js"></script>
	<script src="/js/jquery.masonry.min.js"></script>
	<script>
	  	$(function(){
		    $('#container').masonry({
	  			itemSelector: '.bet',
	  			columnWidth: 200
			});
	  	});
	</script>
</body>
</html>