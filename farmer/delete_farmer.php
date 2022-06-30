<?php
	require  "../config/connection.php";
	$farmerID=$_GET["farmerID"];
	mysqli_query($link, "DELETE FROM farmers_table WHERE farmerID=$farmerID");
?>

<?php include 'template/header.php'; ?>

<script type="text/javascript">
	window.location="farmers.php"
</script>