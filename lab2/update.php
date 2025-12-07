<?php $host = "localhost";
$user = "root";
$password = ""; 
$dbname = "restaurant";

$conn = new mysqli($host, $user, $password, $dbname);
$ncommande=$_POST['ncommande'];
$client=$_POST["client"];
$serveur=$_POST["serveur"];
$table=$_POST["table"];
$food=$_POST["food"];
$tax=$_POST["tax"];
$total=$_POST["total"];
$sql="UPDATE commande SET client=?, serveure=?, `table`=?, food=?, tax=?, total=? WHERE ncommande=?";
$stmt=$conn->prepare($sql);
$stmt->bind_param("ssisiii",$client,$serveur,$table,$food,$tax,$total,$ncommande,);
if($stmt->execute()){
  header('Location:http://localhost/Labs/lab2/tabledecommande.php');
};

?>