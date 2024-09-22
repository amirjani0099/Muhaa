// db.php
<?php
$host = '192.168.0.100';
$dbname = 'octopuse_123';  
$username = 'octopuse_123';  
$password = '#Okara786';  

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password, );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
