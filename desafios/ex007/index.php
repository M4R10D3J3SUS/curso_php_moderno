<!DOCTYPE html>
<html lang="pt-PT">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Noção de Salário</title>
  <link rel="stylesheet" href="../ex001/style.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- passo 1 : pegar valor do superglobal -->
  <?php
    // operador de coalescência nula
    $salario = $_POST["salario"] ?? 870;
    $salario_minimo = 870;

    // cálculo
    $markup = intdiv($salario, $salario_minimo);
    $resto = 0;
    if ($markup > 0) {
      $resto = $salario % $salario_minimo;
    }

    // formatação da moeda
    $formato_padrao = numfmt_create("pt_PT", NumberFormatter::CURRENCY);
    $salario_formatado = numfmt_format_currency($formato_padrao, $salario, "EUR");
    $salario_minimo_formatado = numfmt_format_currency($formato_padrao, $salario_minimo, "EUR");
    $resto_formatado = numfmt_format_currency($formato_padrao, $resto, "EUR");
  ?>

  <!-- passo 2 : renderizar o value do input -->
  <form action="<?= $_SERVER['PHP_SELF']?>" class="container" method="post">
    <h1>Noção de Salário</h1>
    <label for="salario">Salário</label>
    <input type="number" name="salario" id="salario" step="0.01" value="<?= $salario ?>">
    <p>Considerando o salário mínimo de <?= $salario_minimo_formatado ?></p>
    <input type="submit" value="Calcular">
  </form>

  <!-- passo 3 : apresentar resultado final -->
  <div class="container">
    <h1>Resultado Final</h1>
    <p>Quem recebe um salário de <?= $salario_formatado ?> ganhar <?= $markup ?> salários mínimos + <?= $resto_formatado ?></p>
  </div>
</body>
</html>