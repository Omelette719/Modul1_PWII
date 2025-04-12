<!DOCTYPE html>
<html>
<head>
    <title>Daftar Smartphone Samsung</title>
    <style>
        table, td {
            border: 1px solid black;
        }
        th {
            font-size: 24px;
            border: 1px solid black;
            padding: 20px 0 20px 0;
            background-color:red;
        }
    </style>
</head>
<body>

<?php
$smartphones = array(
    "samsung1" => "Samsung Galaxy S22",
    "samsung2" => "Samsung Galaxy S22+",
    "samsung3" => "Samsung Galaxy A03",
    "samsung4" => "Samsung Galaxy Xcover 5"
    );

echo "<table>";
echo "<tr><th>Daftar Smartphone Samsung</th></tr>";

foreach ($smartphones as $samsung => $nama) {
    echo "<tr><td>$nama</td></tr>";
}

echo "</table>";
?>

</body>
</html>
