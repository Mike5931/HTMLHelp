<?php
require_once '../../db_connection.php';
session_start();

$Username = strtolower(trim($_POST['Username']));
$Password = trim($_POST['Password']);
$Firstname = trim($_POST['LastName']);
$Lastname = trim($_POST['FirstName']);
$Email = strtolower(trim($_POST['Email']));

if (empty($Username) || empty($Password) || empty($Firstname) || empty($Lastname) || empty($Email)) {
    $_SESSION['reg_err'] = true;
    header('Location: ../admin_registration.php');
    $db = null;
    exit();
}

$query = $db->prepare("SELECT * FROM admin WHERE Username = :Username");
$query->bindParam(':Username', $Username);

$query->execute();
$result = $query->fetchAll();

if ($result) {
    $_SESSION['user_taken'] = true;
    header('Location: ../admin_registration.php');
    $db = null;
    exit();
}

$query = $db->prepare("SELECT * FROM admin WHERE Email = :Email");
$query->bindParam(':Email', $Email);

$query->execute();
$result = $query->fetchAll();

if ($result) {
    $_SESSION['email_taken'] = true;
    header('Location: ../admin_registration.php');
    $db = null;
    exit();
}
$Password = password_hash($Password, PASSWORD_DEFAULT);

$query = $db->prepare("INSERT INTO admin VALUES (:Username, :Password, :Firstname, :Lastname, :Email");
$query->bindParam(':Username', $Username);
$query->bindParam(':Password', $Password);
$query->bindParam(':Firstname', $Firstname);
$query->bindParam(':Lastname', $Lastname);
$query->bindParam(':Email', $Email);

if ($query->execute()) {
    $_SESSION['reg_success'] = true;
    $_SESSION['logged_in'] = true;
    header('Location: ../admin_manage.php');
} else {
    $_SESSION['reg_err'] = true;
    header('Location: ../admin_registration.php');
}
$db = null;
exit();
