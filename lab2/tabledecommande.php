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
      header('Location:http://localhost/labs/lab2/printedbill.php');

         
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
    <th>delete</th>
    <th>update</th>
    
  </tr>';

while ($row = $result->fetch_assoc()) {
    echo '
  <form method="POST">
    <tr>

    <td><input  class=\'inp\' name="ncommande" readonly  value="'.$row['ncommande'].'"></input></td>
        <td class="td"><p class="p">'.$row['client'].'</p><input  class=\'inpp\' name="client" value="'.$row['client'].'"></input></td>
        <td class="td"><p class="p">'.$row['serveure'].'</p><input  class=\'inpp\' name="serveur" value="'.$row['serveure'].'" ></input></td>
        <td class="td"><p class="p">'.$row['table'].'</p><input  class=\'inpp\' name="table" value="'.$row['table'].'"></input></td>
        <td class="td"><p class="p">'.$row['food'].'</p><input  class=\'inpp\' name="food" value="'.$row['food'].'"></input></td>
        <td class="td"><p class="p">'.$row['tax'].'</p><input  class=\'inpp\' name="tax" value="'.$row['tax'].'"></input></td>
        <td class="td"><p class="p">'.$row['total'].'</p><input  class=\'inpp\' name="total" value="'.$row['total'].'" ></input></td>
        <td class="td"><button type="submit">🖨 Print</button></td>
        <td class="td"><button formaction="http://localhost/Labs/lab2/delete.php" type="submit">delete</button></td>
        <td><h4 id="update" class="update" >update</h4>
        <button class="ok" formaction="http://localhost/Labs/lab2/update.php" type="submit">ok</button><h4 class="x" id="x" >cancel</h4></td>
    </tr>
    </form>';

}



echo '</table>';}
?>
<script src="index.js?v=<?php echo time(); ?>"></script>
</body>
</html> 