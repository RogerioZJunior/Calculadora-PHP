<?php  namespace Projeto\ti23t; 
    require_once('php/funcoes.php'); //acessando o arquivo
    use Projeto\ti23t\php\Funcao; //acessando a classe que está no arquivo funcoes.php
    $funcao = new Funcao(); //construtor da classe funcao . conexão da index e da funcao
?>   <!-- começar php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <title>Calculadora</title>
</head>
<body>
    <form method="POST" style="text-align:center;margin:10%; padding:5%; background-color:#bb0b0b;"> 
        <h1>Calculadora</h1>  

                          <!-- area do texto -->
        <div class="mb-3">
            <label for="lPrimeiroNumero" class="form-label">Informe o Primeiro Número:</label>
            <input type="number" class="form-control" id="primeiroNumero" name="primeiroNumero">
        </div>

        <div class="mb-3">
            <label for="lSegundoNumero" class="form-label">Informe o Segundo Número:</label>
            <input type="number" class="form-control" id="segundoNumero" name="segundoNumero">
        </div>

        <div class="mb-3">
            <label for="lResultado" class="form-label">Resultado</label>
            <textarea class="form-control" id="resultado" name="resultado" rows="3"></textarea>
                          <!-- area do texto -->

        </div>     
                          <!-- botãos -->
        <button type="submit" class="btn btn-primary">Somar
            <?php 
                $num1 = $_POST['primeiroNumero'];
                $num2 = $_POST['segundoNumero'];
                //chamar variavel da classe funcao 
                $funcao->coletar($num1,$num2);
                $funcao->somar(); 
               echo $num1."".$num2;
               //PARADO AQUI
            ?>
        </button>

        <button type="button" class="btn btn-primary">Subtrair</button>
        <button type="button" class="btn btn-primary">Multiplicar</button>
        <button type="button" class="btn btn-primary">Dividir</button>
                          <!-- botãos -->
    </form>
</body>
</html>