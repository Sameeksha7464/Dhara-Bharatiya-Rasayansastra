<?php
    $name =$_POST['name'];
    $email =$_POST['email'];
    $subject = $_POST['subject'];

    $conn = new mysqli('localhost', 'root', '', 'dhara');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into register(name, email, subject) value(?,?,?)");
        $stmt->bind_param("ssi", $name, $email, $subject);
        $stmt->execute();
        echo "Registration Successful";
        $stmt->close();
        $conn->close();
    }
?>

