<!DOCTYPE html>
<html lang="pt-PT">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Caixa Eletrônico</title>
  <link rel="stylesheet" href="../ex001/style.css">
</head>
<body>
  <!-- passo 1 : pegar dados da superglobal -->
  <?php
    // operador de coalescência nula
    $montante = $_POST["montante"] ?? 0;

    // formatação
    $formatador = numfmt_create("pt_br", NumberFormatter::CURRENCY);
    $montante_formatado = numfmt_format_currency($formatador, $montante, "BRL");

    // cálculo
    $nota_100 = intdiv($montante, 100);
    $resto = $montante % 100;

    $nota_50 = intdiv($resto, 50);
    $resto = $resto % 50;

    $nota_10 = intdiv($resto, 10);
    $resto = $resto % 10;

    $nota_5 = intdiv($resto, 5);
    $resto = $resto % 5;

  ?>

  <!-- passo 2 : renderizar valor no input -->
  <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" class="container" id="form">
    <h1>Caixa Eletrônico</h1>
    <label for="montante">Qual valor deseja levantar? (€)*</label>
    <input type="number" name="montante" id="montante" min=5 value="<?= $montante ?>" step=5>
    <p>*Notas disponíveis: R$100, R$50, R$10 e  R$5</p>
    <input type="submit" value="Levantar">
  </form>

  <div class="container">
    <h1>Levantamento de <?= $montante_formatado ?> realizado</h1>
    <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
    <ul>
      <li>
        <img src="./imagens/100-reais.jpg" alt="100 reais">
        <span>x <?= $nota_100 ?></span>
      </li>
      <li>
        <img src="./imagens/50-reais.jpg" alt="100 reais">
        <span>x <?= $nota_50 ?></span>
      </li>
      <li>
        <img src="./imagens/10-reais.jpg" alt="100 reais">
        <span>x <?= $nota_10 ?></span>
      </li>
      <li>
        <img src="./imagens/5-reais.jpg" alt="100 reais">
        <span>x <?= $nota_5 ?></span>
      </li>
    </ul>
  </div>
</body>
</html>