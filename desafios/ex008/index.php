<!DOCTYPE html>
<html lang="pt-PT">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cálculo de Raízes</title>
  <link rel="stylesheet" href="../ex001/style.css">
</head>
<body>
  <!-- passo 1 : pegar valor do superglobal -->
  <?php
    // operador de coalescência nula
    $valor = $_POST["valor"] ?? 0;
  ?>

  <!-- passo 2 : renderizar o value do input -->
  <form action="<?= $_SERVER['PHP_SELF']?>" class="container" method="post">
    <h1>Raízes Matemáticas</h1>
    <label for="valor">Número</label>
    <input type="number"
          name="valor"
          id="valor"
          value="<?= $valor ?>"
          min=0>
    <input type="submit" value="Calcular Raízes">
  </form>

  <!-- passo 3 : apresentar resultado final -->
  <div class="container">
    <h1>Resultado Final</h1>
    <p>Analisando o número <?= $valor ?>, temos:</p>
    <ul>
      <li>Raiz Quadrada : <?= round($valor ** (1/2), 2) ?></li>
      <li>Raiz Cúbica : <?= round($valor ** (1/3), 2) ?></li>
    </ul>
  </div>
</body>
</html>