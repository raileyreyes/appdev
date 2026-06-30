<?php
session_start();
require_once 'db_connect.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$message = '';
$messageType = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $currentPassword = $_POST['current_password'] ?? '';
    $newPassword = $_POST['new_password'] ?? '';
    $reenterPassword = $_POST['reenter_password'] ?? '';

    $stmt = $conn->prepare('SELECT password FROM users WHERE id = ?');
    $stmt->bind_param('i', $_SESSION['user_id']);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if (!$user || !password_verify($currentPassword, $user['password'])) {
        $message = 'Current password is not the same with the old password.';
        $messageType = 'error';
    } elseif ($newPassword !== $reenterPassword) {
        $message = 'New password and Re-Enter new password should be the same.';
        $messageType = 'error';
    } else {
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
        $update = $conn->prepare('UPDATE users SET password = ? WHERE id = ?');
        $update->bind_param('si', $hashedPassword, $_SESSION['user_id']);
        $update->execute();

        $message = 'Password reset successfully.';
        $messageType = 'success';
    }
}

function clean_output($value)
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity B - Reset Password</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="page-shell compact">
        <section class="panel">
            <div class="panel-header">
                <p class="eyebrow">Activity B</p>
                <h1>Reset Password</h1>
                <a href="home.php">Back to home</a>
            </div>

            <?php if ($message !== ''): ?>
                <p class="message <?= clean_output($messageType) ?>"><?= clean_output($message) ?></p>
            <?php endif; ?>

            <form method="POST" action="reset_password.php" class="login-form">
                <label>
                    Enter Current Password
                    <input type="password" name="current_password" required>
                </label>

                <label>
                    Enter New Password
                    <input type="password" name="new_password" required>
                </label>

                <label>
                    Re-Enter New Password
                    <input type="password" name="reenter_password" required>
                </label>

                <button type="submit">Reset Password</button>
            </form>
        </section>
    </main>
</body>
</html>
