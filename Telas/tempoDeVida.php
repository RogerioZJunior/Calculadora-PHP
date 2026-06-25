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
    <title>Calcular o tempo restante de vida até 100 anos</title>
</head>
<body>
       <form method="POST" style="text-align:center;margin:10%; padding:5%; background-color:#bb0b0b;"> 
            <h1>Calcular o tempo restante de vida até 100 anos</h1>  

                            <!-- area do texto -->
            <div class="mb-3">
                <label for="lIdade" class="form-label">Informe sua idade:</label>
                <input type="text" class="form-control" id="idade" name="idade">
            </div>
            
                            <!-- area do texto -->
                            <!-- botãos -->
            <button type="submit" class="btn btn-primary">Calcular
                <?php 
                    if(isset($_POST['idade']))
                    {
                        $idade = $_POST['idade'];
                        //chamar variavel da classe funcao 
                        $resultado = $funcao->tempoDeVida($idade);
                    }
                ?>
            </button>
            <h2>
                <?php 
                if(isset($_POST['idade']))
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