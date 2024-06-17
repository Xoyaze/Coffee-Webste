<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['signUpSubmit'])){

        session_start();

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordOne = $_POST['passwordOne'];


        echo "The values are: " . $username ."  ". $email ."  ". $password ."  ". $passwordOne;

        if($username == '' || $password == '' || $email == ''){
            unset($_SESSION['passwordErrorMessage']);
            $_SESSION['passwordErrorMessage'] = "Error! The username, email and password fields must all be filled.";
            header('Location: ../index.php');
        }else if(!($password == $passwordOne)){
            unset($_SESSION['passwordErrorMessage']);
            $_SESSION['passwordErrorMessage'] = "Error! The passwords must match exactly.";
            header('Location: ../index.php');
        }else{
            require_once('dbConn.php');
            $signer = "INSERT INTO users(username,email,pass)VALUES('$username','$email','$password');";
    
            $signerResult = mysqli_query($conn, $signer);
            if(!$signerResult){
                echo "<br>Couldn't insert the data into the databse! ";
                die();
            }else{
                $_SESSION['loginFromHere'] = 'Log In From here now.';
                header("Location: ../index.php");
            }
        }
    }else{
        header("Location: ../index.php");
    }

    if(isset($_POST['signInSubmit'])){

        session_start();

        $email = $_POST['email'];
        $password = $_POST['password'];

        require_once('dbConn.php');

        if($email == '' || $password == ""){
            unset($_SESSION['loginFailMessage']);
            $_SESSION['loginFailMessage'] = 'Please fill both the fields.';
            header("Location: ../index.php");
        }else{
            $query = "SELECT username, uid FROM users WHERE email = '$email' AND pass = '$password'";
            $searchResult = mysqli_query($conn, $query);
            
            if(mysqli_num_rows($searchResult) > 0){
                $row = mysqli_fetch_assoc($searchResult);
                if($row){
                    $_SESSION['user_name'] =  $row['username'];
                    $_SESSION['user_id'] =  $row['uid'];
                }
                header("Location: ../login-ux/home.php");
            }else{
                unset($_SESSION['loginFailMessage']);
                $_SESSION['loginFailMessage'] = 'Your credentials do not match !';
                header("Location: ../index.php");
            }
        }
    }











}




?>