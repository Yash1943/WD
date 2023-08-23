<!DOCTYPE html>
<html>
<head>
    <title>Name Length Result</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["name"])) {
            $name = $_POST["name"];
            $nameLength = strlen($name);

            echo "<h2>Name Length</h2>";
            echo "Your name: " . htmlspecialchars($name) . "<br>";
            echo "Length of your name: " . $nameLength . " characters";
        } else {
            echo "Please enter a valid name.";
        }
    }
    ?>
    <br>
    <a href="index.html">Go Back</a>
</body>
</html>
