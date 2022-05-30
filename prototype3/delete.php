<?php
	include "config/connection.php";
	$id=$_GET["id"];
	mysqli_query($link, "delete from maintable where id=$id");
?>

<?php include 'template/header.php'; ?>

<script type="text/javascript">
	window.location="index.php"
</script>