<?php

require_once('users.txt');
$login - $_POST['Username'];
$pass - $_POST['Password'];


$sql - "INSERT INTO 'users' (Username,Password) VALUES ('$login', '$pass')";