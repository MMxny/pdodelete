<?php
$servername = "localhost:3307";
$username = "root"; 
$password = ""; 
$dbname = "Winkel";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET["product_code"])) {
    $product_code = $_GET["product_code"];

    $sql = "DELETE FROM Producten WHERE product_code = $product_code";

    if ($conn->query($sql) === TRUE) {
        echo "Product succesvol verwijderd.";
    } else {
        echo "Fout bij het verwijderen van het product: " . $conn->error;
    }
} else {
    echo "Product_code is niet opgegeven.";
}

$conn->close();
?>
