<?php
//$_GET

// //EXAMPLE 1: URL = http://www.example.com/index.php?myVar=myVal
// echo $_GET["myVar"] == "myVal" ? "true" : "false"; // returns "true"
// //EXAMPLE 2? URL = http://www.example.com/index.php?myVar=myVal&myVar2=myVal2
// echo $_GET["myVar"]; // returns "myVal"
// echo $_GET["myVar2"]; // returns "myVal2"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Request Example</title>
</head>
<body>
    <h1>GET Request Example</h1>
    <form method="get" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>
        
        <label for="age">Age:</label>
        <input type="text" id="age" name="age"><br><br>
        
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_GET) {
        echo "<h2>Submitted Data:</h2>";
        if (isset($_GET['name'])) {
            echo "Name: " . htmlspecialchars($_GET['name']) . "<br>";
        }
        if (isset($_GET['age'])) {
            echo "Age: " . htmlspecialchars($_GET['age']) . "<br>";
        }

        echo "<br>All \$_GET Variables:<br>";
        echo "<pre>";
        var_dump($_GET);
        echo "</pre>";
    }
    ?>
</body>
</html>