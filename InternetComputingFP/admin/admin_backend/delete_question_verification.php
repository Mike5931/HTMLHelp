<?php
require_once '../../db_connection.php';
session_start();

$Question = $_POST['Question'];

if (empty($Question)) {
    $_SESSION['reg_err'] = true;
    header('Location: ../manage_questions.php');
    $db = null;
    exit();
}

$query = $db->prepare('DELETE FROM questions WHERE Question = :Question');
$query->bindParam(":Question", $Question);

if ($query->execute()) {
    $_SESSION['del_success'] = true;
    header('Location: ../adminhomepage.php');
} else {
    $_SESSION['del_fail'] = true;
    header("Location: ../mangae_questions.php");
}
$db = null;
exit();
