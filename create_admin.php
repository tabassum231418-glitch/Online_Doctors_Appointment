<?php
// Run this file ONCE from localhost to create an admin account, then delete this file.
require_once 'config/db.php';
$name='System Admin';$email='admin@example.com';$phone='0000000000';$password='Admin@12345';
$stmt=$pdo->prepare("SELECT id FROM users WHERE email=?");$stmt->execute([$email]);
if(!$stmt->fetch()){
 $stmt=$pdo->prepare("INSERT INTO users(name,email,phone,password,role) VALUES(?,?,?,?, 'admin')");
 $stmt->execute([$name,$email,$phone,password_hash($password,PASSWORD_DEFAULT)]);
 echo 'Admin created. Email: admin@example.com | Password: Admin@12345. Delete create_admin.php now.';
}else{echo 'Admin account already exists. Delete create_admin.php now.';}
