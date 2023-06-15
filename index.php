<?php
$servername = "localhost:3307";
$username = "root"; 
$password = ""; 
$dbname = "Winkel";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Producten ORDER BY product_code";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "<table>
            <tr>
                <th>Product Code</th>
                <th>Product Naam</th>
                <th>Prijs per stuk</th>
                <th>Omschrijving</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["product_code"]."</td>
                <td>".$row["product_naam"]."</td>
                <td>".$row["prijs_per_stuk"]."</td>
                <td>".$row["omschrijving"]."</td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "Geen producten gevonden.";
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Producten</title>
</head>
<body>
    <h2>Verwijderen:</h2>
    <a href="delete.php?product_code=2">Verwijder product met product_code 2</a>
</body>
</html>
