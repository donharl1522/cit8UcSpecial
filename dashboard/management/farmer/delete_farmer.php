<?php
	require  "../../../config/connection.php";
	$farmerID=$_GET["farmerID"];
	mysqli_query($link, "DELETE FROM farmers_table WHERE farmerID=$farmerID");

	header('Location: ../farmer');
?>

<?php include '../../../template/header.php'; ?>