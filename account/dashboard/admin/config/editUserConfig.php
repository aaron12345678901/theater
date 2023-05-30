<?php
session_start();
include '../../../../account/auth/dbConfig.php';

$uid = $_GET['uid'];

$users = $conn->prepare('UPDATE 
users SET username=?, email=? WHERE id= '. $uid .'
     
');
$users->bind_param('ss', $_POST['username'], $_POST['email']);
$users->execute();

header("Location: http://localhost/theater/a/allUsers");

?>
