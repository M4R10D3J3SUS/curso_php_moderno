<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Converter</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="container">
        <h1>Result</h1>
        <p>
            <?php
                // consumo de api
                $seven_days_ago = date("m-d-Y", strtotime("-7 days"));
                $today = date("m-d-Y");
                $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=%27' . $seven_days_ago. '%27&@dataFinalCotacao=%27' . $today . '%27&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,cotacaoVenda,dataHoraCotacao';
                $data =  json_decode(file_get_contents($url), true);

                // variaveis
                $tax = $data["value"][0]["cotacaoCompra"];
                $wallet = $_GET["wallet"];
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