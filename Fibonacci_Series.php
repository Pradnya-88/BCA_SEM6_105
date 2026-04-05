<!DOCTYPE html>
<html>
<body>

<form method="post">
    Enter number of terms: <input type="number" name="n">
    <input type="submit" name="submit" value="Print Fibonacci">
</form>

<?php
if (isset($_POST['submit'])) {
    $n = $_POST['n'];
    $a = 0;
    $b = 1;

    echo "Fibonacci Series: <br>";

    for ($i = 0; $i < $n; $i++) {
        echo $a . " ";
        $c = $a + $b;
        $a = $b;
        $b = $c;
    }
}
?>

</body>
</html>