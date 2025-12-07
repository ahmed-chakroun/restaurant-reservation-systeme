<?php $host = "localhost";
$user = "root";
$password = ""; 
$dbname = "restaurant";

$conn = new mysqli($host, $user, $password, $dbname);
$ncommande=$_POST['ncommande'];
$sql="DELETE FROM commande WHERE ncommande=?";
$stmt=$conn->prepare($sql);
$stmt->bind_param("i",$ncommande);
if($stmt->execute()){
  header('Location:http://localhost/Labs/lab2/tabledecommande.php');
};

?>