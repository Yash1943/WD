<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <?php
    $currentTime = date("H:i:s");
    $welcomeMessage = "Welcome to our website!";
    
    echo "<h1>{$welcomeMessage}</h1>";
    echo "<p>Current time: {$currentTime}</p>";
    ?>
</body>
</html>
