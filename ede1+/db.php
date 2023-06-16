<?php
$sname = "";
$unmae = "";
$pw = "";

$db_name = "";

$conn = mysqli_connect($sname, $unmae, $pw, $db_name);
$conn->query("set names 'utf8'");