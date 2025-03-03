<!DOCTYPE html>
<html lang="pt-PT">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cálculo de Idade</title>
  <link rel="stylesheet" href="../ex001/style.css">
</head>
<body>
  <!-- passo 1 : pegar dados da superglobal -->
  <?php 
    $ano_nasc = $_POST["ano_nasc"] ?? 2000;
    $ano_atual = date('Y');
    $ano_fim = $_POST["ano_fim"] ?? $ano_atual;

    // cálculo :
    $idade_calculada = $ano_fim - $ano_nasc;
  ?>

  <!-- passo 2 : renderizar valor no input -->
  <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" class="container">
    <h1>Cálculo De Idade</h1>
    <label for="ano_nasc">Em que ano você nasceu?</label>
    <input type="number" name="ano_nasc" id="ano_nasc" min=1 value="<?= $ano_nasc ?>">

    <label for="ano_fim">Quer saber sua idade em que ano? (atualmente estamos em <?= $ano_atual ?>)</label>
    <input type="number" name="ano_fim" id="ano_fim" min=<?= $ano_atual ?> value="<?= $ano_fim ?>">
    <input type="submit" value="Qual será minha idade?">
  </form>

  <div class="container">
    <h1>Resultado</h1>
    <p><?= "Quem nasceu em " . $ano_nasc . " tem/terá " . $idade_calculada . " anos em " . $ano_fim . "!" ?></p>
  </div>


</body>
</html>