<?php


session_start();
try {

    if (!file_exists('../connection-pdo.php' ))
        throw new Exception();
    else
        require_once('../connection-pdo.php' ); 
		
} catch (Exception $e) {

	$_SESSION['msg'] = 'There were some problem in the Server! Try after some time!';

	header('location: ../../admin/product-list.php');

	exit();
	
}

if (!isset($_POST['name']) || !isset($_POST['desc'])) {

	$_SESSION['msg'] = 'Invalid POST variable keys! Refresh the page!';

	header('location: ../../admin/product-list.php');

	exit();
}

$regex = '/^[(A-Z)?(a-z)?(0-9)?\-?\_?\.?\s*]+$/';


if (!preg_match($regex, $_POST['name']) || !preg_match($regex, $_POST['desc'])) {

	$_SESSION['msg'] = 'Invalid Inputs!';

	header('location: ../../admin/product-list.php');

	exit();

} else {

	$name = $_POST['name'];
	$desc = $_POST['desc'];
	$category = $_POST['category'];

	$sql = "INSERT INTO products(cat_id,fname,description) VALUES(?,?,?)";
    $query  = $pdoconn->prepare($sql);
    if ($query->execute([$category, $name, $desc])) {

    	$_SESSION['msg'] = 'Product Added!';

		header('location: ../../admin/product-list.php');
    	
    } else {

    	$_SESSION['msg'] = 'There were some problem in the server! Please try again after some time!';

		header('location: ../../admin/product-list.php');

    }


}