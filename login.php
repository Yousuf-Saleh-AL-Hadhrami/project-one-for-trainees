<?php
// Move processing to the top so headers (redirects) work before any output.
session_start();

// Precomputed password hashes (for example purposes only)
$users = [
    [
        'username' => 'admin',
        'name' => 'Yousuf AL Hadhrami',
        'password' => password_hash('123456', PASSWORD_DEFAULT),
    ],
    [
        'username' => 'user2',
        'name' => 'Ali AL Hadhrami',
        'password' => password_hash('123456', PASSWORD_DEFAULT),
    ]
];

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($username === '' || $password === '') {
        $error = 'Please enter both username and password.';
    } else {
        foreach ($users as $user) {
            if ($user['username'] === $username && password_verify($password, $user['password'])) {
                // Successful login
                $_SESSION['username'] = $user['username'];
                $_SESSION['name'] = $user['name'];
                header('Location: dashboard.php');
                exit();
            }
        }
        $error = 'Invalid username or password.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <!-- Bootstrap 5 CDN CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Small custom tweaks */
        body { background-color: #f8f9fa; }
        .card { border-radius: .75rem; }
    </style>
</head>
<body>

<main class="container">
    <div class="row justify-content-center align-items-center vh-100">
        <div class="col-12 col-md-8 col-lg-5">
            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <h4 class="card-title mb-3 text-center">Sign in</h4>

                    <?php if ($error): ?>
                        <div class="alert alert-danger" role="alert"><?php echo htmlspecialchars($error); ?></div>
                    <?php endif; ?>

                    <form action="login.php" method="post" novalidate>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" value="<?php echo isset($username) ? htmlspecialchars($username) : ''; ?>" required autofocus>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>

                        <div class="d-grid">
                            <button class="btn btn-primary" type="submit">Login</button>
                        </div>
                    </form>

                    <hr>
                    <div class="text-center small text-muted">For demo: username <code>admin</code> or <code>user2</code>, password <code>123456</code></div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Bootstrap 5 Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>