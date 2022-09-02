<?php
require_once '../../db_connection.php';
session_start();

$Question = $_POST['Question'];
$Choice1 = $_POST['Choice1'];
$Choice2 = $_POST['Choice2'];
$Choice3 = $_POST['Choice3'];
$Choice4 = $_POST['Choice4'];
$Answer = $_POST['Answer'];

if (empty($Question) || empty($Choice1) || empty($Choice2) || empty($Choice3) || empty($Choice4) || empty($Answer)) {
    $_SESSION['reg_err'] = true;
    header('Location: ../insert_question.php');
    $db = null;
    exit();
}

$query = $db->prepare("INSERT INTO questions VALUES (:Question, :Choice1, :Choice2, :Choice3, :Choice4, :Answer)");
$query->bindParam(':Question', $Question);
$query->bindParam(':Choice1', $Choice1);
$query->bindParam(':Choice2', $Choice2);
$query->bindParam(':Choice3', $Choice3);
$query->bindParam(':Choice4', $Choice4);
$query->bindParam(':Answer', $Answer);

if ($query->execute()) {
    $_SESSION['insert_success'] = true;
    header('Location: ../adminhomepage.php');
} else {
    $_SESSION['insert_error'] = true;
    header("Location: ../insert_question.php");
}
$db = null;
exit();
