<?php

echo "<script>alert('Checkpoint 1');</script>";
// get SSN, name, phonenumber, password, address, gender from the form

include 'connection.php';
$database = new database();

$SSN = $_POST['SSN'];
$name = $_POST['Name'];
$phonenumber = $_POST['phoneNumber'];
$password = $_POST['password'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$entity = $_POST['entity'];

if ($entity === 'patient'){
    // confirm that the fields are not empty
    if (empty($SSN) || empty($name) || empty($phonenumber) || empty($password) || empty($address) || empty($gender)){
        echo "<script>alert('Checkpoint 2');</script>";
        echo "<script>alert('Please fill in all the fields.');</script>";
    } else {
        // check if the SSN is already in the database
        $result = $database->patientSignup($SSN, $name, $phonenumber, $password, $address, $gender);
        if ($result){
            echo "<script>alert('Checkpoint 3');</script>";
            echo "<script>alert('This SSN is already in use.');</script>";
            // redirect to signup page using script
            echo "<script>window.location.href='../Templates/login.php';</script>";
        } else {
            // insert the patient into the database
            echo "<script>alert('Checkpoint 4');</script>";
            $database->patientSignup($SSN, $name, $phonenumber, $password, $address, $gender);

            // redirect to login page using script
            echo "<script>window.location.href='../Templates/login.html';</script>";
        }
    }
}

if ($entity === 'doctor'){
    // confirm that the fields are not empty
    if (empty($SSN) || empty($name) || empty($phonenumber) || empty($password) || empty($address) || empty($gender)){
        echo "<script>alert('Please fill in all the fields.');</script>";
    } else {
        // check if the SSN is already in the database
        $database->doctorSignup($SSN, $name, $phonenumber, $password, $address, $gender);
        if (count($result)){
            echo "<script>alert('This SSN is already in use.');</script>";
            // redirect to signup page using script
            echo "<script>window.location.href='../Templates/login.php';</script>";
        } else {
            // insert the patient into the database
            $database->patientSignup($SSN, $name, $phonenumber, $password, $address, $gender);

            // redirect to login page using script
            echo "<script>window.location.href='../signup/login.html';</script>";
        }
    }
}

?>