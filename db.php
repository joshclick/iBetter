<?php namespace iBetter\DB;

require 'config.php';
$conn;
function connect( $config ) {
	//return pdo connection
	try {
		$conn = mysql_connect("localhost",$config['DB_USERNAME'],$config['DB_PASSWORD']) or die("no way jose");
	    mysql_select_db($config['DB_DB'], $conn);
		return $conn;

	} catch(Exception $e) {
		return false;
	}
}

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

function get_by_id($id,$conn)
{
	$query = query1(
		"SELECT * FROM bets WHERE id= '$id' Limit 1 ",
		$conn);
	if ( $query ) {
	return mysql_fetch_array($query);
	} 
}