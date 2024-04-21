<?php 
    session_start();
    include "connection.php";
    if (isset($_POST['uname']) && isset($_POST['upass'])) {
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    }
    $username = validate($_POST['uname']);
    $userpass = validate($_POST['upass']);
    if (empty($username)) {
        header('Location:../html/authentication-login.php?error=User Name is required');
        exit();
    }elseif (empty($userpass)) {
        header('Location:../html/authentication-login.php?error=Password is required');
        exit();
    }
    $sql = "SELECT * FROM login WHERE name='$username' && password='$userpass'";
    $rs = mysqli_query($con,$sql);
    if (mysqli_num_rows($rs) === 1) {
        $row = mysqli_fetch_assoc($rs);
        if ($row['name'] === $username && $row['password'] === $userpass) {
            echo 'Logged In';
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
            header("Location:../html/ui-card.php");
            exit(); 
        }else {
            header('Location:../html/authentication-login.php?error=Incorrect User Name Or Password');
            exit();
        }
    }
    else {
        header("Location:../html/authentication-login.php?error=Incorrect User Name Or Password");
        exit();
    }




?>