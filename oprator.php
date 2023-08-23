<!DOCTYPE html>
<html>
<head>
    <title>Arithmetic Operators</title>
</head>
<body>
    <?php
    $num1 = 10;
    $num2 = 5;

    echo "Number 1: {$num1}<br>";
    echo "Number 2: {$num2}<br><br>";

    // Addition
    echo "Addition: {$num1} + {$num2} = " . ($num1 + $num2) . "<br>";

    // Subtraction
    echo "Subtraction: {$num1} - {$num2} = " . ($num1 - $num2) . "<br>";

    // Multiplication
    echo "Multiplication: {$num1} * {$num2} = " . ($num1 * $num2) . "<br>";

    // Division
    echo "Division: {$num1} / {$num2} = " . ($num1 / $num2) . "<br>";

    // Modulus (Remainder)
    echo "Modulus: {$num1} % {$num2} = " . ($num1 % $num2) . "<br>";

    // Increment
    $num1++;
    echo "Increment: Num1 after incrementing: {$num1}<br>";

    // Decrement
    $num2--;
    echo "Decrement: Num2 after decrementing: {$num2}<br>";
    ?>
</body>
</html>
