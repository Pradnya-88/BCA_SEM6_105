<!DOCTYPE html>
<html>
<body>

<form method="post">
    Enter a number: <input type="number" name="num">
    <input type="submit" name="submit" value="Find Factorial">
</form>

<?php
if (isset($_POST['submit'])) {
    $num = $_POST['num'];
    $fact = 1;

    for ($i = 1; $i <= $num; $i++) {
        $fact *= $i;
    }

    echo "Factorial of $num is: $fact";
}
?>

</body>
</html>