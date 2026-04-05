<!DOCTYPE html>
<html>
<body>

<?php
$rows = 8;
$stars = 15;

for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $stars; $j++) {
        echo "* ";
    }
    echo "<br>";
    $stars -= 2;
}
?>

</body>
</html>