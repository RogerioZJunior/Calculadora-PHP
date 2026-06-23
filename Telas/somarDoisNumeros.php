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
    <title>Somar dois números</title>
</head>
<body>
       <form method="POST" style="text-align:center;margin:10%; padding:5%; background-color:#bb0b0b;"> 
            <h1>Somar dois números</h1>  

                            <!-- area do texto -->
            <div class="mb-3">
                <label for="lnum1" class="form-label">Informe o Primeiro número:</label>
                <input type="text" class="form-control" id="num1" name="num1">
            </div>
            
            <div class="mb-3">
                <label for="lnum2" class="form-label">Informe o Segundo número:</label>
                <input type="text" class="form-control" id="num2" name="num2">
            </div>
                            <!-- area do texto -->
                            <!-- botãos -->
            <button type="submit" class="btn btn-primary">Somar
                <?php 
                    if(isset($_POST['num1']) || isset($_POST['num2']))
                    {
                        $num1 = $_POST['num1'];
                        $num2 = $_POST['num2'];
                        //chamar variavel da classe funcao 
                        $resultado = $funcao->somarDoisNumeros($num1,$num2);
                    }
                ?>
            </button>
            <h2>
                <?php 
                if(isset($_POST['num1']) || isset($_POST['num2']))
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