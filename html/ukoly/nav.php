<?php
require "pages.php";
?>

<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <style>
        .nav {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
        }

        .nav li {
        float: left;
        }

        .nav li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        }

        /* Change the link color to #111 (black) on hover */
        .nav li a:hover {
        background-color: #111;
        }
    </style>
    <title>
        Ukoly
    </title>
</head>

<body>
    <ul class="nav">
        <?php foreach ($pages as $key => $value) {
            echo '<li><a href="' . $key . '">' . $value . '</a></li>';
        } ?>
    </ul>