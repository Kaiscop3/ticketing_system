<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticketing System</title>
</head>
<body>
    <h1>What's your favorite movies?</h1>

    <h2>Enter Your Information</h2>
    <form method="post" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required><br><br>

        <label for="movies">Movies you want to watch (separate by commas):</label><br>
        <textarea id="movies" name="movies" rows="4" cols="50" required></textarea><br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Include the PHP QR Code library
        include('phpqrcode/qrlib.php');

        $name = htmlspecialchars($_POST['name']);
        $age = htmlspecialchars($_POST['age']);
        $movies = htmlspecialchars($_POST['movies']);
        $moviesArray = explode(',', $movies);

        echo "<h2>Submitted Information</h2>";
        echo "Name: " . $name . "<br>";
        echo "Age: " . $age . "<br>";
        echo "Movies you want to watch:<br><ul>";

        foreach ($moviesArray as $movie) {
            echo "<li>" . trim($movie) . "</li>";
        }

        echo "</ul>";

        // Generate the QR Code content
        $qrContent = "Name: " . $name . "\n";
        $qrContent .= "Age: " . $age . "\n";
        $qrContent .= "Movies: " . $movies;

        // Generate and display the QR Code
        $tempDir = 'temp/';
        if (!file_exists($tempDir)) {
            mkdir($tempDir);
        }
        $qrFileName = $tempDir . 'ticket_qrcode.png';
        QRcode::png($qrContent, $qrFileName, QR_ECLEVEL_L, 4);

        echo "<h2>QR Code</h2>";
        echo "<img src='" . $qrFileName . "' alt='QR Code'>";
    }
    ?>
</body>
</html>
