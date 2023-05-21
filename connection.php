<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "drugdispensarydb";

//creating connection
$conn = new mysqli($servername, $username, $password, $dbname);
//checking connection
if($conn -> connect_error){
    die("connection failed: ". $conn -> connect_error);
}
echo "connected successfully";

/*creating database
$sql = "CREATE DATABASE drugDispensaryDB";
if($conn->query($sql)==TRUE){
    echo "database created successfully";
}else{
    echo "error creating database: ".$conn->error;
}*/

/*creating table doctor
$sql = "CREATE TABLE Doctor(
    docssn INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name varchar(15),
    Specialty varchar(30),
    Years_of_experience int(2)
)";
if($conn->query($sql)==TRUE){
    echo "</br>";
    echo "Table Doctor created successfully";
}else{
    echo "Error creating table: ".$conn->error;
}*/

/*$sql = "CREATE TABLE Patient(
    patientssn INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fName varchar(15),
    address varchar(30),
    age int(2)
)";
if($conn->query($sql)==TRUE){
    echo "</br>";
    echo "Table Patient created successfully";
}else{
    echo "Error creating table: ".$conn->error;
}*/

/*$sql = "CREATE TABLE prescriptions(
    prescriptionNo INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    prescriptionDate date,
    quantity int(3),
    patientssn INT(6),
    docssn INT(6)
)";
if($conn->query($sql)==TRUE){
    echo "</br>";
    echo "Table prescriptions created successfully";
}else{
    echo "Error creating table: ".$conn->error;
}*/

/*$sql = "CREATE TABLE pharmacy(
    Name INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    address varchar(30),
    phoneNo int(10),
    profitPercentage FLOAT(6),
    drugTradeName varchar(30)
)";
if($conn->query($sql)==TRUE){
    echo "</br>";
    echo "Table pharmacy created successfully";
}else{
    echo "Error creating table: ".$conn->error;
}*/

/*$sql = "CREATE TABLE pharmaceuticalCompany(
    pcName INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    address varchar(30),
    phoneNo int(10),
)";
if($conn->query($sql)==TRUE){
    echo "</br>";
    echo "Table pharmaceuticalCompany created successfully";
}else{
    echo "Error creating table: ".$conn->error;
}*/

//$conn->close();
?>