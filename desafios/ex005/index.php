<!DOCTYPE html>
<html lang="pt-PT">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Antecessor e Sucessor</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="./cad.php" method="GET" class="container" id="form">
        <label for="number_input">Enter a value: </label>
        <input type="number" name="number_input" id="number_input" step="0.001"/>
        <button type="submit" id="btn_submit">
            Send
        </button>
    </form>

    <script>
        document.getElementById("form").addEventListener("submit", (event) => {
            event.preventDefault();
            const number_input = document.getElementById("number_input");

            if (number_input.value === '') {
                alert('Enter a value please to send.');
            } else {
                event.target.submit();
            }
        });
    </script>
</body>
</html>