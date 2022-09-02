<?php
require_once '../../db_connection.php';

session_start();
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
    $_SESSION['already_li'] = true;
    header('Location: ../adminhomepage.php');
}

$user = strtolower(trim($_POST['Username']));
$pass = trim($_POST['Password']);

if (empty($user) || empty($pass)) {
    $_SESSION['loggin_err'] = true;
    header('Location: ../adminlogin.php');
    $db = null;
    exit();
}
$query = $db->prepare('SELECT Password FROM admin WHERE Username = :user');
$query->bindParam(':user', $user);

$query->execute();
$result = $query->fetch();

if (!$result) {
    $_SESSION['no_user'] = true;
    header('Location: ../adminlogin.php');
    $db = null;
    exit();
} else if ($pass == $result['Password']) {
    $_SESSION['logged_in'] = true;
    $_SESSION['user'] = $user;
    $_SESSION['new_log'] = true;
    header('Location: ../adminhomepage.php');
} else {
    $_SESSION['wrong_pass'] = true;
    header('Location: ../adminlogin.php');
}
$db = null;
exit();
