<?php 
session_start();
$host = "localhost";
$user = "root";
$password = ""; 
$dbname = "restaurant";

$conn = new mysqli($host, $user, $password, $dbname);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$client=$_POST["client"];
$serveur=$_POST["serveur"];
$table=$_POST["table"];
$food=$_POST["food"];
$tax=$_POST["tax"];
$total=$_POST["total"];

$sql = "INSERT INTO commande (client, serveure, `table`, food, tax, total) VALUES ( ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssisii", $client, $serveur,$table,$food,$tax,$total);
$stmt->execute();
$ncommande = $conn->insert_id;
$_SESSION['ncommande']=$ncommande ;
$_SESSION['client']=$client;
$_SESSION['serveur']=$serveur;
$_SESSION['table']=$table;
$_SESSION['food']=$food;
$_SESSION['tax']=$tax;
$_SESSION['total']=$total;
header('Location:http://localhost/Labs/lab2/commande.php');
exit;

}
$finaltotal=$_SESSION['finaltotal']?? null;
$orders=$_SESSION['allfood']?? null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Restaurant Command Form</title>
      <link rel="stylesheet" href="commande.css?v=<?php echo time(); ?>">

</head>
<body>
  <form class='form' method="POST">
    <h2>Restaurant Command</h2>

    <label for="client">Client</label>
    <input type="text" id="client" name="client">

    <label for="serveur">Serveur</label>
    <input type="text" id="serveur" name="serveur">

    <label for="table">Table</label>
    <input type="text" id="table" name="table">

    <label for="food">Food</label>
    <input type="text" id="food" value='<?= htmlspecialchars($orders ?? '')?>' readonly name="food">

    <label for="tax">Tax</label>
    <input type="number" id="tax" name="tax" step="0.01">

    <label for="total">Total</label>
    <input type="number" id="total" name="total" readonly value='<?= htmlspecialchars($finaltotal ?? '')?>' step="0.01">

    <div class="buttons">
      <button type="submit" class="okk">OK</button>
      <button type="reset" class="cancel">Cancel</button>
    </div>
  </form>

</body>
</html>

</body>
</html>