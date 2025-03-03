<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e Sucessor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h1>Result</h1>
        <p>The number chosen was <?= $_GET["number_input"] ?></p>
        <p>
            <?php
            $number = $_GET["number_input"];

            $int_part = (int) $number;
            $float_part = abs($int_part - $number);

            echo "Integer part: $int_part\n";
            echo "Floating part: $float_part\n";
            ?>
        </p>
    </div>

</body>
</html>