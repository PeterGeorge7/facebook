<?php
require_once "DBConnection.php";
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    include "../design/register.html";
} else {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $emailOrPhone = $_POST['emailOrPhone'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $birth_day = $_POST['birth_day'];
    $birth_month = $_POST['birth_month'];
    $birth_year = $_POST['birth_year'];
    $DOB = $birth_year . "-" . $birth_month . "-" . $birth_day;
    $gender = $_POST['gender'];

    if (empty($fname) == 1 || empty($lname) == 1 || empty($emailOrPhone) == 1 || empty($password) || empty($birth_day) == 1 || empty($birth_month) == 1 || empty($birth_year) == 1 || empty($gender) || (!filter_var($emailOrPhone, FILTER_VALIDATE_EMAIL) && !preg_match('/^(\d{3}-\d{3}-\d{4}|\(\d{3}\)\s*\d{3}-\d{4}|\d{10})$/', $emailOrPhone))) {
        header("location: ../design/register/register.php?error=true");
    } else {
        $db = new DBConnection();

        $conn = $db->getConnection();
        // Check if the text is an email address
        if (filter_var($emailOrPhone, FILTER_VALIDATE_EMAIL)) {
            $stmt_user = $conn->query("INSERT INTO `users` (Email) VALUES ('$emailOrPhone')");

            $user_id = $conn->insert_id;

            $stmt_perosn = $conn->query("INSERT INTO `person` (Person_ID,Fname,Lname,DOB,Gender,Password) VALUES ('$user_id','$fname','$lname','$DOB','$gender','$password')");
            if ($conn->affected_rows == 1) {
                header("location: LoginController.php");
            }
        }

        // Check if the text is a phone number
        if (preg_match('/^(\d{3}-\d{3}-\d{4}|\(\d{3}\)\s*\d{3}-\d{4}|\d{10})$/', $emailOrPhone)) {
            $stmt_user = $conn->query("INSERT INTO `users` (About) VALUES ('-')");
            $user_id = $conn->insert_id;
            $stmt_perosn = $conn->query("INSERT INTO `person` (Person_ID,Fname,Lname,Phone,DOB,Gender,Password) VALUES ('$user_id','$fname','$lname','$emailOrPhone','$DOB','$gender','$password')");
            if ($conn->affected_rows == 1) {
                header("location: LoginController.php");
            }
        }
    }
}
