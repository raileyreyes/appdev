<?php
session_start();
require_once 'db_connect.php';

if (isset($_SESSION['user_id'])) {
    header('Location: home.php');
    exit();
}

$submitted = $_SERVER['REQUEST_METHOD'] === 'POST';
$message = '';
$messageType = '';
$values = [
    'first_name' => '',
    'middle_name' => '',
    'last_name' => '',
    'username' => '',
    'birthday' => '',
    'email' => '',
    'contact_number' => '',
];

if ($submitted) {
    foreach ($values as $key => $value) {
        $values[$key] = trim($_POST[$key] ?? '');
    }

    $password = $_POST['password'] ?? '';
    $confirmPassword = $_POST['confirm_password'] ?? '';

    if ($password !== $confirmPassword) {
        $message = 'Password and confirm password are not the same.';
        $messageType = 'error';
    } else {
        $check = $conn->prepare('SELECT id FROM users WHERE username = ?');
        $check->bind_param('s', $values['username']);
        $check->execute();
        $checkResult = $check->get_result();

        if ($checkResult->num_rows > 0) {
            $message = 'Username already exists.';
            $messageType = 'error';
        } else {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $conn->prepare(
                'INSERT INTO users (first_name, middle_name, last_name, username, password, birthday, email, contact_number)
                 VALUES (?, ?, ?, ?, ?, ?, ?, ?)'
            );
            $stmt->bind_param(
                'ssssssss',
                $values['first_name'],
                $values['middle_name'],
                $values['last_name'],
                $values['username'],
                $hashedPassword,
                $values['birthday'],
                $values['email'],
                $values['contact_number']
            );

            if ($stmt->execute()) {
                $message = 'Registration saved to database successfully.';
                $messageType = 'success';
            } else {
                $message = 'Registration failed. Please try again.';
                $messageType = 'error';
            }
        }
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
    <title>Activity B - Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="page-shell">
        <section class="panel">
            <div class="panel-header">
                <h1>My Personal Information</h1>
                <a href="login.php">Go to login</a>
            </div>

            <?php if ($message !== ''): ?>
                <p class="message <?= clean_output($messageType) ?>"><?= clean_output($message) ?></p>
            <?php endif; ?>

            <form method="POST" action="registration.php" class="form-grid">
                <label>
                    First Name
                    <input type="text" name="first_name" value="<?= clean_output($values['first_name']) ?>" required>
                </label>

                <label>
                    Middle Name
                    <input type="text" name="middle_name" value="<?= clean_output($values['middle_name']) ?>" required>
                </label>

                <label>
                    Last Name
                    <input type="text" name="last_name" value="<?= clean_output($values['last_name']) ?>" required>
                </label>

                <label>
                    Username
                    <input type="text" name="username" value="<?= clean_output($values['username']) ?>" required>
                </label>

                <label>
                    Password
                    <input type="password" name="password" required>
                </label>

                <label>
                    Confirm Password
                    <input type="password" name="confirm_password" required>
                </label>

                <label>
                    Birthday
                    <input type="text" name="birthday" placeholder="January 30 1993" value="<?= clean_output($values['birthday']) ?>" required>
                </label>

                <label>
                    Email
                    <input type="email" name="email" value="<?= clean_output($values['email']) ?>" required>
                </label>

                <label>
                    Contact Number
                    <input type="text" name="contact_number" value="<?= clean_output($values['contact_number']) ?>" required>
                </label>

                <button type="submit">Submit</button>
            </form>
        </section>

        <?php if ($messageType === 'success'): ?>
            <section class="panel result-panel">
                <h2>Saved Record</h2>
                <div class="result-list">
                    <p><strong>First Name:</strong> <?= clean_output($values['first_name']) ?></p>
                    <p><strong>Middle Name:</strong> <?= clean_output($values['middle_name']) ?></p>
                    <p><strong>Last Name:</strong> <?= clean_output($values['last_name']) ?></p>
                    <p><strong>Username:</strong> <?= clean_output($values['username']) ?></p>
                    <p><strong>Birthday:</strong> <?= clean_output($values['birthday']) ?></p>
                    <p><strong>Email:</strong> <?= clean_output($values['email']) ?></p>
                    <p><strong>Contact Number:</strong> <?= clean_output($values['contact_number']) ?></p>
                </div>
            </section>
        <?php endif; ?>
    </main>
</body>
</html>
