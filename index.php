<?php
    session_start();
    $_SESSION['userLogged'] = false;
    $_SESSION['accessPages'] = false;
 
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Chiranjiv's eyes</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    </head>
    <body>
        <div class="container">
            <div class="header">
                <div class="logo-menu">
                    <div class="logo">Chiranjiv's eyes</div>
                    <div class="menu">
                        <a href="#" id="close-dropdown">X</a>
                        <a href="#">About us</a>
                        <a href="#" id="message">Message us</a>
                        <a href="#" id="admin">Admin</a>
                    
                    </div>
                <i class="fas fa-th-list drop-down"></i>
                </div>
                <div class="main-header">
                    <p>The best photos shared by Chiranjiv Sharma.</p>
                    <div class="input">
                        <input type="text" placeholder="Search Images...">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
                

            </div>
            <div class="type-section">
                <div class="home">Home</div>
                <div class="animal">Animals</div>
                <div class="birds">Birds</div>
                <div class="human">Human</div>
            </div>
            <div class="images">
                <div>
                <img src="./images/1.jpg">
                <img src="./images/2.jpg">
                <img src="./images/3.jpg">
                <img src="./images/4.jpg">
                <img src="./images/5.jpg">
                <img src="./images/6.jpg">
                <img src="./images/1.jpg">
                <img src="./images/2.jpg">
                <img src="./images/3.jpg">
                <img src="./images/4.jpg">
                <img src="./images/5.jpg">
                <img src="./images/6.jpg">
                <img src="./images/1.jpg">
                <img src="./images/2.jpg">
                <img src="./images/3.jpg">
                <img src="./images/4.jpg">
                <img src="./images/5.jpg">
                <img src="./images/6.jpg">
                <img src="./images/1.jpg">
                <img src="./images/2.jpg">
            
                </div>
                <div>
              
                <img src="./images/5.jpg">
                <img src="./images/6.jpg">
                <img src="./images/1.jpg">
                <img src="./images/2.jpg">
                <img src="./images/3.jpg">
                <img src="./images/4.jpg">
                <img src="./images/5.jpg">
                <img src="./images/6.jpg">
                <img src="./images/1.jpg">
                <img src="./images/2.jpg">
                <img src="./images/3.jpg">
                <img src="./images/4.jpg">
                <img src="./images/5.jpg">
                <img src="./images/6.jpg">
                <img src="./images/1.jpg">
                <img src="./images/2.jpg">
                <img src="./images/3.jpg">
                <img src="./images/4.jpg">
                <img src="./images/5.jpg">
                <img src="./images/6.jpg">
                </div>
                <div>
                <img src="./images/1.jpg">
                <img src="./images/2.jpg">
                <img src="./images/3.jpg">
                <img src="./images/4.jpg">
                <img src="./images/5.jpg">
                <img src="./images/6.jpg">
                <img src="./images/1.jpg">
                <img src="./images/2.jpg">
                <img src="./images/3.jpg">
                <img src="./images/4.jpg">
                <img src="./images/5.jpg">
              
                <img src="./images/4.jpg">
                <img src="./images/5.jpg">
                <img src="./images/6.jpg">
                <img src="./images/1.jpg">
                <img src="./images/2.jpg">
                <img src="./images/3.jpg">
                <img src="./images/4.jpg">
                <img src="./images/5.jpg">
                <img src="./images/6.jpg">
                </div>
            </div>
            <div class="footer">
                <div class="social-media">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-instagram-square"></i>
                    <i class="fab fa-twitter"></i>
                </div>
                <h5>Chiranjivs's eyes</h5>
                <div class="about-developer">
                    About Developer - <a href="#">Gopi Kumar Kaushik</a>
                </div>
            </div>
        </div>
        <div class="login-form">
            <div class="close-form">X</div>
            <form action="./pages/admin-login.php" method="post">
                <label for="user">Username</label>
                <input type="text" name="user" id="user">
                <label for="password">Password</label>
                <input type="text" name="password" id="password">
                <button type="submit" name="submit">Submit</button>
            </form>
        </div>
        


        <div class="message-form">
            <div class="close-message-form">X</div>
            <form action="./pages/send-message.php" method="post">
                <label for="name">Name</label>
                <input type="text" name="name" id="name">
                <label for="message">Your Messasge</label>
                <textarea name="message" id="message" cols="30" rows="10"></textarea>
                <button type="submit" name="submit">Send</button>
            </form>
        </div>
        
    

    </body>
        
</html>
    <script>
        const drop_down = document.querySelector(".drop-down");
        const close_dropdown = document.querySelector("#close-dropdown");
        const menu =  document.querySelector(".menu");
        const admin = document.querySelector("#admin");
        const form = document.querySelector(".login-form");
        const close_form = document.querySelector(".close-form");
        const message = document.querySelector("#message");
        const message_form = document.querySelector(".message-form");
        const close_message_form = document.querySelector(".close-message-form");

        drop_down.addEventListener("click", ()=>{
           menu.style.display="flex";
        })

        close_dropdown.addEventListener("click", ()=>{
            menu.style.display = "none";
        })

        admin.addEventListener("click", ()=>{
           form.style.display = "flex";
        })
        close_form.addEventListener("click", ()=>{
            form.style.display = "none";
        })

        message.addEventListener("click", ()=>{
            message_form.style.display = "block"
        })
        close_message_form.addEventListener("click", ()=>{
            message_form.style.display = "none";
        })

    </script>
<?php

?>