<!DOCTYPE html>
<html>
<head>
    <title>Student Grading</title>
</head>
<body>
    <h2>Student Grading System</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $subject1 = $_POST["subject1"];
        $subject2 = $_POST["subject2"];
        $subject3 = $_POST["subject3"];

        $totalMarks = $subject1 + $subject2 + $subject3;
        $average = $totalMarks / 3;

        echo "<p><strong>Name:</strong> {$name}</p>";
        echo "<p><strong>Subject 1:</strong> {$subject1}</p>";
        echo "<p><strong>Subject 2:</strong> {$subject2}</p>";
        echo "<p><strong>Subject 3:</strong> {$subject3}</p>";
        echo "<p><strong>Total Marks:</strong> {$totalMarks}</p>";
        echo "<p><strong>Average:</strong> {$average}</p>";

        // Grading
        if ($average >= 90) {
            echo "<p><strong>Grade:</strong> A</p>";
        } elseif ($average >= 80) {
            echo "<p><strong>Grade:</strong> B</p>";
        } elseif ($average >= 70) {
            echo "<p><strong>Grade:</strong> C</p>";
        } elseif ($average >= 60) {
            echo "<p><strong>Grade:</strong> D</p>";
        } else {
            echo "<p><strong>Grade:</strong> F</p>";
        }
    }
    ?>

    <h3>Enter Student Information</h3>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="subject1">Subject 1:</label>
        <input type="number" id="subject1" name="subject1" required><br>
        <label for="subject2">Subject 2:</label>
        <input type="number" id="subject2" name="subject2" required><br>
        <label for="subject3">Subject 3:</label>
        <input type="number" id="subject3" name="subject3" required><br>
        <button type="submit">Calculate Grade</button>
    </form>
</body>
</html>
