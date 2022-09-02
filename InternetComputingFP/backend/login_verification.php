<?php
require_once '../db_connection.php';

session_start();

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
    $_SESSION['already_li'] = true;
    header('Location: ../loginhomepage.php');
}
$user = strtolower(trim($_POST['Username']));
$pass = trim($_POST['Password']);

if (empty($user) || empty($pass)) {
    $_SESSION['login_err'] = true;
    header('Location: ../signin.php');
    $db = null;
    exit();
}

$query = $db->prepare('SELECT Password FROM users WHERE Username = :user');
$query->bindParam(':user', $user);

$query->execute();
$result = $query->fetch();

if (!$result) {
    $_SESSION['no_user'] = true;
    header('Location: ../signin.php');
    $db = null;
    exit();
} else if (password_verify($pass, $result['Password'])) {
    $_SESSION['logged_in'] = true;
    $_SESSION['user'] = $user;
    $_SESSION['new_log'] = true;
    header('Location: ../loginhomepage.php');
} else {
    $_SESSION['wrong_pass'] = true;
    header('Location: ../signin.php');
}
$db = null;
exit();
