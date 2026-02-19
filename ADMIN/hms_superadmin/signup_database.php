<?php
session_start();
include "connect_db.php";

$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $full_name = $_POST['full_name'];
    $role_id = $_POST['role_id'];
    $department_id = $_POST['department_id'];
    $status = 'active';

    // Check if username already exists
    $check = $conn->prepare("SELECT user_id FROM user_accounts WHERE username = ?");
    $check->bind_param("s", $username);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        $error = "Username already taken!";
    } else {
        $stmt = $conn->prepare("INSERT INTO user_accounts 
        (role_id, department_id, username, email, password_hash, full_name, status, created_at) 
        VALUES (?, ?, ?, ?, ?, ?, ?, NOW())");

        $stmt->bind_param("iisssss", 
            $role_id, 
            $department_id, 
            $username, 
            $email, 
            $password, 
            $full_name, 
            $status
        );

        if ($stmt->execute()) {
            $success = "Signup successful!";
        } else {
            $error = "Error: " . $stmt->error;
        }
    }
}

// Fetch roles and departments from DB
$roles = $conn->query("SELECT role_id, role_name FROM roles");
$departments = $conn->query("SELECT department_id, department_name FROM departments");
?>