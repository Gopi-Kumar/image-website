<?php
    try {
        include('../dbconn.php');
        $name = $_POST["name"];
        $message = $_POST["message"];
        $sql = "INSERT INTO messages (name, message)
                VALUE ('$name', '$message')";
        $conn->exec($sql);
        echo "message send";
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
?>