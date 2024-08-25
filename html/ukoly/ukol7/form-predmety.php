<!DOCTYPE html>
<html lang="cs">

<?php require 'predmety.php' ?>

<head>
    <meta charset="UTF-8">
</head>

<body>

    <form method="post" action="">
        <input type="text" name="kod">
        <input type="submit">
    </form>

    <?php
    if (isset($_POST['kod'])) {
        echo tabulkaPredmetu($_POST['kod']);
    }
    ?>

</body>

</html>