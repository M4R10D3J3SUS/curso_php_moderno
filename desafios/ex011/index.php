<!DOCTYPE html>
<html lang="pt-PT">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reajustador de Preços</title>
  <link rel="stylesheet" href="../ex001/style.css">
</head>
<body>
  <!-- passo 1 : pegar dados da superglobal -->
  <?php
    $preco_produto = $_POST["preco_produto"] ?? 0;
    $aumento = $_POST["aumento"] ?? 0;

    // cálculo :
    $preco_produto_novo = $preco_produto + (($aumento/100) * $preco_produto);

    // formatação :
    $formato_padrao = numfmt_create("pt_PT", NumberFormatter::CURRENCY);
    $preco_produto_novo_formatado = numfmt_format_currency($formato_padrao, $preco_produto_novo, "EUR");
    $preco_produto_antigo_formatado = numfmt_format_currency($formato_padrao, $preco_produto, "EUR");
  ?>

  <!-- passo 2 : renderizar valor no input -->
  <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" class="container" id="form">
    <h1>Reajustador de Preços</h1>
    <label for="ano_nasc">Preço do Produto (€)</label>
    <input type="number" name="preco_produto" id="preco_produto" min=0 value="<?= $preco_produto ?>" step=0.01>

    <label for="aumento" id="label_aumento">Qual será o percentual de reajuste? (<?= $aumento ?>%)</label>
    <input type="range" name="aumento" id="aumento" value="<?= $aumento ?>" min=0 max=100>
    <input type="submit" value="Reajustar">
  </form>

  <div class="container">
    <h1>Resultado do Reajuste</h1>
    <p>
      <?php 
        echo <<< Text
          O produto que custava $preco_produto_antigo_formatado, com           $aumento% de aumento vai passar a custar 
          $preco_produto_novo_formatado a partir de agora.
        Text
      ?>
    </p>
  </div>


  <script>
    document.getElementById("aumento").addEventListener("input", (evt) => {
      document.querySelector('#label_aumento').innerHTML = `
        Qual será o percentual de reajuste?
        (${evt.target.value}%)`;
      
    });
  </script>

</body>
</html>