<!DOCTYPE html>
<html>
<body>

<form method="post">
    Enter a string: <input type="text" name="str">
    <input type="submit" name="submit" value="Apply Functions">
</form>

<?php
if (isset($_POST['submit'])) {
    $str = $_POST['str'];

    echo "Original String: " . $str . "<br>";
    echo "Length: " . strlen($str) . "<br>";
    echo "Uppercase: " . strtoupper($str) . "<br>";
    echo "Lowercase: " . strtolower($str) . "<br>";
    echo "Reversed: " . strrev($str) . "<br>";
}
?>

</body>
</html>