<?php

// Surftown formmail

// angiv modtagere af formmailen
// flere modtagere kan tilføjes som
// $modtagere[1] = "adresse@domain.dk"
// $modtagere[2] = "adresse2@domain.dk"
// osv.
$modtagere[0] = "";
//$modtagere[1] = "";

// succes og fejlsider
$succes = "succes.html";
$fejl = "fejl.html";

// standard tesktbokse er
// navn
// emailadresse
// emne
// besked

// disse skal være "name" på de forskellige tekstbokse på html-siden
// f.eks. <input type="text" name="navn"></input>

// lav liste over modtagere
$mail_modtagere = implode(",", $modtagere);

// klargør parametre
$navn = $_POST['navn'];
$emailadresse = "From: " . $_POST['emailadresse'];
$emne = "Besked fra " . $navn . ": " . $_POST['emne'];
$besked = $_POST['besked'];

// send mail
$mail_status = mail($mail_modtagere, $emne, $besked, $emailadresse);

if ($mail_status) {
header("Location: " . $succes);
} else {
header("Location: " . $fejl);
}

?>