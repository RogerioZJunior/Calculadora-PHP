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
    <title>Número ao Quadrado e ao Cubo</title>
</head>
<body>
       <form method="POST" style="text-align:center;margin:10%; padding:5%; background-color:#bb0b0b;"> 
            <h1>Número ao Quadrado e ao Cubo</h1>  

                            <!-- area do texto -->
            <div class="mb-3">
                <label for="lNumero" class="form-label">Informe o Número:</label>
                <input type="number" class="form-control" id="Numero" name="Numero">
            </div>
                            <!-- area do texto -->
                            <!-- botãos -->
            <button type="submit" class="btn btn-primary">calcular
                <?php 
                    if(isset($_POST['Numero']))
                    {
                    $num1 = $_POST['Numero'];
                    //chamar variavel da classe funcao 
                     $resultado = $funcao->aoQuadroECubo($num1);
                    }
                ?>
            </button>
            <h2>
                <?php
                if(isset($_POST['Numero']))
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