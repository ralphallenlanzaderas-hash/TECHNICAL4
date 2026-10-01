<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Accounts | SimplePOS</title>
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
            <h1>Customer Accounts</h1>
            <p>Customer records stored in a static PHP array.</p>
        </div>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Full Name</th>
                        <th>Email Address</th>
                        <th>Phone Number</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($customers as $index => $customer): ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= esc($customer['full_name']) ?></td>
                            <td><?= esc($customer['email']) ?></td>
                            <td><?= esc($customer['phone']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>

    <footer class="footer">
        <p>SimplePOS — Customer Accounts</p>
    </footer>
</body>
</html>