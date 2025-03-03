<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Converter</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h1>Result</h1>
        <p>
            <?php
                $wallet = $_GET["wallet"];
                $tax = 5.22;
                $conversion = round($wallet / 5.17, 2);

                // Biblioteca
                $padrao = numfmt_create("pt_PT", NumberFormatter::CURRENCY);

                // formatação das moedas com internacionalização
                $wallet_in_reais = numfmt_format_currency($padrao, $wallet, "BRL");
                $wallet_in_dollars = numfmt_format_currency($padrao, $conversion, "BRL");

                // output
                echo "Yours $wallet_in_reais are $wallet_in_dollars";
            ?>
        </p>
    </div>

</body>
</html>