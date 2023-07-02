<?php

require_once("connection.php"); //shows a requirement but only needed once

$sql = "UPDATE drug SET TradeName='Pfizer', formula='yukdyflu', price=270 WHERE TradeName='Pfeizer'";

if(mysqli_query($conn, $sql)){
    echo "<br>"."Record updated successfully";
}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

/*$sql1 = "DELETE FROM patient WHERE Name='frontier'";

if(mysqli_query($conn, $sql1)){
    echo "Record deleted successfully";
}else{
    echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
}*/

$result = $conn->query("SELECT * FROM patient");
//$result1 = $conn->query("SELECT * FROM patient");

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<br>TradeName: " . $row["TradeName"] . " - formula: " . $row["formula"] . " - price: " . $row["price"]. "<br>";
    }
}else{
    echo "0 results";
}

?>
