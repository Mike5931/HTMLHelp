<?php
require_once '../db_connection.php';
session_start();

$user = strtolower(trim($_POST['Username']));
$pass = trim($_POST['Password']);
$firstname = trim($_POST['FirstName']);
$lastname = trim($_POST['LastName']);
$email = strtolower(trim($_POST['Email']));
$address = trim($_POST['Address']);
$city = trim($_POST['City']);
$state = trim($_POST['State']);
$zipcode = trim($_POST['ZipCode']);

if (empty($user) || empty($pass) || empty($firstname) || empty($lastname) || empty($email) || empty($address) || empty($city) || empty($state) || empty($zipcode)) {
    $_SESSION['reg_err'] = true;
    header('Location: ../register.php');
    $db = null;
    exit();
}

$query = $db->prepare("SELECT * FROM users WHERE Username = :user");
$query->bindParam(':user', $user);

$query->execute();
$result = $query->fetchAll();

if ($result) {
    $_SESSION['user_taken'] = true;
    header('Location: ../register.php');
    $db = null;
    exit();
}

$query = $db->prepare("SELECT * FROM users WHERE Email = :email");
$query->bindParam(':email', $email);

$query->execute();
$result = $query->fetchAll();

if ($result) {
    $_SESSION['email_taken'] = true;
    header('Location: ../register.php');
    $db = null;
    exit();
}

$pass = password_hash($pass, PASSWORD_DEFAULT);

$address = $address . ", " . $city . ", " . $state . " " . $zipcode;

$query = $db->prepare("INSERT INTO users VALUES (:user, :pass, :firstname, :lastname, :email, :address)");
$query->bindParam(':user', $user);
$query->bindParam(':pass', $pass);
$query->bindParam(':firstname', $firstname);
$query->bindParam(':lastname', $lastname);
$query->bindParam(':email', $email);
$query->bindParam(':address', $address);

if ($query->execute()) {
    $_SESSION['reg_success'] = true;
    $_SESSION['logged_in'] = true;
    header('Location: ../registerhomepage.php');
} else {
    $_SESSION['reg_err'] = true;
    header('Location: ../register.php');
}
$db = null;
exit();
