<?php
session_start();

if (!isset($_SESSION["username"]) || empty(trim($_SESSION["username"]))) {
	header("location: ./login.php?ret=". $_SERVER["PHP_SELF"]);
}
?>
