<?php 
    namespace Projeto\ti23t\telas;
    include('cabecalho.php');
    require_once('../php/funcoes.php'); //acessando o arquivo
    use Projeto\ti23t\php\Funcao; //acessando a classe que está no arquivo funcoes.php
    $funcao = new Funcao(); //construtor da classe funcao . conexão da index e da funcao
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bhaskara</title>
</head>
<body>
       <form method="POST" style="text-align:center;margin:10%; padding:5%; background-color:#bb0b0b;"> 
            <h1>Bhaskara</h1>  

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
                <label for="lterceiroNumero" class="form-label">Informe o Terceiro Número:</label>
                <input type="number" class="form-control" id="terceiroNumero" name="terceiroNumero">
            </div>

                            <!-- area do texto -->
                            <!-- botãos -->
            <button type="submit" class="btn btn-primary">calcular
                <?php 
                    if(isset($_POST['primeiroNumero']) || isset($_POST['segundoNumero']) || isset($_POST['terceiroNumero']))
                    {
                        $a = $_POST['primeiroNumero'];
                        $b = $_POST['segundoNumero'];
                        $c = $_POST['terceiroNumero'];
                        //chamar variavel da classe funcao 
                        $resultado = $funcao->bhaskara($a,$b,$c);
                    }
                ?>
            </button>
            <h2>
                <?php 
                if(isset($_POST['primeiroNumero']) || isset($_POST['segundoNumero']) || isset($_POST['terceiroNumero']) )
                {
                echo $resultado; 
                }
                else
                {   
                    echo "Preencha os campos!";
                }
                ?>
            </h2>
        </form>
</body>
</html>