<?php
    try{
        include('../dbconn.php');
        include('../globalVariables.php');

        $user = $_POST["user"];
        $password = $_POST["password"];
        $sql = "SELECT * FROM admin WHERE user = '$user' AND password = '$password'";
        $result = $conn->prepare($sql);
        $result->execute();
        if($result->fetchColumn())
        {
            $GLOBALS['userLogged'] = true;
            header("Location:./admin-panel.php");
        }
        else{
            echo "<script>alert('wrong password or user name')</script>";
        }
    
    }catch(PDOException $e){
        echo  $sql . "<br>".$e->getMessage();

    }

?>