<?php
/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "drugdispensarydb";
not needed as require statement used*/

require_once("connection.php"); //shows a requirement but only needed once

/*$patientssn = 003456;
$fname = 'Ayushi';
$address = 'ayushisavla@gmail.com';
$age = 19;*/

/*$sql = "INSERT INTO patient (patientssn, fname, address, age) 
VALUES('003458','Mary', 'maryparker@gmail.com', '46')";

if(mysqli_query($conn, $sql)){
    echo "new record created successfully";
}else{
    echo "error". $sql. "</br>". mysqli_error($conn);
}*/

$sql = "SELECT * FROM patient";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<br>"."ssn: ".$row["patientssn"]." - Name: ".$row["fName"]." - Age: ".$row["age"]." - Address: ".$row["address"]."<br>";
    }
}else{
    echo "0 results";
}

?>