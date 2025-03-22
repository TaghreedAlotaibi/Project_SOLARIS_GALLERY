<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
    $usename = $_POST["username"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
   

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "regist";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Error" . $conn->connect_error);
        }

    
        $sql = "INSERT INTO form (username,name, email, password)
                VALUES ('$usename', '$name', '$email', '$password')";

          if ($conn->query($sql) === TRUE) {
                echo "<h1> Registered Successfully</h1>";
                exit();
            } else {
                echo "Error registering user: " . $conn->error;
            }
        $conn->close();
    }

    ?>