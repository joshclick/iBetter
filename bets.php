<?php 

require 'functions.php';
require 'db.php';


$conn = iBetter\DB\connect($config);
if ( !$conn ) die('problem connecting to db.');

 ?>