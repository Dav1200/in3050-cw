<?php
namespace In3050Inm428WebDev\PhpMvc\Models;
require_once('./includes/dbconnect.php');
class DinerAuth
{

    public function __construct()
    {

    }

    //register new account for diner
    public function dbRegisterDiner($Email, $pass, $name): bool
    {
        //assign default role to diner
        $role = "diner";
        //connect to db
        $db = db_connect();

        //check if email already exists
        $checkSql = "SELECT email FROM users WHERE LOWER(email) = LOWER(?) and role = 'diner'";
        $checkStmt = $db->prepare($checkSql);
        $checkStmt->bind_param("s", $Email);
        $checkStmt->execute();
        $checkStmt->store_result();

        if ($checkStmt->num_rows > 0) {
            $checkStmt->close();
            return false; // email already exists
        }

        $checkStmt->close();

        //sql query to insert user into db
        $sql = "INSERT INTO users (email, password, role, name) VALUES (?, ?, ?, ?)";
        //prepare the sql query
        $stmt = $db->prepare($sql);
        //hash the password
        $password = password_hash($pass, PASSWORD_DEFAULT);
        //bind the parameters
        $stmt->bind_param("ssss", $Email, $password, $role, $name);
        //execute the query and return true if successful
        if ($stmt->execute()) {
            $stmt->close();
            return true;
        } else {
            $stmt->close();
            return false;
        }
    }
    //validation for diner to check if their credentials are correct
    public function dbCheckDiner($email, $pass): array
    {
        $db = db_connect();
        $sql = "SELECT * FROM users WHERE LOWER(email) = LOWER(?) and role = 'diner'";
        $stmt = $db->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        //check if user exists and match their password
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            // Verify password hash
            if (password_verify($pass, $user['password'])) {
                // Password matches, proceed with login
                return $user;

            } else {
                // Password does not match
                return [];

            }
        } else {
            return [];
        }



    }
    //change diner password
    public function dbChangePassword($email,$pass): bool{
        $db = db_connect();
        $sql = "UPDATE users SET password = ? WHERE LOWER(email) = LOWER(?)";
        $stmt = $db->prepare($sql);
        //hash the password
        $password = password_hash($pass, PASSWORD_DEFAULT);
        //bind the parameters
        $stmt->bind_param("ss", $password, $email);
        // return true if successful
        if ($stmt->execute()) {
            $stmt->close();
            return true;
        } else {
            $stmt->close();
            return false;
        }
    }

    //check if diner if exists 
    public function dbCheckUser($email): bool
    {
        $db = db_connect();
        $sql = "SELECT * FROM users WHERE  LOWER(email) = LOWER(?) and role = 'diner'";
        $stmt = $db->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }



}