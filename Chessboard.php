<!DOCTYPE html>
<html>
<head>
    <title>Chessboard</title>
    <style>
        body {
            background-color: #f2f2f2; /* light gray background */
            margin: 20px;
        }

        table {
            border-collapse: collapse;
            border: 5px solid #333;
        }


        td {
            width: 25px;
            height: 25px;
            border: 1px solid #999;
        }

        .black {
            background-color: #000000;
        }

        .white {
            background-color: #ffffff;
        }
    </style>
</head>
<body>

<?php
echo "<table>";

for ($row = 0; $row < 8; $row++) {
    echo "<tr>";
    for ($col = 0; $col < 8; $col++) {
        if (($row + $col) % 2 == 0) {
            echo "<td class='white'></td>";
        } else {
            echo "<td class='black'></td>";
        }
    }
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>