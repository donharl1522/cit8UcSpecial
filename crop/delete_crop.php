<?php
	require  "../config/connection.php";
	$cropID=$_GET["cropID"];
	mysqli_query($link, "DELETE FROM crops_table WHERE cropID=$cropID");
?>

<?php include 'template/header.php'; ?>

<script type="text/javascript">
	window.location="crop.php"
</script>