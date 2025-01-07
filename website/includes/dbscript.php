<?php

$dbname = "reservation_system";

$config = parse_ini_file('../../../private/cred.ini'); 
$conn = new mysqli($config['servername'],$config['username'],$config['password']);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the database exists
$sql_check_db = "SHOW DATABASES LIKE '$dbname'";
$result = $conn->query($sql_check_db);

if ($result->num_rows == 0) {
 
    $sql_create_db = "CREATE DATABASE $dbname";
    
    if ($conn->query($sql_create_db) === TRUE) {
        echo "Database created successfully.<br>";
    } else {
        echo "Error creating database: " . $conn->error . "<br>";
        die();
    }
} else {
    echo "Database '$dbname' already exists.<br>";
}

// Close the connection to the MySQL server
$conn->close();

$connection = new mysqli($config['servername'],$config['username'],$config['password'],$config['dbname']);

//execute sql creation tables script and insert query

$sql = "


CREATE TABLE `users` (

    `id` INT AUTO_INCREMENT PRIMARY KEY,    
    `email` VARCHAR(255) NOT NULL UNIQUE,            
    `password` VARCHAR(255) NOT NULL,                
    `role` ENUM('staff', 'diner') NOT NULL,          
    `name` VARCHAR(255) DEFAULT NULL                
);

CREATE TABLE `staff` (

    `id` INT AUTO_INCREMENT PRIMARY KEY,    
    `email` VARCHAR(255) NOT NULL UNIQUE,            
    `password` VARCHAR(255) NOT NULL,                
    `role` ENUM('staff', 'diner') NOT NULL,          
    `name` VARCHAR(255) DEFAULT NULL                
);

CREATE TABLE service_setup (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    service_date DATE NOT NULL,
    service VARCHAR(50) NOT NULL, 
    time_start TIME NOT NULL,
    time_end TIME NOT NULL,
    tables_available INT NOT NULL,
    tables_booked INT DEFAULT 0,
    service_status VARCHAR(50) NOT NULL 
);

CREATE TABLE reservation (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    email VARCHAR(100) NOT NULL,
    name VARCHAR(100) NOT NULL, 
    phone_number VARCHAR(15) NULL, 
    service VARCHAR(50) NOT NULL, 
    reservation_date DATE NOT NULL, 
    time_booked TIME NOT NULL, 
    party_size INT NOT NULL, 
    tables INT NOT NULL, 
    extra_requirements TEXT
   
);


CREATE TABLE default_services (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    service VARCHAR(50) NOT NULL, 
    time_start TIME NOT NULL,
    time_end TIME NOT NULL,
    tables_available INT NOT NULL,
    service_status VARCHAR(50) NOT NULL 
);




INSERT INTO default_services (service, time_start, time_end, tables_available, service_status)
VALUES ('Breakfast', '07:30:00', '10:30:00', 10, 'Available'),
('Lunch', '12:00:00', '14:30:00', 10, 'Available'),
('Dinner', '17:00:00', '22:30:00', 10, 'Available');


";

if ($connection->multi_query($sql) === TRUE) {
    echo "Tables created successfully.<br>";
} else {
    echo "Error creating tables: " . $connection->error . "<br>";
}


