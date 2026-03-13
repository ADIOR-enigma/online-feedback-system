<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit();
}

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');

if ($name === '' || $email === '' || $message === '') {
    header('Location: index.php?status=error');
    exit();
}

$stmt = $conn->prepare('INSERT INTO feedback (name, email, message) VALUES (?, ?, ?)');
$stmt->bind_param('sss', $name, $email, $message);

if ($stmt->execute()) {
    header('Location: index.php?status=success');
} else {
    header('Location: index.php?status=error');
}

$stmt->close();
$conn->close();
exit();
?>
