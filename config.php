<?php

$serverName = "cloudbit.cf";
$dBUsername = "simon";
$dBPassword = "simon";
$dBName = "authors";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName, 3306);

if (!$conn)
{
    die("Connection failed: ". mysqli_connect_error());
}