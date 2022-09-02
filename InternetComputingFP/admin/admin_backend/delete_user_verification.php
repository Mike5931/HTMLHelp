<?php
require_once '../../db_connection.php';
session_start();

$user = $_POST['Username'];

if (empty($user)) {
    $_SESSION['reg_err'] = true;
    header('Location: ../manage_users.php');
    $db = null;
    exit();
}

$query = $db->prepare('DELETE FROM users WHERE Username = :user');
$query->bindParam(':user', $user);

if ($query->execute()) {
    $_SESSION['del_success'] = true;
    header('Location: ../adminhomepage.php');
} else {
    $_SESSION['del_fail'] = true;
    header("Location: ../mangae_users.php");
}

$db = null;
exit();
