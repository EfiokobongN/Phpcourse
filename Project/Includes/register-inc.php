<?php
if (isset($_POST['submit'])){
    //add database  connection
    require 'database.php';

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPass = $_POST['confirmPassword'];

    if (empty($username) || empty($email) || empty($password) || empty($confirmPass)){
        header("Location: ../register.php?error=emptyfields&email=".$email);
        exit();
    }elseif(!preg_match("/^[a-zA-Z0-9@]*/", $email)){
        header("Location: ../register.php?error=invalidemail&email=".$email);
        exit();
    }elseif($password !== $confirmPass){
        header("Location: ../register.php?error=passwordsnotmatch&email=".$email);
        exit();
    }
    
    else{
        $sql = "SELECT email FROM users WHERE email = ?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../register.php?error=sqlerror");
        exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
           $rowCount = mysqli_stmt_num_rows($stmt);

           if ($rowCount > 0){
            header("Location: ../register.php?error=emailalreadyexist");
        exit();
           }
           else{
            $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                header("Location: ../register.php?error=sqlerror");
            exit();
            }else{

            $hashedPass = password_hash($password, PASSWORD_DEFAULT);
            mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPass);
            mysqli_stmt_execute($stmt);

            header("Location: ../register.php?success=registered");
            exit();
           
            }
           }

        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

}
?>