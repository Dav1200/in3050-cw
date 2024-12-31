<?php

namespace In3050Inm428WebDev\PhpMvc\Models;
require_once('./includes/dbconnect.php');
class StaffAuth
{
    
    public function __construct()
    {
       
    }

    #DB FUNCTIONS ONLY
    #helper function to check if atleast one staff exists in db to redirect to login page
    public function checkStaffAccountdb(): bool
    {

        $db = db_connect();
        if ($db) {
            echo "<script>console.log('Database connection successful.');</script>";
        } else {
            echo "<script>console.log('Database connection failed.');</script>";
        }
        $sql = "SELECT * FROM users WHERE role = 'staff'";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            // Fetch the first result
            return true;
        } else {

            return false;
        }
    }


    #helper function to create staff account
    public function createStaffdb($name, $email, $password, $role): bool
    {
        $db = db_connect();
        $sql = "INSERT INTO users (email, password, role,name) VALUES (?, ?, ?, ?)";
        $stmt = $db->prepare($sql);
        $password = password_hash($password, PASSWORD_DEFAULT);
        $stmt->bind_param("ssss", $email, $password, $role, $name);
        if ($stmt->execute()) {
            $stmt->close();
            return true;
        } else {
            $stmt->close();
            return false;
        }


    }


    #when staff logins this function checks their credentials if they exist in db
    public function loginValidationdb($email, $pass): bool
    {
        $username = $email;
        $password = $pass;
        $db = db_connect();
        $sql = "SELECT * FROM users WHERE LOWER(email) = LOWER(?) and role = 'staff'";
        $stmt = $db->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            // Verify password hash
            if (password_verify($password, $user['password'])) {
                // Password matches, proceed with login
                return true;

            } else {
                // Password does not match
                return false;

            }
        } else {
            return false;
        }

    }
}

