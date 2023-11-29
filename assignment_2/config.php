<?php

session_start();

$host = "host.docker.internal";
$username = "root";
$password = "root";
$database = "assignment_2";

$uploaddir = "uploads/";

// Establish database connection 
$mysqli = new mysqli($host, $username, $password, $database);

// Check for connection errors
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

function check_is_authenticated()
{
    if (!isset($_SESSION["user_id"])) {
        return false;
    } else {
        return true;
    }
}

function block_if_not_authenticated()
{
    if (!check_is_authenticated()) {
        header("Location: /login.php");
        exit();
    }
}

function block_if_not_admin()
{
    if (!check_is_admin()) {
        header("Location: /login.php");
        exit();
    }
}

function check_is_admin()
{
    if (!isset($_SESSION["user_id"]) || !isset($_SESSION["user_level"]) || $_SESSION["user_level"] != "admin") {
        return false;
    } else {
        return true;
    }
}
