<?
require "pages.php";
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games</title>
    <link href="media/video-game-icon.png" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-black">
        <div class="container-fluid">
            <img src="media/video-game-icon.png" width="30" height="30">
            <a class="navbar-brand" href="#">Good Games Only</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <?php
                    foreach ($pages as $key => $value) {
                        echo "<li class='nav-item'><a class='nav-link' href='$value'>$key</a></li>";
                    }
                    ?>
                </ul>
                <button class="btn btn-outline-light" id="toggleTheme">Toggle Theme</button>
            </div>
        </div>
    </nav>
    <script>
        const button = document.getElementById('toggleTheme');
        button.onclick = () => {
            if (getCookieValue('theme') == "dark") {
                document.cookie = "theme=light; path=/";
            } else {
                document.cookie = "theme=dark; path=/";
            }
            SetTheme();
        }
        console.log(document.cookie);
        SetTheme();

        function SetTheme() {
            const htmlElement = document.documentElement;
            const navElement = document.querySelector('.navbar');

            if (getCookieValue('theme') == "light") {
                htmlElement.setAttribute('data-bs-theme', 'light');
                navElement.classList.remove('navbar-dark', 'bg-black');
                navElement.classList.add('navbar-light', 'bg-light');
                button.classList.remove('btn-outline-light');
                button.classList.add('btn-outline-dark');
            } else {
                htmlElement.setAttribute('data-bs-theme', 'dark');
                navElement.classList.remove('navbar-light', 'bg-light');
                navElement.classList.add('navbar-dark', 'bg-black');
                button.classList.remove('btn-outline-dark');
                button.classList.add('btn-outline-light');
            }
        }
        function getCookieValue(cookieName) {
            let keyValPairs = document.cookie.split("; ")
            for (let keyVal of keyValPairs) {
                let [key, val] = keyVal.split('=');
                if (key == cookieName)
                    return decodeURIComponent(val);
            }
            return null;
        };
    </script>