<?php
require "nav.php";
require "include.php";

try {
    $xml = new DOMDocument;
    if (!$xml->load('xml/games.xml')) {
        throw new Exception('Error loading XML file');
    }

    $xsl = new DOMDocument;
    if (!$xsl->load('xml/games.xsl')) {
        throw new Exception('Error loading XSL file');
    }

    $proc = new XSLTProcessor();
    if (!$proc->importStyleSheet($xsl)) {
        throw new Exception('Error importing XSL stylesheet');
    }

    $result = $proc->transformToXML($xml);
    if ($result === false) {
        throw new Exception('Error transforming XML');
    }

    echo $result;
} catch (Exception $e) {
    AlertError($e->getMessage());
}

require "bot.php"
?>