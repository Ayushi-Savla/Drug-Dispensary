<?php

echo "<script>alert('Checkpoint 1');</script>";

include 'connection.php';

$database = new database();

if (isset($_POST['login'])){

    echo "<script>alert('Checkpoint 2');</script>";

    $SSN = $_POST['SSN'];
    $password = $_POST['password'];
    $entity = $_POST['entity'];

    if ($entity === 'patient'){
        if($result = $database->patientLogin($SSN, $password)){
            // redirect to patient page
            echo "<script>window.location.href='../Templates/patient.html';</script>";
        } else {
            echo "<script>alert('Invalid SSN or password.');</script>";
        }

    }

    if ($entity === 'doctor'){
        if($result = $database->doctorLogin($SSN, $password)){
            // redirect to doctor page
            echo "<script>window.location.href='doctor.php';</script>";
        } else {
            echo "<script>alert('Invalid SSN or password.');</script>";
        }
    }
}