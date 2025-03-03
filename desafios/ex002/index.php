<!DOCTYPE html>
<html lang="pt-PT">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gerador de Números Aleatórios</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <label for="number_input">Enter a value: </label>
        <p>Generating a random number between 0  and 100...</p>

        <p><?= "Random number: " . rand(0, 100) ?></p>

        <button id="btn_submit">Send</button>
    </div>

    <script>

        // funções para gerar valores aleatórios | PHP
        // rand() = 1951 - Linear Congrential Generator : lento
        // mt_rand() = 1997 - Mersenne Twister : rápido
        // A partir do PHP 7.1, rand() é um simples apontamento para mt_rand() : rápido
        // random_int() gera números aleatórios criptograficamente seguros : muito lento

        // evento de click no botão
        document.getElementById("btn_submit").addEventListener("click", (event) => {
            document.location.reload();
        });

    </script>
</body>
</html>
