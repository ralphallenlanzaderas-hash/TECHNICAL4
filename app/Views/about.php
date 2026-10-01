<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | SimplePOS</title>
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
            <h1>About the Project</h1>
            <p>Information about the SimplePOS laboratory application.</p>
        </div>

        <section class="card">
            <h2>From Zero to Four Pages</h2>

            <p>
                SimplePOS is a basic Point-of-Sale website created for the
                IT0049 Web System Technologies Technical Formative Assessment 1.
            </p>

            <p>
                The application demonstrates how CodeIgniter routes, controllers,
                and views work together. Customer and staff records are stored in
                temporary PHP arrays, so the project does not require a database.
            </p>

            <div class="details">
                <div class="detail-box">
                    <strong>Name</strong>
                    Ralph Allen Lanzaderas
                </div>

                <div class="detail-box">
                    <strong>Course and Section</strong>
                    IT0049 - TX32
                </div>

                <div class="detail-box">
                    <strong>Professor</strong>
                    Von Erick Magbitang
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <p>SimplePOS — CodeIgniter 4 MVC Laboratory Activity</p>
    </footer>
</body>
</html>