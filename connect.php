<?php

    $servername = "localhost";
    $username = "id19036968_chatadmin";
    $password = "Danika123I1@";
    $database = "id19036968_user";
    date_default_timezone_set('Asia/Kolkata');

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

?>