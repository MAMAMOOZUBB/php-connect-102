<?php
$host = 'localhost'; // หรือ localhost 127.0.0.1
$db = 'example_db';  // ชื่อฐานข้อมูล
$user = 'root';      // ชื่อผู้ใช้ MySQL (ค่าเริ่มต้นคือ root)
$pass = '';          // รหัสผ่าน (ค่าเริ่มต้นว่างเปล่า)
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("ไม่สามารถเชื่อมต่อฐานข้อมูล: " . $e->getMessage());
}
?>
