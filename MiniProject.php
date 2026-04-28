<!DOCTYPE html>
<html>
<head>
    <title>PHP Simple Calculator</title>
</head>
<body>
    <h2>Simple Calculator</h2>
    
    <form method="post" action="">
        <input type="number" name="num1" placeholder="Enter first number" required>
        <input type="number" name="num2" placeholder="Enter second number" required>
        <button type="submit" name="calculate">Calculate</button>
    </form>

    <br>

    <?php
    if (isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        echo "<h3>Results:</h3>";
        echo "Sum: " . ($num1 + $num2) . "<br>";
        echo "Difference: " . ($num1 - $num2) . "<br>";
        echo "Product: " . ($num1 * $num2) . "<br>";

        if ($num2 != 0) {
            echo "Quotient: " . ($num1 / $num2) . "<br>";
            echo "Remainder (Modulus): " . ($num1 % $num2);
        } else {
            echo "Quotient: Cannot divide by zero.";
        }
    }
    ?>
</body>
</html>
