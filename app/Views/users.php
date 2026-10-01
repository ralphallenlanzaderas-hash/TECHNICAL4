<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Accounts | SimplePOS</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <nav class="navbar">
        <div class="nav-container">
            <a class="brand" href="<?= base_url() ?>">SimplePOS</a>

            <div class="nav-links">
                <a href="<?= base_url() ?>">Home</a>
                <a href="<?= base_url('about') ?>">About</a>
                <a href="<?= base_url('customers') ?>">Customers</a>
                <a href="<?= base_url('users') ?>">Users</a>
            </div>
        </div>
    </nav>

    <main class="container">
        <div class="page-header">
            <h1>User Accounts</h1>
            <p>POS staff records stored in a static PHP array.</p>
        </div>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Username</th>
                        <th>Full Name</th>
                        <th>Role</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($users as $index => $user): ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= esc($user['username']) ?></td>
                            <td><?= esc($user['full_name']) ?></td>
                            <td>
                                <span class="badge">
                                    <?= esc($user['role']) ?>
                                </span>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>

    <footer class="footer">
        <p>SimplePOS — User Accounts</p>
    </footer>
</body>
</html>