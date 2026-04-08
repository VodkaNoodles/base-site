<?php

$dsn = 'mysql:host=localhost;dbname=my_guitar_shop';
$username = 'CS351user';
$password = '';

try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
include('../view/database_error.php');
    exit();
}
?>
