<?php
	require "../config/connection.php";
	$id=$_GET["id"];
	mysqli_query($link, "DELETE FROM maintable WHERE id=$id");
    header('Location: ../crop-production');
?>

<?php include 'template/header.php'; ?>