<!DOCTYPE html>
<html lang="pt-PT">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculadora do Tempo</title>
  <link rel="stylesheet" href="../ex001/style.css">
</head>
<body>
  <!-- passo 1 : pegar dados da superglobal -->
  <?php
    $input_segundos = $_POST["input_segundos"] ?? 0;

    $semanas = intdiv($input_segundos, 604800); // 1 semana = 604800 segundos
    $resto = $input_segundos % 604800;

    $dias = intdiv($resto, 86400); // 1 dia = 86400 segundos
    $resto = $resto % 86400;

    $horas = intdiv($resto, 3600); // 1 hora = 3600 segundos
    $resto = $resto % 3600;

    $minutos = intdiv($resto, 60); // 1 minuto = 60 segundos
    $segundos = $resto % 60;
  ?>


  <!-- passo 2 : renderizar valor no input -->
  <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" class="container" id="form">
    <h1>Calculadora do Tempo</h1>
    <label for="input_segundos">Qual é o total de segundos?</label>
    <input type="number" name="input_segundos" id="input_segundos" min=0 value="<?= $input_segundos ?>">
    <input type="submit" value="Calcular">
  </form>

  <div class="container">
    <h1>Totalizando Tudo</h1>
    <p>Analisando o valor que você digitou, <?= number_format($input_segundos, 0, ',', 
  '.') ?> segundos equivalem a um total de:</p>
    <ul>
      <li><?= $semanas ?> semanas</li>
      <li><?= $dias ?> dias</li>
      <li><?= $horas ?> horas</li>
      <li><?= $minutos ?> minutos</li>
      <li><?= $segundos ?> segundos</li>
    </ul>
  </div>

</body>
</html>