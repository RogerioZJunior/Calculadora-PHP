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
    <title>Calcular sálario por horas trabalhadas</title>
</head>
<body>
       <form method="POST" style="text-align:center;margin:10%; padding:5%; background-color:#bb0b0b;"> 
            <h1>Calcular sálario por horas trabalhadas</h1>  

                            <!-- area do texto -->
            <div class="mb-3">
                <label for="lValorHora" class="form-label">Informe o valor da hora:</label>
                <input type="text" class="form-control" id="valorHora" name="valorHora">
            </div>
            
            <div class="mb-3">
                <label for="lHorasTrabalhadas" class="form-label">Informe as horas trabalhadas:</label>
                <input type="text" class="form-control" id="horasTrabalhadas" name="horasTrabalhadas">
            </div>
                            <!-- area do texto -->
                            <!-- botãos -->
            <button type="submit" class="btn btn-primary">Calcular
                <?php 
                    if(isset($_POST['valorHora']) || isset($_POST['horasTrabalhadas']))
                    {
                        $valorHora = $_POST['valorHora'];
                        $horas = $_POST['horasTrabalhadas'];
                        //chamar variavel da classe funcao 
                        $resultado = $funcao->horasTrabalhadas($valorHora,$horas);
                    }
                ?>
            </button>
            <h2>
                <?php 
                if(isset($_POST['valorHora']) || isset($_POST['horasTrabalhadas']))
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