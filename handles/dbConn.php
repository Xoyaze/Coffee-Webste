<?php

    $hostname = 'localhost';
    $user = 'root';
    $pass = "";
    $database = 'coffeeExampleOne';

    $conn = mysqli_connect($hostname,$user,$pass);
    if(!$conn){
        echo "Couln't connect to the databse because of the error: " . mysqli_connect_error();
        die();
    }else{
        $query = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$database'";
        $result = mysqli_query($conn, $query);
        if(!(mysqli_num_rows($result) > 0)){

            $createQuery = "CREATE DATABASE $database;";
            $createResult = mysqli_query($conn, $createQuery);
            if(!$createResult){
                echo "Couldn't create database !";
                die();
            }else{
                mysqli_select_db($conn, $database);
                $createTableQuery = 'CREATE TABLE users(
                    uid INT AUTO_INCREMENT PRIMARY KEY,
                    username VARCHAR(100),
                    email VARCHAR(100),
                    pass VARCHAR(50)
                );';
                $tableResult = mysqli_query($conn, $createTableQuery);
                if(!$tableResult){
                    echo "Couldn't create the user table !";
                    die();
                }

                $createTableQueryOne = 'CREATE TABLE orders(
                    order_id INT PRIMARY KEY AUTO_INCREMENT,
                    user_id INT NOT NULL,
                    beantype VARCHAR(50) NOT NULL,
                    caffeinelevel VARCHAR(50) NOT NULL,
                    roastlevel VARCHAR(50) NOT NULL,
                    flavourprofile VARCHAR(50),
                    brewingmethod VARCHAR(150),
                    drinktype VARCHAR(150),
                    userpref VARCHAR(500),
                    deliveryadd VARCHAR(100),
                     contactnumber VARCHAR(50)
                );';
                $tableResultOne = mysqli_query($conn, $createTableQueryOne);
                if(!$tableResultOne){
                    echo "Couldn't create the order table !";
                    die();
                }
            }   
        }else{
            mysqli_select_db($conn, $database);
        }
    }
?>