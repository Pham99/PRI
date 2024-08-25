<?php

function AlertError($message){
    echo '<div class="alert alert-danger" role="alert">' . $message . '</div>';
}

function AlertSuccess($message){
    echo '<div class="alert alert-success" role="alert">' . $message . '</div>';
}

function Validate($xml){
    $xsd = "xml/game.xsd";
    if($xml->schemaValidate($xsd)){
        $gamesXmlFile = 'xml/games.xml';

        if (file_exists($gamesXmlFile)) {
            $gamesXml = new DOMDocument();
            $gamesXml->load($gamesXmlFile);
            $root = $gamesXml->documentElement;
        } else {
            $gamesXml = new DOMDocument('1.0', 'UTF-8');
            $root = $gamesXml->createElement('games');
            $gamesXml->appendChild($root);
        }
        $newGame = $gamesXml->importNode($xml->documentElement, true);
        $root->appendChild($newGame);

        $gamesXml->save($gamesXmlFile);

        AlertSuccess("File is valid and has been saved.");
    }
    else{
        AlertError("File is not valid");
    }
}