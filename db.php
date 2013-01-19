<?php namespace iBetter\DB;

require 'config.php';

function connect( $config ) {
	//return pdo connection
	try {
		$conn = new \PDO( 'mysql:host=localhost;dbname=' . $config['DB_DB'],
			$config['DB_USERNAME'],
			$config['DB_PASSWORD']
		);

		$conn->setAttribute( \PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION );

		return $conn;

	} catch( Exception $e ) {
		return false;
	}
}

function query( $query, $bindings, $conn ) {
	$stmt = $conn->prepare( $query );
	$stmt->execute($bindings);
	return ($stmt->rowCount()>0) ? $stmt : false;
}

function get( $tableName, $conn, $limit = 10)
{
	try {
		$result =  $conn->query( "SELECT * FROM $tableName ORDER BY id DESC LIMIT $limit" );

		return ( $result->rowCount() > 0 )
			? $result
			: false;
	} catch( Exception $e ) {
		return false;
	}
}

function get_by_id($id,$conn)
{
	$query = query(
		'SELECT * FROM bets WHERE id = :id LIMIT 1',
		array('id' => $id),
		$conn
	);

	if ( $query ) {
		return $query -> fetchAll();
	} 
}