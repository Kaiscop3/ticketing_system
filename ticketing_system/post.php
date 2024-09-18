<?php
//$_POST
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST Request Example</title>
</head>
<body>
    <h1>POST Request Example</h1>
    <form method="post" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>
        
        <label for="age">Age:</label>
        <input type="text" id="age" name="age"><br><br>
        
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_POST) {
        echo "<h2>Submitted Data:</h2>";
        if (isset($_POST['name'])) {
            echo "Name: " . htmlspecialchars($_POST['name']) . "<br>";
        }
        if (isset($_POST['age'])) {
            echo "Age: " . htmlspecialchars($_POST['age']) . "<br>";
        }

        echo "<br>All \$_POST Variables:<br>";
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
    }
    ?>
</body>
</html>
