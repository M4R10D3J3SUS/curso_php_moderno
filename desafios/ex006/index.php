<!DOCTYPE html>
<html lang="pt-PT">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Anatomia da Divisão</title>
  <link rel="stylesheet" href="../ex001/style.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- passo 1 : pegar valores do superglobal -->
  <?php
    // operador de coalescência nula
    $divisor = $_POST["divisor"] ?? 2;
    $dividendo = $_POST["dividendo"] ?? 1;
  ?>

  <!-- passo 2 : renderizar os values dos inputs -->
  <form action="<?= $_SERVER['PHP_SELF']?>" class="container" method="post">
    <h1>Anatomia De Uma Divisão</h1>
    <label for="divisor">Divisor</label>
    <input type="number" name="divisor" id="divisor" step="0.50" value="<?= $divisor ?>">
    <label for="dividendo">Dividendo</label>
    <input type="number" name="dividendo" id="dividendo" step="0.50" value="<?= $dividendo ?>">
    <input type="submit" value="Analisar">
  </form>

  <div class="container">
    <h1>Estrutura Da Divisão</h1> <br>
    <div class="container_anatomia">
      <p><?= $divisor ?></p> <!-- divisor -->
      <p><?= $dividendo ?></p> <!-- dividendo -->
      <p><?= $divisor % $dividendo ?></p> <!-- resto da divisão -->
      <p><?= intdiv($divisor, $dividendo) ?></p> <!-- divisão inteira -->
    </div>
  </div>
</body>
</html>