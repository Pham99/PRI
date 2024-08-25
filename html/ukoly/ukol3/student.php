<!DOCTYPE html>
<html>

<body>
    <?php
    // XML
    $xml = new DOMDocument;
    $xml->load('student.xml');
    // XSL
    $xsl = new DOMDocument;
    $xsl->load('student.xsl');
    // transformer
    $xslt = new XSLTProcessor();
    $xslt->importStylesheet($xsl);
    $transformovany_xml = $xslt->transformToXml($xml);
    // output
    echo $transformovany_xml;
    ?>
</body>

</html>