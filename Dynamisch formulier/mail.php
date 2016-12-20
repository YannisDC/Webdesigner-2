<?php

$errors = array();
$data = array();

if (empty($_POST["naam"])){
  $errors["naam"] = "Naam niet ingevuld.";
}
if (empty($_POST["email"])){
  $errors["email"] = "Email niet ingevuld.";
}
if (empty($_POST["bericht"])){
  $errors["bericht"] = "Bericht niet ingevuld.";
}

if (empty($errors)) {
  $data["success"] = true;
  $data["bericht"] = "Hooray, everything is working.";

  $ontvanger = "yannisdcl@gmail.com";
  $onderwerp = "Mijn dynamisch formulier";
  $afzender = $_POST["naam"];
  $afzender_email = $_POST["email"];
  $headers = "From: $afzender <$afzender_email>";
  $inhoud = $_POST["bericht"];

  mail($ontvanger, $onderwerp, $inhoud, $headers);
} else {
  $data["success"] = false;
}

echo json_encode($data);


?>
