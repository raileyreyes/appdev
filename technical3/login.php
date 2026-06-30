<?php
session_start();
require_once 'db_connect.php';

if (isset($_SESSION['user_id'])) {
    header('Location: home.php');
    exit();
}

$message = '';
$savedUsername = $_COOKIE['remember_username'] ?? '';
$savedPassword = $_COOKIE['remember_password'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';
    $remember = isset($_POST['remember']);

    $stmt = $conn->prepare('SELECT * FROM users WHERE username = ?');
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];

            if ($remember) {
                setcookie('remember_username', $username, time() + (86400 * 7), '/appdev/technical3/');
                setcookie('remember_password', $password, time() + (86400 * 7), '/appdev/technical3/');
            } else {
                setcookie('remember_username', '', time() - 3600, '/appdev/technical3/');
                setcookie('remember_password', '', time() - 3600, '/appdev/technical3/');
            }

            header('Location: home.php');
            exit();
        }
    }

    $message = 'Invalid username or password.';
    $savedUsername = $username;
    $savedPassword = $remember ? $password : '';
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
    <title>Activity B - Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="page-shell compact">
        <section class="panel">
            <div class="panel-header">
                <p class="eyebrow">Activity B</p>
                <h1>Login Module</h1>
                <a href="registration.php">Create registration</a>
            </div>

            <?php if ($message !== ''): ?>
                <p class="message error"><?= clean_output($message) ?></p>
            <?php endif; ?>

            <form method="POST" action="login.php" class="login-form">
                <label>
                    Username
                    <input type="text" name="username" value="<?= clean_output($savedUsername) ?>" required>
                </label>

                <label>
                    Password
                    <input type="password" name="password" value="<?= clean_output($savedPassword) ?>" required>
                </label>

                <label class="check-row">
                    <input type="checkbox" name="remember" <?= $savedUsername !== '' && $savedPassword !== '' ? 'checked' : '' ?>>
                    Remember me
                </label>

                <button type="submit">Login</button>
            </form>

            <p class="hint">Use the username and password saved from registration.</p>
        </section>
    </main>
</body>
</html>
