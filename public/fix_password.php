<?php
// 1. Database connection settings
$host     = 'localhost';
$db       = 'lanzaderas_db';$user     = 'root';
$pass     = '';$charset  = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn,$user, $pass,$options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

// 2. Plaintext password to set
$plainPassword = 'password123';

// 3. Generate fresh hash using PHP's algorithm
$hashedPassword = password_hash($plainPassword, PASSWORD_DEFAULT);

// 4. Ensure password column is large enough (VARCHAR 255)
$pdo->exec("ALTER TABLE `users` MODIFY COLUMN `password` VARCHAR(255) NOT NULL");

// 5. Update password for admin and staff1 users
$stmt =$pdo->prepare("UPDATE `users` SET `password` = :hash WHERE `username` IN ('admin', 'staff1')");
$stmt->execute(['hash' =>$hashedPassword]);

echo "<h2>Password Hash Fixed Successfully!</h2>";
echo "<p><strong>Username:</strong> admin / staff1</p>";
echo "<p><strong>Password:</strong> password123</p>";
echo "<p><strong>Generated Hash:</strong> " . htmlspecialchars($hashedPassword) . "</p>";
echo "<p><a href='/Lanzaderas/public/login'>Click here to go to Login Page</a></p>";