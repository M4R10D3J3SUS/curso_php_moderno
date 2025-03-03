<!DOCTYPE html>
<html lang="pt-PT">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="../../desafios/ex001/styles.css">
  </head>
  <body>
    <?php 
      // operador de coalescência nula
      $num1 = $_POST["v1"] ?? 0;
      $num2 = $_POST["v2"] ?? 0;
    ?>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" class="container" method="POST">
      <label for="v1">Valor 1: </label>
      <input type="number" name="v1" id="v1" value="<?= $num1 ?>">
      <label for="v2">Valor 2: </label>
      <input type="number" name="v2" id="v2" value="<?= $num2 ?>">
      <input type="submit" value="Somar">
    </form>
    <div class="container">
      Resultado: <?= ($num1 + $num2) ?>
    </div>
  </body>
</html>