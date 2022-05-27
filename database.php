<?php

    $hostname = "localhost";
    $username = "u110470994_satguru";
    $password = "Test@123";

    try {
        $connection = new PDO("mysql:host=$hostname;dbname=u110470994_satguru", $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Database connection failed: " . $e->getMessage();
    }

?>