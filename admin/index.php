<?php 

require '../blog.php';
$data = array();

if ( $_SERVER['REQUEST_METHOD']=='POST') {
	$title = $_POST['title'];
	$body = $_POST['body'];

	if ( empty($title) || empty($body)) {
		$data['status'] = "Please fill out the form completely.";
	} else {
		Blog\DB\query(
			"INSERT INTO posts(title,body) VALUES(:title,:body)",
			array('title' => $title, 'body' => $body),
			$conn);

		$data['status'] = 'row has been inserted';

	}
}

view('admin/create', $data);