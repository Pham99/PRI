<?php
require "nav.php";
require "include.php";
?>

<div class="container mt-5">
    <h2 class="mb-4">Add New Game</h2>
    <form action="" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Game Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="release_date" class="form-label">Release Date</label>
            <input type="date" class="form-control" id="release_date" name="release_date" required>
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <input type="text" class="form-control" id="genre" name="genre" required>
        </div>
        <div class="mb-3">
            <label for="developer" class="form-label">Developer</label>
            <input type="text" class="form-control" id="developer" name="developer" required>
        </div>
        <div class="mb-3">
            <label for="publisher" class="form-label">Publisher</label>
            <input type="text" class="form-control" id="publisher" name="publisher" required>
        </div>
        <div class="mb-3">
            <label for="platforms" class="form-label">Platforms (comma separated)</label>
            <input type="text" class="form-control" id="platforms" name="platforms" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="rating" class="form-label">Rating</label>
            <input type="number" class="form-control" id="rating" name="rating" min="0" max="10" required>
        </div>
        <button type="submit" class="btn btn-primary mb-4">Submit</button>
    </form>
</div>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $release_date = $_POST['release_date'];
    $genre = $_POST['genre'];
    $developer = $_POST['developer'];
    $publisher = $_POST['publisher'];
    $platforms = explode(',', $_POST['platforms']);
    $description = $_POST['description'];
    $rating = $_POST['rating'];

    $game = new SimpleXMLElement('<game></game>');
    $game->addChild('name', $name);
    $game->addChild('release_date', $release_date);
    $game->addChild('genre', $genre);
    $game->addChild('developer', $developer);
    $game->addChild('publisher', $publisher);
    $platformsElement = $game->addChild('platforms');
    foreach ($platforms as $platform) {
        $platformsElement->addChild('platform', trim($platform));
    }
    $game->addChild('description', $description);
    $game->addChild('rating', $rating);

    $dom = new DOMDocument();
    $dom->formatOutput = true;
    $domElement = dom_import_simplexml($game);
    $domElement = $dom->importNode($domElement, true);
    $dom->appendChild($domElement);

    Validate($dom);
}


require "bot.php"
?>