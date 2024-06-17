<html lang="en">
<head>
    <title>Learner | Home</title>
    <link rel="stylesheet" href="assets/styles.css">
    <script src="https://kit.fontawesome.com/e7b4986fbc.js" crossorigin="anonymous"></script>
    <script src="script.js" defer></script>
</head>
<body id="body">

    <?php
        session_start();
    ?>

    <div class="body-background-container"></div>

    <section id="home">
        <header>
            <nav>
                <div class="navLogoSection">
                    <img src="coffeeLogo.png" alt="Logo">
                    <h1>The OG Himalayan Beans</h1>
                </div>
                <ul id="stickyBar">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#products">Products</a></li>
                    <li><a href="#testimonials">Testimonials</a></li>
                    <li><a href="#contactUs">Contact Us</a></li>
                    <li><a href="#home" id="sign-up-button">Get Started</a></li>
                    <li><a href="#home" id="sign-in-button">Login</a></li>
                </ul>
            </nav>
        </header>
    
        <section id="greetingSection">
            <div class="MainText">
                <h1><span id="firstLineAnimator">The best <span id="coffeeText">Coffee</span><br> that you can possibly buy
                <span id="secondLineAnimator"><br>fresh and straight from the <span id="coffeeText">Himalayas</span></span>
                <span id="thirdLineAnimator"><br></span></h1>
            </div>
            <div>
                <img src="assets/coffeeBeans" alt="coffeeBeansImage">
            </div>
        </section>
        
    </section>

    <section id="products">
        <div class="productCards">
            <div class="firstCardSection">
                <div class="cards">
                    <div class="cardSectionDivider">
                        <img class="cardImage" src="assets/americanoCoffee.jpg" alt="">
                        <div class="cardText">
                            <h2>Americano</h2>
                            <p>Americano with the best beans there is. No way of beating the american style with the taste of the himalyas.</p>
                            <div class="takeAPeek">Take a peek!</div><br>
                            <div class="learnMore">Learn More</div>
                        </div>
                    </div>
                    <div id="cardBottomSection">
                        <p>The best blend with the best beans, which you can enjoy to keep track of yourself in this beautiful day. Once you get the taste, you won't move back on this. We bet.</p>
                    </div>
                </div>
                <div class="cards">
                    <div class="cardSectionDivider">
                        <img class="cardImage" src="assets/cafeAuLaitCoffee.jpg" alt="">
                        <div class="cardText">
                            <h2>Cafe Au Lait</h2>
                            <p>Prefer the taste of Himalayas in your day to day life? We've got you covered.</p>
                            <div class="takeAPeek">Take a peek!</div><br>
                            <div class="learnMore">Learn More</div>
                        </div>
                    </div>
                    <div id="cardBottomSection">
                        <p>The best blend with the best beans, which you can enjoy to keep track of yourself in this beautiful day. Once you get the taste, you won't move back on this. We bet.</p>
                    </div>
                </div>    
            </div>
            <div class="secondCardSection">
                <div class="cards">
                    <div class="cardSectionDivider">
                        <img class="cardImage" src="assets/flatWhiteCoffee.jpg" alt="">
                        <div class="cardText">
                            <h2>Flat White</h2>
                            <p>The perfect beans to take on a perfect evening cafe rest. The best way with a coffee to relax.</p>
                            <div class="takeAPeek">Take a peek!</div><br>
                            <div class="learnMore">Learn More</div>
                        </div>
                    </div>
                    <div id="cardBottomSection">
                        <p>The best blend with the best beans, which you can enjoy to keep track of yourself in this beautiful day. Once you get the taste, you won't move back on this. We bet.</p>
                    </div>
                </div>
                <div class="cards">
                    <div class="cardSectionDivider">
                        <img class="cardImage" src="assets/expressoCoffee.jpg" alt="">
                        <div class="cardText">
                            <h2>Expresso</h2>
                            <p>Bet it can't get tougher than this. Toughness is different, Toughness with a kick is different.</p>
                            <div class="takeAPeek">Take a peek!</div><br>
                            <div class="learnMore">Learn More</div>
                        </div>
                    </div>
                    <div id="cardBottomSection">
                        <p>The best blend with the best beans, which you can enjoy to keep track of yourself in this beautiful day. Once you get the taste, you won't move back on this. We bet.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonials">
        <h1>Testimonials</h1>
        <div class="firstReviewSection">            
            <div class="reviewCards">
                <div class="reviewerCards">
                    <img id="potraitImage" src="assets/reviewerPotrait1.jpg" alt="">
                    <p>"I've been having coffee for well over 10 years now. I love to start with a kick, or expresso as you'd call it. To experience such taste here thousands of miles away from the himalyas is such a flex and blessing for me. Absoulutely love it."</p>
                    <p><span id="reviewer">John Crowel</span> co-founder at xyz</p>
                </div>
                <div class="reviewerCards">
                    <img id="potraitImage" src="assets/reviewerPotrait1.jpg" alt="">
                    <p>"I've had coffee for well over 10 years now. I love to start with a kick, or expresso as you'd call it. To experience such taste here thousands of miles away from the himalyas is such a flex and blessing for me. Absoulutely love it."</p>
                    <p><span id="reviewer">John Crowel</span> co-founder at xyz</p>
                </div>            
                <div class="reviewerCards">
                    <img id="potraitImage" src="assets/reviewerPotrait1.jpg" alt="">
                    <p>"I've been having coffee for well over 10 years now. I love to start with a kick, or expresso as you'd call it. To experience such taste here thousands of miles away from the himalyas is such a flex and blessing for me. Absoulutely love it."</p>
                    <p><span id="reviewer">John Crowel</span> co-founder at xyz</p>
                </div>
            </div>
        </div>
        <div class="secondReviewSection">            
            <div class="reviewCards">
                <div class="reviewerCards">
                    <img id="potraitImage" src="assets/reviewerPotrait1.jpg" alt="">
                    <p>"I've been having coffee for well over 10 years now. I love to start with a kick, or expresso as you'd call it. To experience such taste here thousands of miles away from the himalyas is such a flex and blessing for me. Absoulutely love it."</p>
                    <p><span id="reviewer">John Crowel</span> co-founder at xyz</p>
                </div>
                <div class="reviewerCards">
                    <img id="potraitImage" src="assets/reviewerPotrait1.jpg" alt="">
                    <p>"I've been having coffee for well over 10 years now. I love to start with a kick, or expresso as you'd call it. To experience such taste here thousands of miles away from the himalyas is such a flex and blessing for me. Absoulutely love it."</p>
                    <p><span id="reviewer">John Crowel</span> co-founder at xyz</p>
                </div>            
                <div class="reviewerCards">
                    <img id="potraitImage" src="assets/reviewerPotrait1.jpg" alt="">
                    <p>"I've been having coffee for well over 10 years now. I love to start with a kick, or expresso as you'd call it. To experience such taste here thousands of miles away from the himalyas is such a flex and blessing for me. Absoulutely love it."</p>
                    <p><span id="reviewer">John Crowel</span> co-founder at xyz</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contactUs">
        <div class="leftSide">
            <div class="contactUsBackground"></div>
            <div class="contactUsBackgroundTwo"></div>
            <div class="leftSideMaterials">
                <div class="contactUsText">
                    <h1>Get To Know Us</h1>
                    <p>Learn about how we operate, write us reviews or just wave at us.</p>
                </div>
                <div class="contactForm">
                    <form action="">
                        <div class="inputArea">
                            <input type="text" id="name" required>
                            <label for="name">Your Name</label>
                        </div>
                        <div class="inputArea">
                            <input type="text" id="email" required>
                            <label for="email">Email address</label>
                        </div>
                        <div class="inputArea">
                            <input type="text" id="contactNumber" required>
                            <label for="contactNumber">Contact Number</label>
                        </div>
                        <div class="inputArea">
                            <textarea name="message" id="contactMessage" cols="30" rows="10" required></textarea>
                            <label for="contactMessage">Your Message</label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="rightSide">
            <div class="contactLinks">
                <div>
                    <h2><i class="fa-brands fa-facebook icons"></i> Facebook</h2>
                    <h2><i class="fa-brands fa-twitter icons"></i> Twitter</h2>
                    <h2><i class="fa-brands fa-youtube icons"></i> YouTube</h2>
                    <h2><i class="fa-brands fa-linkedin-in icons"></i> Linked In</h2>
                    <h2><i class="fa-solid fa-envelope icons"></i> Gmail</h2>
                </div>
            </div>
        </div>
    </section>
    <br><br><br><br>

    <div class="sign-in-container" id="sign-in-container">
            <div class="signInContainerBackground"></div>
            <div class="signIn-cross">
                <i class="fa-solid fa-xmark" id="close-button"></i>
            </div>
            <div class="signIn-header">
                <h1>Log In</h1>
            </div>
            <form action="handles/handleForm.php" method="POST">
                <div class="form-row">
                    <h3>Email: </h3>
                    <input type="email" name="email">
                </div>
                <div class="form-row">
                    <h3>Password: </h3>
                    <input type="password" name="password">
                </div>
                <div class="form-row">
                    <button type="submit" name="signInSubmit">Sign In</button>
                </div>
            </form>
            <div class="signIn-resultMessage">
            <?php
                if(isset($_SESSION['loginFailMessage']) || isset($_SESSION['loginFromHere'])){
                    if(isset($_SESSION['loginFromHere'])){
                        echo "<h3 style='color: green;'>". $_SESSION['loginFromHere'] ."</h3>";
                        unset($_SESSION['loginFromHere']);
                    }

                    if(isset($_SESSION['loginFailMessage'])){
                        echo "<h3>". $_SESSION['loginFailMessage'] ."</h3>";
                        unset($_SESSION['loginFailMessage']);
                    }

                    echo "<script>";
                    echo "var body = document.getElementById('body');";
                    echo "var homeSection = document.getElementById('home');";
                    echo "var greetingSection = document.getElementById('greetingSection');";
                    echo "var productSection = document.getElementById('products');";
                    echo "var testimonialSection = document.getElementById('testimonials');";
                    echo "var contactUsSection = document.getElementById('contactUs');";
                    echo "var bodyBackgroundContainer = document.getElementsByClassName('body-background-container');";
                    
                    echo "var signInContainer = document.getElementById('sign-in-container');";
                    echo "var signUpContainer = document.getElementById('sign-up-container');";

                    echo "function popUp(screen, secondary){";
                        // echo "homeSection.style.filter = 'blur(2px)';";
                        // echo "homeSection.style.pointerEvents = 'none';";
                        // echo "homeSection.style.userSelect = 'none';";
                        // echo "bodyBackgroundContainer[0].style.filter = 'blur(2px)';";
                    
                        echo "productSection.style.display = 'none';";
                        echo "contactUsSection.style.display = 'none';";
                        echo "testimonialSection.style.display = 'none';";
                    
                        echo "screen.style.display = 'flex';";
                        echo "secondary.style.display = 'none';";

                    echo "}";

                    echo "popUp(signInContainer, signUpContainer);";
                    echo "</script>";
                }
            ?>
            </div>
            <div class="signIn-footer">
                <h3>Don't have an account? <span id="sign-up-button-one">Sign up</span></h3>
            </div>
    </div>

    <div class="sign-up-container" id="sign-up-container">
        <div class="signIn-cross">
            <i class="fa-solid fa-xmark" id="sign-up-close-button"></i>
        </div>
        <div class="signUp-header">
            <h1>Register an account</h1>
        </div>
        <form action="handles/handleForm.php" method="POST">
            <div class="signup-form-row">
                <h3>Username: </h3>
                <input type="text" name="username">
            </div>
            <div class="signup-form-row">
                <h3>Email: </h3>
                <input type="email" name="email">
            </div>
            <div class="signup-form-row">
                <h3>Password: </h3>
                <input type="password" name="password">
            </div>
            <div class="signup-form-row">
                <h3>Re-type Password: </h3>
                <input type="password" name="passwordOne">
            </div>
            <div class="signup-form-row">
                <div class="signup-button-container">
                    <button type="submit" name="signUpSubmit">Sign Up</button>
                </div>
            </div>
            <?php
                if(isset($_SESSION['passwordErrorMessage'])){

                    echo '<div class="signup-form-row" style="color: red;">';
                    echo "<h3>". $_SESSION['passwordErrorMessage'] ."</h3>";
                    echo '</div>';
                    unset($_SESSION['passwordErrorMessage']);
                    
                    
                    echo "<script>";
                    echo "var body = document.getElementById('body');";
                    echo "var homeSection = document.getElementById('home');";
                    echo "var greetingSection = document.getElementById('greetingSection');";
                    echo "var productSection = document.getElementById('products');";
                    echo "var testimonialSection = document.getElementById('testimonials');";
                    echo "var contactUsSection = document.getElementById('contactUs');";
                    echo "var bodyBackgroundContainer = document.getElementsByClassName('body-background-container');";
                    
                    echo "var signInContainer = document.getElementById('sign-in-container');";
                    echo "var signUpContainer = document.getElementById('sign-up-container');";

                    echo "function popUp(screen, secondary){";
                        echo "homeSection.style.filter = 'blur(2px)';";
                        echo "homeSection.style.pointerEvents = 'none';";
                        echo "homeSection.style.userSelect = 'none';";
                        echo "bodyBackgroundContainer[0].style.filter = 'blur(2px)';";
                    
                        echo "productSection.style.display = 'none';";
                        echo "contactUsSection.style.display = 'none';";
                        echo "testimonialSection.style.display = 'none';";
                    
                        echo "secondary.style.display = 'none';";
                        echo "screen.style.display = 'flex';";
                    echo "}";

                    echo "popUp(signUpContainer, signInContainer);";
                    echo "</script>";
                }
            ?>
        </form>
        <div class="signUp-footer">
            <h3>Already have an account? <span id="sign-in-button-one">Log In</span></h3>
        </div>
        <div class="signUp-resultMessage"></div>
</div>
</body>
</html>