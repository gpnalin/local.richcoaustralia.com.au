<?php
if ($_GET['id']) {
	$file = $_GET['id'];
	header("Content-Description: File Transfer"); 
	header("Content-Type: application/octet-stream"); 
	header('Content-Disposition: attachment; filename="'.basename($file).'"');
	readfile($file);
}
else {
	header('Location: http://www.mywebsite.com/error/');
}
?>