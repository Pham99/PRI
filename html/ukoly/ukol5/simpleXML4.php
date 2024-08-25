<?php

$xml = new SimpleXMLElement('<studenty/>');
$db = mysqli_connect("database", "admin", "heslo", "univerzita");

$data = $db->query("select * from Student")->fetch_all();
foreach ($data as [$id, $jmeno, $prijmeni, $cislo, $email, $rok, $forma]) {
    $student = $xml->addChild("student");
    $student->addChild("jmeno", $jmeno);
    $student->addChild("prijmeni", $prijmeni);
    $student->addChild("studentske_cislo", $cislo);
    $student->addChild("email", $email);
    $student->addChild("studijni_rok", $rok);
    $forma = $student->addChild("forma");
    }

header('Content-Type: application/xml');
echo $xml->asXML();

