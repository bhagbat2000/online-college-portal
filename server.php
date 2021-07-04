<?php
//session_destroy();
session_start();
//$_SESSION['success'] = "";

$username = "";
$email = "";
$errors = array();

//echo $_SESSION['success'] ;
$db = mysqli_connect('localhost', 'root', '', 'registration');

if (isset($_POST['register'])) {

    $username = mysqli_real_escape_string($db,$_POST['username']);
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db,$_POST['password_2']);


    if (empty($username)) {
        array_push($errors, "Username is required");
    }

    if (empty($email)) {
        array_push($errors, "Email is required");
    }

    if (empty($password_1)) {
        array_push($errors, "Password is required");
    }
    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }

    if (count($errors) == 0) {

        $password = $password_1;
        $sql = "INSERT INTO `user`(`username`, `email`, `password`) VALUES('$username','$email','$password')";
        //echo $sql;
        mysqli_query($db, $sql);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
       header('location: index.php');
    }
}

if (isset($_POST['login'])) {

    $username = mysqli_real_escape_string($db,$_POST['username']);
 //   $email = mysqli_real_escape_string($db,$_POST['email']);
    $password = mysqli_real_escape_string($db,$_POST['password']);



    if (empty($username)) {
        array_push($errors, "Username is required");
    }

    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {

        $password = $password;
        $query = "SELECT * FROM `user` WHERE `username`='$username' AND `password`='$password' ";
  //     echo $query;
        $result = mysqli_query($db,$query);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)){

                if($row['staff'] == 1)
                    { 
                        //admin
                        $_SESSION['username'] = $username;
                        $_SESSION['success'] = "You are now logged in admin";
                        header('location: index.php');
                    }
                    else {
                        //user
                        $_SESSION['username'] = $username;
                        $_SESSION['success'] = "You are now logged in";
                        header('location: index.php');
                    }
                
            }
        }
        
         else {
            array_push($errors, "Wrong username/password combination");
        }

    }

}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    unset($_SESSION['success']);
    header('location: login.php');
}
?>