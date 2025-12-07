<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="commande.css?v=<?php echo time(); ?>">

</head>
<body>
 <?php 
session_start();

 $host = "localhost";
$user = "root";
$password = ""; 
$dbname = "restaurant";

$conn = new mysqli($host, $user, $password, $dbname);
if(isset($_POST["ncommande"])){
  $ncommande=$_POST["ncommande"];

}

else {

$ncommande = '';

}


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $sqll = "SELECT ncommande, client, serveure, `table`, food, tax, total  FROM commande WHERE ncommande=?";
    $stmt = $conn->prepare($sqll);
    
    $stmt->bind_param("i",$ncommande);
    $stmt->execute();
      $result=$stmt->get_result();

    if ($result->num_rows > 0) {
      
      $row = $result->fetch_assoc();
        $_SESSION['ncommandd']=$row['ncommande'];
        $_SESSION['clientt']=$row['client'];
        $_SESSION['serveurr']=$row['serveure'];
        $_SESSION['tablee']=$row['table'];
        $_SESSION['foodd']=$row['food'];
        $_SESSION['taxx']=$row['tax'];
        $_SESSION['totall']=$row['total'];

         header('Location:http://localhost/restaurant/printedbill.php');
         
      }

    }

 
 $sql = "SELECT ncommande, client, serveure, `table`, food, tax, total  FROM commande";
$result = $conn->query($sql);
if ($result&&$result->num_rows > 0) {
   
 echo '<table border="1"   style="width: 70%; text-align:center; border-collapse:collapse;">
  <tr style="background:#f2f2f2; font-weight:bold;">
    <th>N Commande</th>
    <th>Client</th>
    <th>Serveur</th>
    <th>Table</th>
    <th>Food</th>
    <th>Tax</th>
    <th>Total</th>
    <th>Print</th>
  </tr>';

while ($row = $result->fetch_assoc()) {
    echo '
    <form method="POST">
    <tr>
    <td><input class=\'inp\' name="ncommande" readonly  value="'.$row['ncommande'].'"></input></td>
        <td>'.$row['client'].'</td>
        <td>'.$row['serveure'].'</td>
        <td>'.$row['table'].'</td>
        <td>'.$row['food'].'</td>
        <td>'.$row['tax'].'</td>
        <td>'.$row['total'].'</td>
        <td><button type="submit">🖨 Print</button></td>
    </tr>
    </form>';
}

echo '</table>';}
?>
</body>
</html> 