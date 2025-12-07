<?php
session_start();

$host = "localhost";
$user = "root";
$password = ""; 
$dbname = "restaurant";

$conn = new mysqli($host, $user, $password, $dbname);
if(isset($_SESSION["ncommandd"])&&isset($_SESSION["clientt"])&&isset($_SESSION["serveurr"])&&isset($_SESSION["tablee"])&&isset($_SESSION["foodd"])&&isset($_SESSION["taxx"])&&isset($_SESSION["totall"])){

$ncommande=$_SESSION['ncommandd'];
$client=$_SESSION['clientt'];
$serveur=$_SESSION['serveurr'];
$table=$_SESSION['tablee'];
$food=$_SESSION['foodd'];
$tax=$_SESSION['taxx'];
$total=$_SESSION['totall'];}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Restaurant Commande Form</title>
      <link rel="stylesheet" href="commande.css?v=<?php echo time(); ?>">

</head>

<body>

  <div class="bill" id="bill">
    <h2>Restaurant Bill</h2>

    <p><strong>N Commande:</strong> <span id="b_ncommande"><?=  htmlspecialchars($ncommande ??'') ?></span></p>
    <p><strong>Client:</strong> <span id="b_client"><?= htmlspecialchars($client ??'') ?></span></p>
    <p><strong>Serveur:</strong> <span id="b_serveur"><?= htmlspecialchars($serveur??'') ?></span></p>
    <p><strong>Table:</strong> <span id="b_table"><?= htmlspecialchars($table??'') ?></span></p>
    <p><strong>Food:</strong> <span id="b_food"><?= htmlspecialchars($food ??'') ?></span></p>
    <p><strong>Tax:</strong> $<span id="b_tax"><?= htmlspecialchars($tax ??'') ?></span></p>
    <p><strong>Total:</strong> $<span id="b_total"><?= htmlspecialchars($total??'') ?></span></p>
    <div style="text-align:center; margin-top:20px;">
      <button onclick="window.print()">🖨 Print Bill</button>
    </div>
  </div>
</body>
</html>
