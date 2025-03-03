<!DOCTYPE html>
<html lang="pt-PT">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício PHP</title>
  <link rel="stylesheet" href="../../desafios/ex001/style.css">
</head>
<body>
  <main class="container">
    <pre>
      <?php
        setcookie("dia-da-semana", "SEGUNDA", time() + 3600);
        session_start();
        $_SESSION["teste"] = "FUNCIONOU!";

        echo "<h1>Superglobal GET</h1> <br>";
        var_dump($_GET);
        
        echo "<h1>Superglobal POST</h1> <br>";
        var_dump($_POST);
        
        echo "<h1>Superglobal REQUEST</h1> <br>";
        var_dump($_REQUEST);
        
        echo "<h1>Superglobal COOKIE</h1> <br>";
        var_dump($_COOKIE);
        
        echo "<h1>Superglobal SESSION</h1> <br>";
        var_dump($_SESSION);
        
        echo "<h1>Superglobal ENV</h1> <br>";
        var_dump($_ENV);
        
        echo "<h1>Superglobal SERVER</h1> <br>";
        var_dump($_SERVER);
        
        echo "<h1>Superglobal GLOBALS</h1> <br>";
        var_dump($GLOBALS);
      ?>
    </pre>
  </main>
  
</body>
</html>