<?php

$xml = new SimpleXMLElement('<studenty/>');

$student = $xml->addChild('student');
$student->addAttribute('id','1');
$student->addChild('jmeno','Bill');
$student->addChild('prijmeni','Gates');
$student->addChild('studentske_cislo','F66600');
$student->addChild('email','billgates@microsoft.com');
$student->addChild('studijni_rok','1984');
$forma = $student->addChild('forma');
$forma->addChild("prezencni");
$rozvrh = $xml->addChild("rozvrh");
$predmet = $rozvrh->addChild("predmet");

$student2 = $xml->addChild('student');
$student2->addAttribute('id','2');
$student2->addChild('jmeno','Steve');
$student2->addChild('prijmeni','Jobs');

header('Content-Type: application/xml');
echo $xml->asXML();

