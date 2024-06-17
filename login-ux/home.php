<html lang="en">
<head>
    <title>Home | 
    <?php
        session_start();
        echo $_SESSION['user_name'];
    ?>

    </title>
    <link rel="stylesheet" href="user-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kode+Mono:wght@400..700&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kode+Mono:wght@400..700&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <script src="user-script.js" defer></script>
</head>
<body>

    <div class="left-body">

        <div class="left-body-upper-section">

            <div class="navigation-option-block" id="view-navigator">
                <h1>View Orders</h1>
            </div>
            <div class="navigation-option-block" id="update-navigator">
                <h1>Update Order</h1>
            </div>
            <div class="navigation-option-block" id="delete-navigator">
                <h1>Delete Order</h1>
            </div>

        </div>
        <div class="left-body-lower-section">
            <div class="navigation-option-block" id="log-out-button">
                <form action="../handles/handleOrder.php" method='POST'>
                    <button type='submit' name='log_out_submit'><h1>Log out</h1></button>
                </form>
            </div>
        </div>


    </div>
    <div class="right-body-order-page">

        <div class="order-upper-half">
            <h1>Hello there <?php
                echo $_SESSION['user_name'];
        ?></h1>
        </div>

        <div class="order-lower-half">

            <h1>What kind of coffee do you want ?</h1>

            <?php
                if(isset($_SESSION['order_error'])){
                    echo "<h3 style='color: red'>".$_SESSION['order_error'] ."</h3>";
                    unset($_SESSION['order_error']);
                }

                if(isset($_SESSION['order_success'])){
                    echo "<h3 style='color: green'>".$_SESSION['order_error'] ."</h3>";
                    unset($_SESSION['order_success']);
                }

            ?>

            <form action="../handles/handleOrder.php" method="POST">
                <fieldset>
                    <div class="order-form-row">
                        <label for="coffee-bean">Select the type of bean</label><br><br>
                        <select name="coffee-beans" id="coffee-bean">
                            <option value="default" selected disabled>Select the bean here!</option>
                            <option value="himalayanSupreme">Himalayan Supreme</option>
                            <option value="himalayanExquisite">Himalayan Exquisite</option>
                            <option value="himalayanAroma">Himalayan Aroma</option>
                            <option value="himalayanBase">Himalayan Base</option>
                        </select><br><br>
                    </div>
                    <div class="order-form-row">
                        <label for="coffee-caffeine-content">Select the level of caffeine</label><br><br>
                        <select name="coffee-caffeine-content" id="coffee-caffeine-content">
                            <option value="default" selected disabled>Select here!</option>
                            <option value="highCaffeine">High Caffeine</option>
                            <option value="midHighCaffeine">Mid High Caffeine</option>
                            <option value="midCaffeine">Mid Caffeine</option>
                            <option value="lowCaffeine">Low Caffeine</option>
                        </select><br><br>
                    </div>
                    <div class="order-form-row">
                        <label for="coffee-roast-level">Select the roast level</label><br><br>
                        <select name="coffee-roast-level" id="coffee-roast-level">
                            <option value="default" selected disabled>Select here!</option>
                            <option value="darkRoast">Dark Roast</option>
                            <option value="midRoast">Medium Roast</option>
                            <option value="lightRoast">Light Roast</option>
                        </select><br><br>
                    </div>
                    <div class="order-form-row">
                        <label for="coffee-flavour-profile">Select your flavour profile |Optional|</label><br><br>
                        <select name="coffee-flavour-profile" id="coffee-flavour-profile">
                            <option value="default" selected disabled>Select here!</option>
                            <option value="floral">Floral</option>
                            <option value="fruity">Fruity</option>
                            <option value="chocolatey">Chocolatey</option>
                            <option value="nutty">Nutty</option>
                        </select><br><br> <br><br>
                    </div>
                    <div class="order-form-row">
                        <label for="question">What kind of coffee style do you prefer?</label><br><br>
                        <label>Brewing Methods: </label>
                        <input type="checkbox" name="coffeeStyle[]" value="espresso" id="espresso">
                        <label for="espresso">Espresso</label>
                        <input type="checkbox" name="coffeeStyle[]" value="frenchPress" id="frenchPress">
                        <label for="frenchPress">French press</label>
                        <input type="checkbox" name="coffeeStyle[]" value="pourOver" id="pourOver">
                        <label for="pourOver">Pour-over</label>
                        <input type="checkbox" name="coffeeStyle[]" value="aeroPress" id="aeroPress">
                        <label for="aeroPress">AeroPress</label> <br><br>
              
                        <label>Drink Type: </label>
                        <input type="checkbox" name="drinkType[]" value="espressoD" id="espressoD">
                        <label for="espressoD">Espresso</label>
                        <input type="checkbox" name="drinkType[]" value="americano" id="americano">
                        <label for="americano">Americano</label>
                        <input type="checkbox" name="drinkType[]" value="cappuccino" id="cappuccino">
                        <label for="cappuccino">Cappuccino</label>
                        <input type="checkbox" name="drinkType[]" value="latte" id="latte">
                        <label for="latte">Latte</label>
                        <input type="checkbox" name="drinkType[]" value="macchiato" id="macchiato">
                        <label for="macchiato">Macchiato</label> <br><br><br>

                        <label for="userPreferences">Anything you'd like to add ? |Optional|</label> <br><br>
                        <textarea name="userPreferences" id="userPreferences" cols="80" rows="10" style="resize: none;"></textarea> 
                        <br><br><br>

                        <label for="deliveryAddress">Delivery Address: </label> <br><br>
                        <input type="text" name="deliveryAddress" id="deliveryAddress">
                        <br><br>

                        <label for="deliveryAddress">Contact Number: </label> <br><br>
                        <input type="number" name="contactNumber" id="contactNumber">

                        <br><br>
                        <button type="submit" name="order_submit" id="order_submit">Place the order.</button>
                        
                    </div>
                </fieldset>
            </form>

            <br><br><br>
        </div>
    </div>

    <div class="right-body-viewOrder-page hidden">
        <div>
            <h1>Your orders: </h1>
            <ul>
                <?php
                    require_once('../handles/dbConn.php');
                    $userID = $_SESSION['user_id'];
                    $query = "SELECT order_id, beantype, caffeinelevel, deliveryadd, contactnumber FROM orders WHERE user_id = '$userID';";
                    $result = mysqli_query($conn, $query);

                    if(!$result){
                        die();
                    }else{
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<li>";
                            echo "<h2 style='color: rgb(1,1,25);'>Order ID: ". $row['order_id'] . "<h2>";
                            echo "<h4 style='color: purple;'>Bean Type: </h4>"; 
                            echo "<p style='color: gray;'>". $row['beantype'] ."</p>";
                            echo "<h4 style='color: purple;'>Caffeine Level: </h4>";
                            echo "<p style='color: gray;'>". $row['caffeinelevel'] ."</p>";
                            echo "<h4 style='color: purple;'>Delivery Address: </h4>";
                            echo "<p style='color: gray;'>". $row['deliveryadd'] ."</p>";
                            echo "<h4 style='color: purple;'>Contact Number: </h4>";
                            echo "<p style='color: gray;'>". $row['contactnumber'] ."</p>";
                            echo "</li>";
                        }
                    }
                ?>

            </ul>
        </div>
    </div>

    <div class="right-body-updateOrder-page hidden">
        <h1>Update page</h1>
        <form action="../handles/handleOrder.php" method='POST'>

            <?php
                if(isset($_SESSION['update_status'])){
                    echo "<script>";
                    echo "var updateOrderPage = document.getElementsByClassName('right-body-updateOrder-page')[0];";
                    echo "updateOrderPage.classList.remove('hidden');";
                    echo "</script>";
                    echo "<h4 style='color: green'>".$_SESSION['update_status']."</h4>";
                    unset($_SESSION['update_status']);
                }
            ?>

            <div class="order-form-row">
                <label for="orderId">Enter the order id: </label> <br><br>
                <input type="text" name="orderId" id="orderId"> <br><br><br>
            </div>
            <div class="order-form-row">
                <label for="coffee-bean">Select the type of bean</label><br><br>
                <select name="coffee-beans" id="coffee-bean">
                    <option value="default" selected disabled>Select the bean here!</option>
                    <option value="himalayanSupreme">Himalayan Supreme</option>
                    <option value="himalayanExquisite">Himalayan Exquisite</option>
                    <option value="himalayanAroma">Himalayan Aroma</option>
                    <option value="himalayanBase">Himalayan Base</option>
                </select><br><br>
            </div>
            <div class="order-form-row">
                <label for="coffee-caffeine-content">Select the level of caffeine</label><br><br>
                <select name="coffee-caffeine-content" id="coffee-caffeine-content">
                    <option value="default" selected disabled>Select here!</option>
                    <option value="highCaffeine">High Caffeine</option>
                    <option value="midHighCaffeine">Mid High Caffeine</option>
                    <option value="midCaffeine">Mid Caffeine</option>
                    <option value="lowCaffeine">Low Caffeine</option>
                </select><br><br>
            </div>
            <div class="order-form-row">
                <label for="coffee-roast-level">Select the roast level</label><br><br>
                <select name="coffee-roast-level" id="coffee-roast-level">
                    <option value="default" selected disabled>Select here!</option>
                    <option value="darkRoast">Dark Roast</option>
                    <option value="midRoast">Medium Roast</option>
                    <option value="lightRoast">Light Roast</option>
                </select><br><br>
            </div>
            
            <div class="order-form-row">
                <label>Update Brewing Methods: </label> <br><br>
                <input type="checkbox" name="coffeeStyle[]" value="espresso" id="espressoU">
                <label for="espressoU">Espresso</label>
                <input type="checkbox" name="coffeeStyle[]" value="frenchPress" id="frenchPressU">
                <label for="frenchPressU">French press</label>
                <input type="checkbox" name="coffeeStyle[]" value="pourOver" id="pourOverU">
                <label for="pourOverU">Pour-over</label>
                <input type="checkbox" name="coffeeStyle[]" value="aeroPress" id="aeroPressU">
                <label for="aeroPressU">AeroPress</label> <br><br>
        
                <label>Update Drink Type: </label> <br><br>
                <input type="checkbox" name="drinkType[]" value="espresso" id="espressoDU">
                <label for="espressoDU">Espresso</label>
                <input type="checkbox" name="drinkType[]" value="americano" id="americanoU">
                <label for="americanoU">Americano</label>
                <input type="checkbox" name="drinkType[]" value="cappuccino" id="cappuccinoU">
                <label for="cappuccinoU">Cappuccino</label>
                <input type="checkbox" name="drinkType[]" value="latte" id="latteU">
                <label for="latteU">Latte</label>
                <input type="checkbox" name="drinkType[]" value="macchiato" id="macchiatoU">
                <label for="macchiatoU">Macchiato</label> <br><br><br>

                <label for="deliveryAddressU">Delivery Address: </label> <br><br>
                <input type="text" name="deliveryAddress" id="deliveryAddressU">
                <br><br>

                <label for="deliveryAddressU">Contact Number: </label> <br><br>
                <input type="number" name="contactNumber" id="contactNumberU">

                <br><br>
                <button type="submit" name="update_submit" id="update_submit">Update the order.</button>   
            </div>
        </form>
    </div>



    <div class='right-body-deleteOrder-page hidden'>
        <h1>Delete your order here.</h1>
        <form action="../handles/handleOrder.php" method='POST'>
            <label for="deleteOrderId">Enter the order id to delete: </label><br><br>
            <input type="text" name="deleteOrderId" id="deleteOrderId"><br><br><br>
            <button type="submit" name='delete_submit' id="delete_submit">Delete this order.</button>

            <?php
                if(isset($_SESSION['delete_result'])){
                    echo "<script>";
                    echo "var deleteOrderPage = document.getElementsByClassName('right-body-deleteOrder-page')[0];";
                    echo "deleteOrderPage.classList.remove('hidden');";
                    echo "</script>";
                    echo "<h3 style='color: green;'>".$_SESSION['delete_result']."</h3>";
                    unset($_SESSION['delete_result']);
                }
            ?>
        </form>



    </div>

    
</body>
</html>