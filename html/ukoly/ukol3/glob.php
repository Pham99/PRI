<?php
// Funkce pro načtení a zobrazení XML souboru
function displayXMLFile($filePath) {
    if (file_exists($filePath)) {
        $xmlContent = file_get_contents($filePath);
        header('Content-Type: text/xml');
        echo $xmlContent;
    } else {
        echo "Soubor neexistuje.";
    }
}

// Získání seznamu XML souborů v aktuálním adresáři
$xmlFiles = glob("*.xml");

// Zpracování odeslaného formuláře
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["selected_file"])) {
    $selectedFile = $_POST["selected_file"];
    displayXMLFile($selectedFile);
    exit;
}
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Výběr XML souboru</title>
</head>
<body>
    <h1>Vyberte XML soubor k zobrazení</h1>
    <form method="post">
        <label for="selected_file">Vyberte soubor:</label>
        <select name="selected_file" id="selected_file">
            <?php foreach ($xmlFiles as $file): ?>
                <option value="<?php echo htmlspecialchars($file); ?>"><?php echo htmlspecialchars($file); ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Zobrazit</button>
    </form>
</body>
</html>
