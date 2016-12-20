<?php
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

$sql = "SELECT id, naam, email FROM Studenten";
$result = $conn->query($sql);

// Check of het resultaat niet leeg is
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "ID= " . $row["id"] . " Naam= " . $row["naam"] . " Email= " . $row["email"] . "<br>";
  }
} else {
  echo "geen resultaten gevonden";
}
$conn->close();
?>
