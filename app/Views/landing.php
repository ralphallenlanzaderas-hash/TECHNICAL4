<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | SimplePOS</title>
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
        <section class="hero">
            <h1>Simple Point-of-Sale System</h1>

            <p>
                A beginner-friendly CodeIgniter 4 application demonstrating
                routes, controllers, views, static PHP arrays, and MVC architecture.
            </p>

            <a class="button" href="<?= base_url('customers') ?>">
                View Customer Accounts
            </a>
        </section>
    </main>

    <footer class="footer">
        <p>
            Developed by Ralph Allen Lanzaderas |
            IT0049 - TX32 |
            Prof. Von Erick Magbitang
        </p>
    </footer>
</body>
</html>