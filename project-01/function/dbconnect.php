<?php
$servername = "localhost";
$dbusername = "root";
$password = "";
$dbname = "rezayari_reza";

try {
  $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $password);
  // set the PDO error mode to exception
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>


<?php
// $servername = "rezayari.ir";
// $dbusername = "rezayari_reza";
// $password = "1235813";
// $dbname = "rezayari_reza";

// try {
//   $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $password);
//   // set the PDO error mode to exception
//   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch(PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();
// }
?>
