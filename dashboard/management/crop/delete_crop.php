<?php
	require  "../../../config/connection.php";
	$cropID=$_GET["cropID"];
	mysqli_query($link, "DELETE FROM crops_table WHERE cropID=$cropID");
	header('Location: ../../../crop');
?>

<?php include '../../../template/header.php'; ?>