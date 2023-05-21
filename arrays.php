<?php
$cars = ["Volvo", "BMW", "Toyota"];
$arrlength = count($cars);
for ($x=0; $x<$arrlength;$x++){
    echo $cars[$x];
    echo "</br>";
}

echo "</br>";

$age = array("Peter" => "34", "Ben" => "37", "Joe" => "43");

foreach($age as $key => $value){
    echo "My name is ".$key." and age is ".$value;
    echo"</br>";
}

$marray = array(
    array("Ankit", "Ram", "Shyam"),
    array("Unnao", "Trichy", "Kanpur")
);
echo"<pre>";
print_r($marray);
echo"</pre>";

echo "My name is ".$marray[0][2];
echo "</br>";
echo "I live in ".$marray[1][2];
echo "</br>";

$data = [
    "Game of Thrones"=>["Jaime Lannister","Catelyn Stark","Cersei Lannister"],
    "Black Mirror"=>["Nanette Cole","Selma Telse","Karin Parke"]
];
echo "<h1>Famous Series and Actors";
foreach($data as $series => $actors){
    echo "<h2>$series</h2>";
    foreach($actors as $actor){
        echo"<div>$actor</div>";
    }
}
?>