<?php

require_once('users.txt');
$login - $_POST['Username'];
$pass - $_POST['Password'];

if (empty($login) || empty($pass)){
    echo "warning";
} else {
    
}
$sql - "INSERT INTO 'users' (Username,Password) VALUES ('$login', '$pass')";