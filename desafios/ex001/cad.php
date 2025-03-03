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
        <p>The predecessor is <?= $_GET["number_input"] - 1 ?></p>
        <p>The successor is <?= $_GET["number_input"] + 1 ?></p>
    </div>

</body>
</html>