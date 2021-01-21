<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
   <link rel="stylesheet" href="css/index.css" type="text/css" />
</head>
<body>
  
  <form action="calculadora.php" method="get">
 <h1>CALCULADORA PHP</h1>
    <input type="text" name="numero1" value="">
    <input type="text" name="numero2" value="">
    <input type="submit" name="" value="RESPUESTA">
  
  </form>

</body>
</html>
<?php
if(isset($_GET['numero1'])&& isset($_GET['numero2']) && is_numeric($_GET['numero1']) && is_numeric($_GET['numero2']) )//is_numeric identificar cada numero por lo que es
{
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    echo $numero1 + $numero2;
}
  



?>