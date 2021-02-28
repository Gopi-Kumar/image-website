<?php
    session_start();
    if(!is_null($_POST['user']))
    {
        try{
        
            include('../dbconn.php');
            $user = $_POST["user"];
            $password = $_POST["password"];
            $sql = "SELECT * FROM admin WHERE user = '$user' AND password = '$password'";
            $result = $conn->prepare($sql);
            $result->execute();
            if($result->fetchColumn() > 0)
            {
                $_SESSION['userLogged'] = true;
                header("Location:./admin-panel.php");
            }
            else{
                echo "<script>alert('wrong password or user name')</script>";
                echo "<script>window.location.href='../index.php'</script>";
            }
        }catch(PDOException $e){
            echo  $sql . "<br>".$e->getMessage();
        }
    }else{
        echo "<script>window.location.href='../index.php'</script>";
    }

?>