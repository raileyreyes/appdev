<?php
session_start();
require_once 'db_connect.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$stmt = $conn->prepare('SELECT first_name, middle_name, last_name, username, birthday, email, contact_number FROM users WHERE id = ?');
$stmt->bind_param('i', $_SESSION['user_id']);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if (!$user) {
    session_unset();
    session_destroy();
    header('Location: login.php');
    exit();
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
    <title>Activity B - Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="page-shell">
        <section class="panel welcome-panel">
            <p class="eyebrow">User Side Retrieval of Record</p>
            <h1>Welcome, <?= clean_output($user['username']) ?>!</h1>

            <table class="record-table">
                <tr>
                    <th>Field</th>
                    <th>Information</th>
                </tr>
                <tr>
                    <td>First Name</td>
                    <td><?= clean_output($user['first_name']) ?></td>
                </tr>
                <tr>
                    <td>Middle Name</td>
                    <td><?= clean_output($user['middle_name']) ?></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><?= clean_output($user['last_name']) ?></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><?= clean_output($user['username']) ?></td>
                </tr>
                <tr>
                    <td>Birthday</td>
                    <td><?= clean_output($user['birthday']) ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?= clean_output($user['email']) ?></td>
                </tr>
                <tr>
                    <td>Contact Number</td>
                    <td><?= clean_output($user['contact_number']) ?></td>
                </tr>
            </table>

            <div class="action-row">
                <a class="button-link" href="reset_password.php">Reset Password</a>
                <a class="button-link" href="logout.php">Logout</a>
            </div>
        </section>
    </main>
</body>
</html>
