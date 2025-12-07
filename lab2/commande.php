<?php 
session_start();
$id=$_SESSION['ncommande']?? null;
$client=$_SESSION['client']?? null;
$serveur=$_SESSION['serveur']?? null;
$table=$_SESSION['table']?? null;
$food=$_SESSION['food']?? null;
$tax=$_SESSION['tax']?? null;
$total=$_SESSION['total']?? null;

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Restaurant Command Form</title>
      <link rel="stylesheet" href="commande.css?v=<?php echo time(); ?>">

</head>

<body>

  <div class="bill" id="bill">
    <h2>Restaurant Bill</h2>
    <p><strong>N Commande:</strong> <span id="b_ncommande"><?=  htmlspecialchars($id ??'') ?></span></p>
    <p><strong>Client:</strong> <span id="b_client"><?= htmlspecialchars($client) ?></span></p>
    <p><strong>Serveur:</strong> <span id="b_serveur"><?= htmlspecialchars($serveur) ?></span></p>
    <p><strong>Table:</strong> <span id="b_table"><?= htmlspecialchars($table) ?></span></p>
    <p><strong>Food:</strong> <span id="b_food"><?= htmlspecialchars($food) ?></span></p>
    <p><strong>Tax:</strong> $<span id="b_tax"><?= htmlspecialchars($tax) ?></span></p>
    <p><strong>Total:</strong> $<span id="b_total"><?= htmlspecialchars($total) ?></span></p>
    <div style="text-align:center; margin-top:20px;">
      <button onclick="window.print()">🖨 Print Bill</button>
    </div>
  </div>
</body>
</html>


