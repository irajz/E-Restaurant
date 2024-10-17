<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "webca";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$tableName = "new";
$sql = "CREATE TABLE $tableName (
    name varchar(50) NOT NULL,
    address VARCHAR(50) NOT NULL,
    username VARCHAR(50) NOT NULL PRIMARY KEY,
    password VARCHAR(200) NOT NULL,
    confirmedpassword VARCHAR(200) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close connection
$conn->close();
?>
