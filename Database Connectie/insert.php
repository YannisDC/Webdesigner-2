<?php
$data = array();

 $servername = "localhost";
 $username = "root";
 $password = "root";
 $databasename = "webshop";

 // Maak connectie
 $conn = new mysqli($servername, $username, $password, $databasename);

 // Checken of de connectie werkt
 if($conn->connect_error) {
   die("Connectie is mislukt: ". $conn->connect_error);
 }

$naam = $_POST["naam"];
$email = $_POST["email"];
$bericht = $_POST["bericht"];

 $sql = "INSERT INTO Berichten(naam, email, bericht) VALUES ('$naam', '$email', '$bericht')";

 if( $conn->query($sql) == TRUE) {
   $data["success"] = "Er is een nieuwe record toegevoegd.";
   echo json_encode($data);
 } else {
   echo "Error: " . $sql . "<br>". $conn->error;
 }

 $conn->close();
?>
