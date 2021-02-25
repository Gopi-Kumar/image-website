<?php
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Chiranjiv's eyes</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    </head>
    <body>
        <div class="container">
            <div class="header">
                <div class="logo-menu">
                    <div class="logo">Chiranjiv's eyes</div>
                    <div class="main-header">
                    <div class="input">
                        <input type="text" placeholder="Search Images...">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
                    <div class="menu">
                        <a href="#" id="close-dropdown">X</a>
                        <a href="#">About us</a>
                        <a href="#">More</a>
                        <a href="#" id="admin">Admin</a>
                    
                    </div>
                <i class="fas fa-th-list drop-down"></i>
                </div>
            
                

            </div>
            <div class="type-section">
                <div class="home">Home</div>
                <div class="animal">Animals</div>
                <div class="birds">Birds</div>
                <div class="human">Human</div>
            </div>
            <div class="images">
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
            <img src="./images/3.jpg">
            <img src="./images/4.jpg">
            <img src="./images/5.jpg">
            <img src="./images/6.jpg">
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

    

    </body>
        
</html>
    <script>
        const drop_down = document.querySelector(".drop-down");
        const close_dropdown = document.querySelector("#close-dropdown");
        const menu =  document.querySelector(".menu");

        drop_down.addEventListener("click", ()=>{
           menu.style.display="flex";
        })

        close_dropdown.addEventListener("click", ()=>{
            menu.style.display = "none";
        })
    </script>
<?php

?>