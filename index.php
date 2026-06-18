<?php  namespace Projeto\ti23t; 
    require_once('php/funcoes.php'); //acessando o arquivo
    include('telas\cabecalho.php');//acessando cabeçalho
  
?>   <!-- começar php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
</head>
<body>
    <h1> Boas Vindas </h1>
      <a href="telas/somar.php"  class="btn btn-primary">Somar</a>         <!-- botãos -->                    
      <a href="telas/subtrair.php"  class="btn btn-primary">Subtrair</a>
      <a href="telas/multiplicar.php"  class="btn btn-primary">Multiplicar</a>
      <a href="telas/dividir.php"  class="btn btn-primary">Dividir</a>                         
      <a href="telas/bascara.php"  class="btn btn-primary">Bascara</a> 

</body>
</html>