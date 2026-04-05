<!DOCTYPE html>
<html>
<body>

<form method="post">
    Enter first number: <input type="number" name="num1"><br><br>
    Enter second number: <input type="number" name="num2"><br><br>
    <input type="submit" name="submit" value="Find HCF">
</form>

<?php
if (isset($_POST['submit'])) {
    $a = $_POST['num1'];
    $b = $_POST['num2'];

    $num1 = $a;
    $num2 = $b;

    while ($num2 != 0) {
        $temp = $num2;
        $num2 = $num1 % $num2;
        $num1 = $temp;
    }

    echo "HCF of $a and $b is: $num1";
}
?>

</body>
</html>