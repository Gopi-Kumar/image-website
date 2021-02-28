<?php
    session_start();
    if($_SESSION['userLogged'])
    {   
        try {
           include('../dbconn.php');
           $tmp_name = $_FILES["image"]["tmp_name"];
           $img_name = $_POST["name"];
           $img_tags = $_POST["tags"];
           $name = basename($_FILES["image"]["name"]);
           
           move_uploaded_file($tmp_name, "../uploadedImages/$name");
           $sql = "INSERT INTO `images` (name,tags,src) VALUES('$img_name','$img_tags','/uploadedImages/$name')";
           $conn->exec($sql);
           ?>
                <style>
                @import url('https://fonts.googleapis.com/css2?family=Potta+One&display=swap');
                @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;400&family=Potta+One&display=swap');
                @import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');
                    *{
                        margin:0;
                        padding:0;
                        box-sizing:border-box;
                        font-family: 'Noto Sans KR', sans-serif;

                    }
                    .img-uploaded{
                        width:100%;
                        height:100%;
                        background-color:rgb(0,25,80);
                        color:white;
                        display:flex;
                        flex-direction:column;
                        justify-content:center;
                        align-items:center;
                        text-align:center;
                    }
                    .img-uploaded button{
                        color:rgb(0,25,80);
                        padding:1rem 2rem;
                        margin-top:1rem;
                        font-size:1rem;
                    }
                </style>
                
                <div class="img-uploaded">
                    <form action="./admin-panel.php" method="post">
                        <h1>Image uploaded successfully.</h1>
                        <button>Back to admin panel</button>
                    </form>
                </div>
           <?php
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }else{
        header("Location: ../index.php");
    }
?>