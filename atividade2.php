<html>
 <head>
  <title>Atividade2</title>
 </head>
 <body>
 <form action="" method="get">
  Digite um número:  <input type="number" name="number" /><br />
  <input type="submit" name="submit" value="Testar" />
 </form> 
 <?php 
  $numero = $_GET['number'];

  if($numero % 2 == 0)
   echo "$numero é par";
  else
   echo "$numero é ímpar";
 ?>
 </body>
</html>
Paralelamente, todo número ímpar possui resto da divisão por 2 igual a 1.
Então podemos resolver este tutorial da seguinte forma:
<html>
 <head>
  <title>Apostila PHP Progressivo</title>
 </head>
 <body>
 <form action="" method="get">
  Digite um número:  <input type="number" name="number" /><br />
  <input type="submit" name="submit" value="Testar" />
 </form> 
 <?php 
  $numero = $_GET['number'];

  if($numero % 2 == 1)
   echo "$numero é ímpar";
  else
   echo "$numero é par";
 ?>
 </body>
</html>