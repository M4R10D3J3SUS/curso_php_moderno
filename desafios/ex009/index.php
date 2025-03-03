<!DOCTYPE html>
<html lang="pt-PT">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cálculo de Médias</title>
  <link rel="stylesheet" href="../ex001/style.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- passo 1 : pegar valor do superglobal -->
  <?php
    // operador de coalescência nula
    $valor1 = $_POST["valor1"] ?? 0;
    $peso1 = $_POST["peso1"] ?? 1;
    $valor2 = $_POST["valor2"] ?? 1;
    $peso2 = $_POST["peso2"] ?? 0;

    // cálculo das médias
    $media_aritmetica = number_format(($valor1 + $valor2) / 2, 2, ',', ' ');
    $media_ponderada = number_format(((($peso1 * $valor1) + ($peso2 * $valor2)) / ($peso1 + $peso2)), 2, ',', ' ');
  ?>

  <!-- passo 2 : renderizar o value do input -->
  <form action="<?= $_SERVER['PHP_SELF']?>" class="container" method="post">
    <h1>Cálculo de Médias</h1>
    <label for="valor1">1º Valor:</label>
    <input type="number" name="valor1" id="valor1" min=0 value="<?= $valor1 ?>">

    <label for="peso1">1º Peso:</label>
    <input type="number" name="peso1" id="peso1" min=0 value="<?= $peso1 ?>">

    <label for="valor2">2º Valor:</label>
    <input type="number" name="valor2" id="valor2" min=0 value="<?= $valor2 ?>">

    <label for="peso2">2º Peso:</label>
    <input type="number" name="peso2" id="peso2" min=0 value="<?= $peso2 ?>">

    <input type="submit" value="Calcular Médias">
  </form>

  <!-- passo 3 : apresentar resultado final -->
  <div class="container">
    <h1>Cálculo das Médias</h1>
    <p>Analisando os valores <?= $valor1 . " e " . $valor2 ?>:</p>
    <ul>
      <li>A Média Aritmética entre os valores é igual a <?= $media_aritmetica ?>.</li>
      <li>A Média Aritmética Ponderada com pesos <?= 
      $peso1 . " e " . $peso2 . " é igual a " . $media_ponderada ?>.</li>
    </ul>
    
  </div>
</body>
</html>