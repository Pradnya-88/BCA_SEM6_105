<!DOCTYPE html>
<html>
<body>

<form method="post">
    Enter a number: <input type="number" name="num">
    <input type="submit" name="submit" value="Check Armstrong">
</form>

<?php
if (isset($_POST['submit'])) {
    $num = $_POST['num'];
    $temp = $num;
    $sum = 0;
    $digits = strlen((string)$num);

    while ($temp != 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $digits);
        $temp = (int)($temp / 10);
    }

    if ($sum == $num) {
        echo "$num is an Armstrong number.";
    } else {
        echo "$num is not an Armstrong number.";
    }
}
?>

</body>
</html>