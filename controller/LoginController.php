<?php
// session_start();
require_once 'DBConnection.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    header("location: ../design/login/login.php");
} else {
    $emailOrPhone = $_POST['EmailOrPhone'];
    $password = $_POST['password'];


    $db = new DBConnection();
    $con = $db->getConnection();

    $stmt = $con->query("SELECT person.Password AS Password,person.Person_ID AS id FROM users INNER JOIN person ON(users.ID=Person_ID) WHERE users.Email='$emailOrPhone' OR person.Phone='$emailOrPhone'");


    if ($stmt->num_rows === 0) {
        header("location: ../design/login/login.php?error_email=true");
    } else {
        // Rows were returned, so the query retrieved data
        $row = $stmt->fetch_assoc();
        $storedHash = $row['Password'];
        // Use the retrieved password for further processing, such as password verification
        if (password_verify($password, $storedHash)) {
            // $_SESSION['id'] = $user_id;
            setcookie('user_id', $row['id'], time() + 86400 * 30, '/');
            header("location: ../design/home/homepage.php");
        } else {
            // Password is incorrect
            header("location: ../design/login/login.php?error_pass=true");
        }
    }
}
