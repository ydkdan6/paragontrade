<?php
session_start();
require_once 'db_connect.php'; 

// Get the token from the URL
$token = filter_input(INPUT_GET, 'token', FILTER_SANITIZE_STRING);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    if (!$password) {
        $_SESSION['error'] = 'Password is required.';
        header('Location: reset-password.php?token=' . $token);
        exit;
    }

    try {
        // Check if the token is valid
        $stmt = $pdo->prepare('SELECT user_id, expiration FROM password_resets WHERE token = :token LIMIT 1');
        $stmt->bindParam(':token', $token, PDO::PARAM_STR);
        $stmt->execute();
        $reset = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($reset && strtotime($reset['expiration']) > time()) {
            // Token is valid, allow user to reset password
            $newPasswordHash = password_hash($password, PASSWORD_DEFAULT);

            // Update the user's password
            $stmt = $pdo->prepare('UPDATE users SET password_hash = :password_hash WHERE user_id = :user_id');
            $stmt->bindParam(':password_hash', $newPasswordHash, PDO::PARAM_STR);
            $stmt->bindParam(':user_id', $reset['user_id'], PDO::PARAM_INT);
            $stmt->execute();

            // Delete the used token
            $stmt = $pdo->prepare('DELETE FROM password_resets WHERE token = :token');
            $stmt->bindParam(':token', $token, PDO::PARAM_STR);
            $stmt->execute();

            $_SESSION['message'] = 'Your password has been reset successfully.';
            header('Location: login.php');
            exit;
        } else {
            $_SESSION['error'] = 'Invalid or expired reset token.';
            header('Location: login.php');
            exit;
        }
    } catch (PDOException $e) {
        error_log('Database error: ' . $e->getMessage());
        $_SESSION['error'] = 'An error occurred. Please try again later.';
        header('Location: login.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reset Your Password</title>
    <link href="temp/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
    <section class="auth">
        <div class="container">
            <div class="pb-3 row justify-content-center">
                <div class="col-12 col-md-6 col-lg-6 col-sm-10 col-xl-6">
                    <div class="bg-white shadow card login-page roundedd border-1">
                        <div class="card-body">
                            <h4 class="text-center card-title">Reset Your Password</h4>

                            <?php if (isset($_SESSION['error'])): ?>
                                <div class="alert alert-danger">
                                    <?php 
                                        echo $_SESSION['error'];
                                        unset($_SESSION['error']);
                                    ?>
                                </div>
                            <?php endif; ?>

                            <form method="POST" action="reset-password.php?token=<?php echo htmlspecialchars($token); ?>" class="mt-4">
                                <div class="form-group">
                                    <label for="password">Enter your new password:</label>
                                    <input type="password" class="form-control" name="password" id="password" required>
                                </div>

                                <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="temp/js/jquery-3.5.1.min.js"></script>
    <script src="temp/js/bootstrap.bundle.min.js"></script>
</body>
</html>
