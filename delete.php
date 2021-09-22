<?php
	include 'crud.php';
	echo $id = $_GET['id'];

	$result = $database->delete($id);
	if($result)
        {
		echo "delete success";
		header('location:index.php');
	}
        else
        {
		echo "not delete";
	}
?>