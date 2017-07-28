<!doctype html>
<!-- http://localhost/Projects/php_Algoritmos/Escreva%20o%20numero%20por%20extenso/index.php -->
<html lang="pt-br">
<head>
  <meta charset="utf-8"/>
  <title>Escreva o numero por extenso</title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>

<body>
  <div class="container">
    <div class="page-header">
    </div>

    <form method="get" action="funcoes.php" class="form-inline">
      <div class="form-group">
        <label>Informe o Numero: </label>
        <input type="number" class="form-control" name="num" id="idNum" max="9999999" min="0" value="0" required>
        <input type="submit" value="Enviar">
      </div>
    </form>
  </div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
