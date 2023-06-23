<?php

require_once("connection.php"); //shows a requirement but only needed once

$sql = "UPDATE patient SET TradeName='Pfizer', formula='yukdyflu', price=270 WHERE TradeName='Pfeizer'";

if(mysqli_query($conn, $sql)){
    echo "Record updated successfully";
}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql1 = "DELETE FROM contracts WHERE textofcontract='names'";

if(mysqli_query($conn, $sql1)){
    echo "Record deleted successfully";
}else{
    echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
}

$result = $conn->query("SELECT * FROM patient");
$result1 = $conn->query("SELECT * FROM contracts");

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<br>TradeName: " . $row["TradeName"] . " - Formula: " . $row["formula"] . " - Price: " . $row["price"] . "<br>";
    }
}else{
    echo "0 results";
}

?>
