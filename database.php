<?php
class Database {
    private $hostname;
    private $username;
    private $password;
    private $dbname;
    private $connection;

    public function __construct(){
        $this->hostname = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "drugdispensarydb";

        try {
            $this->connection = new PDO("mysql:host=$this->hostname;dbname=$this->dbname", $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            exit(); // Exit the script if the connection fails
        }

        return $this->connection;
    }

    // Patient signup
    public function patientSignup($SSN, $Name, $phoneNumber, $password, $address, $gender){
        try {
            $stmt = $this->connection->prepare("INSERT INTO patient (SSN, Name, phoneNumber, password, address, gender) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->execute([$SSN, $Name, $phoneNumber, $password, $address, $gender]);
            return true; // Return true if the signup was successful
        } catch(PDOException $e) {
            return false; // Return false if an error occurred
        }
    }

    // Doctor signup
    public function doctorSignup($SSN, $Name, $phoneNumber, $password, $address, $specialty){
        try {
            $stmt = $this->connection->prepare("INSERT INTO doctor (SSN, Name, phoneNumber, password, address, specialty) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->execute([$SSN, $Name, $phoneNumber, $password, $address, $specialty]);
            return true; // Return true if the signup was successful
        } catch(PDOException $e) {
            return false; // Return false if an error occurred
        }
    }

    // Login using SSN and password for patients
    public function patientLogin($SSN, $password){
        try {
            $stmt = $this->connection->prepare("SELECT * FROM patient WHERE SSN = ? AND password = ?");
            $stmt->execute([$SSN, $password]);
            $result = $stmt->fetchAll();
            // Confirm if the user exists and the password is correct
            if (count($result) > 0){
                return true; // Return true if login is successful
            } else {
                return false; // Return false if login failed
            }
        } catch(PDOException $e) {
            return false; // Return false if an error occurred
        }
    }

    // Login using SSN and password for doctors
    public function doctorLogin($SSN, $password){
        try {
            $stmt = $this->connection->prepare("SELECT * FROM doctor WHERE SSN = ? AND password = ?");
            $stmt->execute([$SSN, $password]);
            $result = $stmt->fetchAll();
            // Confirm if the user exists and the password is correct
            if (count($result) > 0){
                return true; // Return true if login is successful
            } else {
                return false; // Return false if login failed
            }
        } catch(PDOException $e) {
            return false; // Return false if an error occurred
        }
    }
}
?>
