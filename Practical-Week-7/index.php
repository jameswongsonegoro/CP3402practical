<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS-Practical 7</title>
</head>
<body>

<?php include 'header.php'; ?>

<div class="content">
    <h1>Welcome to my PHP Demo</h1>
    <p>This is a demonstration of PHP features.</p>

    <?php
    // Echoing HTML
    echo "<div><p>Echoing different kinds of HTML using PHP.</p></div>";

    // Decisions - if/else statement
    $condition = true;
    if ($condition) {
        echo "<p>The condition is true.</p>";
    } else {
        echo "<p>The condition is false.</p>";
    }

    // Repetition - for loop
    echo "<ul>";
    for ($i = 1; $i <= 5; $i++) {
        echo "<li>Item $i</li>";
    }
    echo "</ul>";

    // Repetition - foreach loop with an array
    $fruits = ['Apple', 'Banana', 'Orange', 'Grapes'];
    echo "<ul>";
    foreach ($fruits as $fruit) {
        echo "<li>$fruit</li>";
    }
    echo "</ul>";

    // Function with parameters
    function greet($name) {
        echo "<p>Hello, $name! Welcome to the PHP Demo.</p>";
    }

    greet('John');
    greet('Alice');
    ?>

</div>

<?php include 'footer.php'; ?>

</body>
</html>
