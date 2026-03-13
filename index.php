<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Feedback Form</h2>

        <?php if (isset($_GET['status']) && $_GET['status'] === 'success'): ?>
            <p class="notice success">Feedback submitted successfully.</p>
        <?php elseif (isset($_GET['status']) && $_GET['status'] === 'error'): ?>
            <p class="notice error">Unable to submit feedback. Please try again.</p>
        <?php endif; ?>

        <form action="submit_feedback.php" method="POST">
            <input type="text" name="name" placeholder="Enter your name" required>
            <input type="email" name="email" placeholder="Enter your email" required>
            <textarea name="message" placeholder="Enter your feedback" required></textarea>
            <button type="submit">Submit Feedback</button>
        </form>
        <p><a href="admin_login.php">Admin Login</a></p>
    </div>
</body>
</html>
