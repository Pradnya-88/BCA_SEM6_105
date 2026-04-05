<!DOCTYPE html>
<html>
<body>

<form method="post">
    Enter a number: <input type="number" name="num">
    <input type="submit" name="submit" value="Find Square">
</form>

<?php
if (isset($_POST['submit'])) {
    $num = $_POST['num'];
    $square = $num * $num;
    echo "Square of $num is: $square";
}
?>

</body>
</html>