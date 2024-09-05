<?php

include "condb.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM $user_table WHERE email = :email";
    $smt = $conn->prepare($sql);
    $smt->bindParam("email",$email);
    $smt->execute();
    $row = $smt->fetch(PDO::FETCH_ASSOC);

    if ($row && password_verify($password, $row['password'])) {
        session_start();

        if ($row['role'] == 1) {
            $_SESSION['Admin'] = $row['id'];
            $_SESSION['role'] = $row['role'];
            echo "<script>console.log('Login Successfully')</script>";
            header("Location: index.php");
            exit(); // Ensure no further output after redirect
        } else {
            $_SESSION['User'] = $row['id'];
            $_SESSION['role'] = $row['role'];
            echo "<script>console.log('Login Successfully')</script>";
            header("Location: index.php");
            exit(); // Ensure no further output after redirect
        }
    } else {
       echo "ผิดพลาด";
    }

}

?>