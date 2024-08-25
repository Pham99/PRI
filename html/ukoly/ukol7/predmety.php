<?php

function tabulkaPredmetu($kodPredmetu)
{
    $xml = new DOMDocument;
    $xml->load('studium.xml');

    $xsl = new DOMDocument;
    $xsl->load("studium-predmet.xsl");

    $xslt = new XSLTProcessor();
    $xslt->importStylesheet($xsl);

    $xslt->setParameter('', 'kodPredmetu', $kodPredmetu);

    return $xslt->transformToXml($xml);
}

