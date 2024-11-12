<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cozysnooze";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);

    if (!$result) {
        // Handle query error
        echo "Query error: " . mysqli_error($conn);
        return [];
    }

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}  