<?php 
session_start();
$host = "localhost";
$user = "root";
$password = ""; 
$dbname = "restaurant";

$conn = new mysqli($host, $user, $password, $dbname);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$finaltotal=$_POST["finaltotal"];
$orders=$_POST["allfood"];
$_SESSION['finaltotal']=$finaltotal;
$_SESSION['allfood']=$orders;
header('Location:http://localhost/Labs/lab2/form.php');

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Restaurant Command Form</title>
      <link rel="stylesheet" href="commande.css?v=<?php echo time(); ?>">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<form method="POST">
  <div class='food'>
      <button class='buttonn'><i class='fa fa-long-arrow-left
'></i></button>
      <button class='button'><i class='fa fa-long-arrow-right	
'></i></button>

    <h2  class='title'>Fast Food</h2>
    <section class='fastfood'>
      <section > 
      <div id='item' class='item'>
        <button type='button' class='minus'>-</button>
        
        <input  type="number" class='qt' readonly step="1" name="qt" value='0' > 
        <img class='thefood'  src="sandwich.png" alt="">
        <input type="text" class='priceinp' readonly name="sprice" value='10' > 
        <input type="text" class='nameinp' readonly name="sname" value='sandwich' > 
        <input type="number" id='total' hidden readonly name="total" value='0' >
        <input type="text" id='qtname' hidden readonly name="total" value='' >
      </div>
   </section>
   <section>
    
      <div id='item' class='item'>
        <button type='button' class='minus'>-</button>
        <input type="number" class='qt' readonly step="1" name="qt" value='0' > 
        <img class='thefood' src="burger.png" alt="">
        <input type="text" class='priceinp' readonly name="bprice" value='30' >
        <input type="text" class='nameinp' readonly name="bname" value='burger' > 
        <input type="number" id='total' hidden readonly name="total" value='0' >
        <input type="text" id='qtname' hidden readonly name="total" value='' >
      </div>
    </section>
    <section>
      
      <div id='item' class='item'>
        <button type='button' class='minus'>-</button>
        <input type="number" class='qt' readonly step="1" name="qt" value='0' > 
        <img class='thefood' src="shawarma.png" alt="">
        <input type="text" class='priceinp' readonly name="shprice" value='25' >
        <input type="text" class='nameinp' readonly name="shname" value='shawarma' >
        <input type="number" id='total' hidden readonly name="total" value='0' >
        <input type="text" id='qtname' hidden readonly name="total" value='' >

      </div>
    </section>
    <section>
      
      <div id='item' class='item'>
        <button type='button' class='minus'>-</button>
        <input type="number" class='qt' readonly step="1" name="qt" value='0' > 
        <img class='thefood' src="tacos.png" alt="">
        <input type="text" class='priceinp' readonly name="tprice" value='32' >
        <input type="text" class='nameinp' readonly name="tname" value='tacos' >
        <input type="number" id='total' hidden readonly name="total" value='0' >
        <input type="text" id='qtname' hidden readonly name="total" value='' >
      </div>
    </section>
    <section>
      
      <div id='item' class='item'>
        <button type='button' class='minus'>-</button>
        <input type="number" class='qt' readonly step="1" name="qt" value='0' > 
        <img class='thefood' src="pasticio.png" alt="">
        <input type="text" class='priceinp' readonly name="pprice" value='33' >
        <input type="text" class='nameinp' readonly name="tname" value='pasticio' >
        <input type="number" id='total' hidden readonly name="total" value='0' >
        <input type="text" id='qtname' hidden readonly name="total" value='' >
      </div>
    </section>
    <section>
      
      <div id='item' class='item'>
        <button type='button' class='minus'>-</button>
        <input type="number" class='qt' readonly step="1" name="qt" value='0' > 
        <img class='thefood' src="pasticio.png" alt="">
        <input type="text" class='priceinp' readonly name="bprice" value='30' >
        <input type="text" class='nameinp' readonly name="tname" value='tacos' >
        <input type="number" id='total' hidden readonly name="total" value='0' >
        <input type="text" id='qtname' hidden readonly name="total" value='' >
      </div>
    </section>
    <section>
      
        <div id='item' class='item'>
          <button type='button' class='minus'>-</button>
        <input type="number" class='qt' readonly step="1"  name="qt" value='0' > 
        <img class='thefood' src="tacos.png" alt="">
        <input type="text" class='priceinp' readonly name="bprice" value='30' >
        <input type="text" class='nameinp' readonly name="tname" value='tacos' >
        <input type="number" id='total' hidden readonly name="total" value='0' >
        <input type="text" id='qtname' hidden readonly name="total" value='' >
      </div>
    </section>
    <section>
        
        <div id='item' class='item'>
          <button type='button' class='minus'>-</button>
        <input type="number" class='qt' readonly step="1" name="qt" value='0' > 
        <img class='thefood' src="pasticio.png" alt="">
        <input type="text" class='priceinp' readonly name="bprice" value='30' >
        <input type="text" class='nameinp' readonly name="tname" value='tacos' >
        <input type="number" id='total' hidden readonly name="total" value='0' >
        <input type="text" id='qtname' hidden readonly name="total" value='' >
      </div>
    </section>
    <section>
      
       <div id='item' class='item'>
        <button type='button'  class='minus'>-</button>
        <input type="number" class='qt' readonly step="1" name="qt" value='0' > 
        <img class='thefood' src="pasticio.png" alt="">
        <input type="text" class='priceinp' readonly name="bprice" value='30' >
        <input type="text" class='nameinp' readonly name="tname" value='tacos' >
        <input type="number" id='total' hidden readonly name="total" value='0' >
        <input type="text" id='qtname' hidden  readonly name="total" value='' >
      </div>
    </section> 

    </section>
  <input type="number" id='finaltotal' hidden readonly name="finaltotal"  >
  <input type="text" id='allfood' hidden name='allfood' >
  <button type='button' id='valider'>valider</button>
  <button type='submit' id='next'>next</button>
  <button type='button' id='canceled'>cancel</button>
  </div>
  </form>

  <script src="index.js?v=<?php echo time(); ?>"></script>
</body>
</html>

