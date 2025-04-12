<!DOCTYPE html>
<html>
<head>
    <title>Daftar Smartphone Samsung</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>

<?php
$smartphones = array(
    "Samsung Galaxy S22",
    "Samsung Galaxy S22+",
    "Samsung Galaxy A03",
    "Samsung Galaxy Xcover 5"
);

echo "<table>";
echo "<tr><th>Daftar Smartphone Samsung</th></tr>";

foreach ($smartphones as $samsung) {
    echo "<tr><td>$samsung</td></tr>";
}

echo "</table>";
?>

</body>
</html>
