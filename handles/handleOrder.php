<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){


        if(isset($_POST['order_submit'])){

            session_start();

            $names = ['coffee-beans', 'coffee-caffeine-content', 'coffee-roast-level', 'coffeeStyle', 'drinkType', 'deliveryAddress', 'contactNumber'];
            $all_variables_set = true;
            foreach($names as $name){
                if (!isset($_POST[$name])) {
                    $all_variables_set = false;
                    break;
                }
            }

            
            if(!$all_variables_set){
                unset($_SESSION['order_error']);
                $_SESSION['order_error'] = "Please select or input in all of the fields except the 'Optional' ones.";
                header("Location: ../login-ux/home.php");
            }else{
                require_once('dbConn.php');

                $coffeeBeans = $_POST['coffee-beans'];
                $coffeeCaffeineContent = $_POST['coffee-caffeine-content'];
                $coffeeRoastLevel = $_POST['coffee-roast-level'];
                $coffeeStyle = $_POST['coffeeStyle'];
                $drinkType = $_POST['drinkType'];
                $deliveryAddress = $_POST['deliveryAddress'];
                $contactNumber = $_POST['contactNumber'];
                $coffeeFlavourProfile = $_POST['coffee-flavour-profile'];
                $userPreferences = $_POST['userPreferences'];
                
                $coffeeBeans = mysqli_real_escape_string($conn, $coffeeBeans);
                $coffeeCaffeineContent = mysqli_real_escape_string($conn, $coffeeCaffeineContent);
                $coffeeRoastLevel = mysqli_real_escape_string($conn, $coffeeRoastLevel);
                $deliveryAddress = mysqli_real_escape_string($conn, $deliveryAddress);
                $contactNumber = mysqli_real_escape_string($conn, $contactNumber);
                $coffeeFlavourProfile = mysqli_real_escape_string($conn, $coffeeFlavourProfile);
                $userPreferences = mysqli_real_escape_string($conn, $userPreferences);
                
                $finalCoffeeStyle = '';
                foreach($coffeeStyle as $style){
                    $finalCoffeeStyle = $style . ' ';
                }
                $finalDrinkType = '';
                foreach($drinkType as $drink){
                    $finalDrinkType = $drink . ' ';
                }
                $userID = $_SESSION['user_id'];
    
    
                $order = "INSERT INTO orders(user_id, beantype, caffeinelevel, roastlevel, flavourprofile, brewingmethod, drinktype, userpref,deliveryadd, contactnumber) VALUES ('$userID','$coffeeBeans','$coffeeCaffeineContent','$coffeeRoastLevel','$coffeeFlavourProfile','$finalCoffeeStyle','$finalDrinkType ','$userPreferences','$deliveryAddress','$contactNumber');";
    
                $placedOrder = mysqli_query($conn, $order);
                if(!$placedOrder){
                    unset($_SESSION['order_error']);
                    $_SESSION['order_error'] = 'Error! Failed to place the order.';
                    header("Location: ../login-ux/home.php");
                }else{
                    unset($_SESSION['order_success']);
                    $_SESSION['order_error'] = 'Placed the order successfully. You can place other orders or log out.';
                    header("Location: ../login-ux/home.php");
                }
            }

        }
        
        else if(isset($_POST['update_submit'])){

            session_start();

            $names = ['orderId','coffee-beans', 'coffee-caffeine-content', 'coffee-roast-level','coffeeStyle','drinkType','deliveryAddress', 'contactNumber'];
            $all_variables_set = true;
            foreach($names as $name){
                if (!isset($_POST[$name])) {
                    $all_variables_set = false;
                    break;
                }
            }

            
            if(!$all_variables_set){
                unset($_SESSION['update_status']);
                $_SESSION['update_status'] = "Please select or input in all of the fields to update the order.";
                header("Location: ../login-ux/home.php");
            }else{
                require_once('dbConn.php');

                $orderId = $_POST['orderId'];
                $coffeeBeans = $_POST['coffee-beans'];
                $coffeeCaffeineContent = $_POST['coffee-caffeine-content'];
                $coffeeRoastLevel = $_POST['coffee-roast-level'];
                $coffeeStyle = $_POST['coffeeStyle'];
                $drinkType = $_POST['drinkType'];
                $deliveryAddress = $_POST['deliveryAddress'];
                $contactNumber = $_POST['contactNumber'];
                
                $coffeeBeans = mysqli_real_escape_string($conn, $coffeeBeans);
                $coffeeCaffeineContent = mysqli_real_escape_string($conn, $coffeeCaffeineContent);
                $coffeeRoastLevel = mysqli_real_escape_string($conn, $coffeeRoastLevel);
                $deliveryAddress = mysqli_real_escape_string($conn, $deliveryAddress);
                $contactNumber = mysqli_real_escape_string($conn, $contactNumber);
                
                $finalCoffeeStyle = '';
                foreach($coffeeStyle as $style){
                    $finalCoffeeStyle = $style . ' ';
                }
                $finalDrinkType = '';
                foreach($drinkType as $drink){
                    $finalDrinkType = $drink . ' ';
                }
                $userID = $_SESSION['user_id'];

                $update = "UPDATE orders SET beantype = '$coffeeBeans', caffeinelevel = '$coffeeCaffeineContent', roastlevel = '$coffeeRoastLevel', brewingmethod = '$finalCoffeeStyle', drinktype = '$finalDrinkType', deliveryadd = '$deliveryAddress', contactnumber = '$contactNumber' WHERE order_id = '$orderId';";

                $updateResult = mysqli_query($conn, $update);

                if(!$updateResult){
                    unset($_SESSION['update_status']);
                    $_SESSION['update_status'] = 'Failed to update the order. Please try once again';
                    header("Location: ../login-ux/home.html");
                }else{
                    if(mysqli_affected_rows($conn) > 0){
                        unset($_SESSION['update_status']);
                        $_SESSION['update_status'] = 'Successfully udpated your order.';
                        header("Location: ../login-ux/home.php");
                    }else{
                        unset($_SESSION['update_status']);
                        $_SESSION['update_status'] = 'No such order to update.';
                        header("Location: ../login-ux/home.php");
                    }
                }
            }
        }
        
        else if(isset($_POST['delete_submit'])){
    
            session_start();
            $deleteId = $_POST['deleteOrderId'];    
            $userID = $_SESSION['user_id'];
            $pattern =  '/\d+/';


            if(!preg_match( $pattern, $deleteId)){
                unset($_SESSION['delete_result']);
                $_SESSION['delete_result'] = "Please input an id to delete.";
                header("Location: ../login-ux/home.php");
            }else{
                require_once('dbConn.php');
                $delete = "DELETE FROM orders WHERE order_id = '$deleteId' AND user_id = '$userID';";
                $deleteResult = mysqli_query($conn, $delete);
        
                if($deleteResult){ 
                    if(mysqli_affected_rows($conn) > 0){
                        unset($_SESSION['delete_result']);
                        $_SESSION['delete_result'] = "Deleted the order successfully";
                        header("Location: ../login-ux/home.php");
                    }else{
                        unset($_SESSION['delete_result']);
                        $_SESSION['delete_result'] = "No such order with that ID.";
                        header("Location: ../login-ux/home.php");
                    }
                }else{
                    unset($_SESSION['delete_result']);
                    $_SESSION['delete_result'] = "Couldn't delete the order";
                    header("Location: ../login-ux/home.php");
                }
            }

        }

        else if(isset($_POST['log_out_submit'])){
            session_start();
            session_unset();
            session_destroy();


            header("Location: ../index.php");
        }

        else{
            header("Location: ../login-ux/home.php");
            die();
        }

    }else{
        header("Location: ../index.php");
        die();
    }

?>