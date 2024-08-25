<?
$xml = simplexml_load_file('student.xml');
echo (string)($xml->student[0]->jmeno) . "</br>";
echo (string)($xml->student[0]->prijmeni) . "</br>";
echo (string)($xml->student[1]->forma->kombinovany)->getName() . "</br>";
echo (string)($xml->student[1]->rozvrh->predmet[0]->od) . "</br>";