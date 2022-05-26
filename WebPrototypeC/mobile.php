<?php
	include "connection.php";
	$name=$_POST["name"];
	$area=$_POST["area"];
	$production=$_POST["production"];
	$productivity=$_POST["productivity"];

	$sqli_query="insert into maintable values('$name', '$area', '$production', '$productivity');"

	