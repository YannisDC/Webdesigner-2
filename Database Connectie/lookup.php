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

 $sql = "SELECT * FROM Studenten WHERE adres='Antwerpen'";
 $results = $conn->query($sql);

 if($results->num_rows > 0) {

   while($row = $results->fetch_assoc()) {
     $data["naam"] = $row["naam"];
     $data["email"] = $row["email"];
   }
   $data["succes"] = "At least something happened";
   echo json_encode($data);
 } else {
   echo "Error: " . $sql . "<br>". $conn->error;
 }

 $conn->close();
?>
