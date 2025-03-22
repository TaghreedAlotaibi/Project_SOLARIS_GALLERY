<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $ticket_type = $_POST["ticket_type"];
        $booking_date = $_POST["booking_date"];


        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "book";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Error" . $conn->connect_error);
        }

    
        $sql = "INSERT INTO bookings (name, email, phone, ticket_type, booking_date)
                VALUES ('$name', '$email', '$phone', '$ticket_type', '$booking_date')";

          if ($conn->query($sql) === TRUE) {
                echo "<h1> Booking Successfully</h1>";
                
            } else {
                echo "Error registering user: " . $conn->error;
            }
        $conn->close();
    }
    ?>