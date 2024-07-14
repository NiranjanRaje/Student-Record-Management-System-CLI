   <footer class="footer-style    ">
        <div class="container footer-info  animated slideInUp wow ">
        <?php
                if(!isset($_SESSION["email"])){ 
        ?>
            <div class="row   ">
                <div class="col-xs-4    ">
                    <h4 class="footer-text-size grey-text text-lighten-3 animated slideInUp wow ">Information</h4><a class="footer-text" href="about.php">About Us</a><br><a class="footer-text"
                        href="contact.php">Contact Us</a>
                </div>
                <div class="col-xs-4    ">
                    <h4 class="footer-text-size grey-text text-lighten-3 animated slideInUp wow">My Account</h4><a class="footer-text" href="" data-toggle="modal"
                        data-target="#exampleModal">Login</a><br><a class="footer-text" href="signup.php">Sign Up</a>
                </div>
                <div class="col-xs-4   ">
                    <h4 class="footer-text-size grey-text text-lighten-3 animated slideInUp wow ">Contact Us</h4>
                    <p class="footer-text ">Contact: +91-123-000000</p>
                </div>
            </div>
            <?php
            }
            else{
            ?>
            <div class="row">
                
            </div>
            <?php
            }
            ?>
        </div>
    </footer>