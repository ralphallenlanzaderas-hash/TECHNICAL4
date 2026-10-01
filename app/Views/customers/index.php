<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customers Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <nav class="navbar navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">POS System</a>
            <div class="d-flex align-items-center text-white">
                <span class="me-3">Welcome, <strong><?= session()->get('username') ?></strong>!</span>
                <a href="<?= base_url('/logout') ?>" class="btn btn-danger btn-sm">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
        <?php endif; ?>

        <div class="card shadow-sm p-4">
            <h3>Customer Management</h3>
            <p>You have successfully logged in and accessed a protected page.</p>
            <!-- Your TFA3 Customer Table will go here -->
        </div>
    </div>
</body>
</html>