<?php 
    namespace Projeto\ti23t\php;
 
    class Funcao{
        //encapapsulamento para evitar outras classes de acessarem estas variaveis 
        private int $num1;
        private int $num2;
        private int $num3;
        private int $resultado;
        

        public function __construct()
        {
            $this->resultado = 0;
        }//fim do construtor

        //construtor Método
        public function coletar(int $num1, int $num2)
        {
            $this->num1      = $num1;
            $this->num2      = $num2;
        }// fim do coletar

        //metodos modificadores (set) e acesso (get)
        public function __get(string  $dados):mixed
        {
            return $this->dados;
        }//fim do get

        public function __set(string $variavel, string $novoDado):void
        {
            $this->variavel = $novoDado;
        }//fim do set 

        //métodos somar,subtrair,multiplicar,divisão 
        public function somar()
        {
            $this-> resultado = $this->num1 + $this->num2;
            return "<br>A soma do $this->num1 e do $this->num2 é: $this->resultado<br> ";
        }//fim do somar

          public function subtrair()
        {
            $this-> resultado = $this->num1 - $this->num2;
             return "<br>A subtração do $this->num1 e do $this->num2 é: $this->resultado<br> ";
        }//fim do subtrair

          public function multiplicar()
        {
            $this-> resultado = $this->num1 * $this->num2;
             return "<br>A multiplicação do $this->num1 e do $this->num2 é: $this->resultado<br> ";
        }//fim do multiplicar

        public function dividir()
        { 
            if ($this->num2 <= 0)
            {
               return "Impossivel dividir por zero!";
            }
            else
            {
                $this-> resultado = $this->num1 / $this->num2;
            }   
             return "<br>A divisão do $this->num1 e do $this->num2 é: $this->resultado<br> ";
        }//fim do divisão


        public function bhaskara(int $a, int $b, int $c)
        {
            $delta = $b^2 - 4 * $a * $c; 
            if($delta < 0)
            {
              return "Impossível calcular x1 e x2 de delta negativo!, valor do delta: $delta";
            }
            else
            {
                $x1 = (-$b + sqrt($delta)) / (2 * $a);
                $x2 = (-$b - sqrt($delta)) / (2 * $a);  

                return "<br>Delta: $delta<br>X1: $x1<br>X2: $x2";
            }
        }//fim do bhaskara


        public function imc(float $altura, float $peso)
        {
            if($altura < 0 || $peso < 0)
            {
                return "Impossível calcular por zero";
            }
            else
            {
                $resultado = $peso /($altura^2);
            
                if($resultado <= 18.5)
                {
                    return "Seu IMC é: $resultado você está Abaixo do Peso";
                }
                else if($this->resultado >= 18.6)
                {
                    return "Seu IMC é: $resultado você está com o Peso Ideal";
                }
                else if($resultado >= 25)
                {
                    return "Seu IMC é: $resultado você está com Sobrepeso";
                }
                else if($resultado >= 30)
                {
                    return "Seu IMC é: $resultado você está com Obesidade";
                }
                else if($resultado >= 35 || $resultado < 40)
                {
                    return "Seu IMC é: $resultado você está com Obesidade Severa";
                }
                else
                {
                    return "Seu IMC é: $resultado você está com Obesidade Mórbida";
                }
            }
        }//fim do imc

        public function areaDeRetangulo(float $base, float $altura)
        {
            if($base <= 0 || $altura <= 0)
            {
                return "impossível calcular por zero!";

            }else
            {
                $area = $base * $altura;
                $resultado = $area;
                return "A Área do Retângulo é: $resultado ";
            }
        }//fim do retângulo

         public function areaDeTriangulo(float $base, float $altura)
        {
            if($base <= 0 || $altura <= 0)
            {
                return "impossível calcular por zero!";

            }else
            {
                $area = $base * $altura / 2;
                $resultado = $area;
                return "A Área do triângulo é: $resultado ";
            }
        }//fim do retângulo

              public function adicionarImposto18(float $preco)
        {
            if($preco <= 0)
            {
                return "impossível calcular por zero!";

            }else
            {
                $resultado = $preco * 0.18;
                return "O preço a pós 18% de imposto é: $resultado ";
            }
        }//fim do imposto





        
    }//fim da classe função
?> <!-- fechamento da tag do php -->