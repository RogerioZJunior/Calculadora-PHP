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
    <title> Calcule a velocidade média</title>
</head>
<body>
       <form method="POST" style="text-align:center;margin:10%; padding:5%; background-color:#bb0b0b;"> 
            <h1>Calcule a velocidade média</h1>  

                            <!-- area do texto -->
            <div class="mb-3">
                <label for="lVelocidade" class="form-label">Informe a Velocidade:</label>
                <input type="number" class="form-control" id="velocidade" name="velocidade">
            </div>

             <div class="mb-3">
                <label for="lDistancia" class="form-label">Informe a Distancia:</label>
                <input type="number" class="form-control" id="distancia" name="distancia">
            </div>

             <div class="mb-3">
                <label for="lTempo" class="form-label">Informe o Tempo:</label>
                <input type="number" class="form-control" id="tempo" name="tempo">
            </div>
                            <!-- area do texto -->
                            <!-- botãos -->
            <button type="submit" class="btn btn-primary">Calcular
                <?php 
                    if(isset($_POST['velocidade']) || isset($_POST['distancia']) || isset($_POST['tempo']))
                    {
                        $velocidade =  $_POST['velocidade'];
                        $distancia =   $_POST['distancia'];
                        $tempo =       $_POST['tempo'];
                        //chamar variavel da classe funcao 
                      $resultado = $funcao->($velocidade,$distancia,$tempo);
                    }
                ?>
            </button>
            <h2>
                <?php 
                if(isset($_POST['velocidade']) || isset($_POST['distancia']) || isset($_POST['tempo']))
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