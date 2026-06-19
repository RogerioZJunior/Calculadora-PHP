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
    <title>Área De Retângulo</title>
</head>
<body>
       <form method="POST" style="text-align:center;margin:10%; padding:5%; background-color:#bb0b0b;"> 
            <h1>Calcular Área De Retângulo</h1>  

                            <!-- area do texto -->
            <div class="mb-3">
                <label for="lBase" class="form-label">Informe a Base:</label>
                <input type="number" class="form-control" id="base" name="base">
            </div>

             <div class="mb-3">
                <label for="lAltura" class="form-label">Informe a Altura:</label>
                <input type="number" class="form-control" id="altura" name="altura">
            </div>
                            <!-- area do texto -->
                            <!-- botãos -->
            <button type="submit" class="btn btn-primary">Calcular
                <?php 
                    if(isset($_POST['base']) || isset($_POST['altura']))
                    {
                        $base = $_POST['base'];
                        $altura = $_POST['altura'];
                        //chamar variavel da classe funcao 
                      $resultado = $funcao->areaDeRetangulo($base,$altura);
                    }
                ?>
            </button>
            <h2>
                <?php 
                if(isset($_POST['base']) || isset($_POST['altura']))
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