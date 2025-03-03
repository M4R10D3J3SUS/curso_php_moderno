<!DOCTYPE html>
<html lang="pt-PT">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Currency Converter</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="./cad.php" method="GET" class="container" id="form">
        <h1>Currency Converter</h1>
        <label for="wallet">How much R$ do you have in your wallet?</label>
        <input type="text" name="wallet" id="wallet"/>
        <button type="submex003it" id="btn_submit">
            convert
        </button>
    </form>

    <script>
        document.getElementById("form").addEventListener("submit", (event) => {
            event.preventDefault();
            const input = document.getElementById("wallet");

            if (input.value === '' || isNaN(input.value)) {
                alert('Enter a value please to send.');
            } else {
                event.target.submit();
            }
        });
    </script>
</body>
</html>