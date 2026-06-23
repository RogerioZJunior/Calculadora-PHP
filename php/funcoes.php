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
                else if($resultado >= 18.6 && $resultado <24.9)
                {
                    return "Seu IMC é: $resultado você está com o Peso Ideal";
                }
                else if($resultado >= 25 && $resultado <29.9)
                {
                    return "Seu IMC é: $resultado você está com Sobrepeso";
                }
                else if($resultado >= 30  && $resultado <34.9)
                {
                    return "Seu IMC é: $resultado você está com Obesidade";
                }
                else if($resultado >= 35 && $resultado < 40)
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
                $imposto = $preco * 0.18;
                $resultado = $imposto + $preco;
                return "O preço a pós 18% de imposto é: $resultado ";
            }
        }//fim do imposto


            public function lerIdade(int $idade)
        {
            $resultado = $idade * 365.3; 
            return "Sua idade em dias é: $resultado ";
        }//fim do ler idade


        // 1. Leia dois números e exiba a soma. 
          public function somarDoisNumeros(float $num1, float $num2)
        {
                $resultado = $num1 + $num2;
                return "A soma é: $resultado "; 
        }//fim do somar dois números

        // 2. Leia um número e exiba o dobro.
           public function dobrarNumero(float $num1)
        {
                $resultado = $num1 * 2;
                return "O resultado é: $resultado "; 
        }//fim do Dobrar número

        //3. Calcule a média entre três números.     
           public function media(float $num1,float $num2,float $num3)
        {
                $soma = $num1 + $num2 + $num3; 
                $resultado = $soma / 3; 
                return "O resultado é: $resultado "; 
        }//fim do calcular média

        // 4. Leia um número e exiba sua raiz quadrada.
           public function raizQuadrada(float $num1)
        {
             $resultado = sqrt($num1);  
             return "O resultado é: $resultado "; 
        }//fim do raiz quadrada

        // 5. Leia um valor em metros e converta para centímetros.
         public function metrosParaCentimetros(float $num1)
        {
            if($num1 <= 0)
            {
                return "impossível calcular por zero!";
            }
            else
            {
                $resultado = $num1 * 100;
                return "O resultado é: $resultado ";
            }
        }//fim do metros para centimetros

        // 6. Calcule a área de um círculo com base no raio.
          public function areaDeCirculo(float $raio)
        {
            if($raio <= 0)
            {
                return "impossível calcular por zero!";

            }else
            {
                $resultado = $raio^2 * 3.14;
                return "A Área do Circulo é: $resultado ";
            }
        }//fim do circulo

        // 7. Converta temperatura de Celsius para Fahrenheit. 
         public function conveterTemperatura(float $num1)
        {
                $resultado = $num1 * 1.8 + 32; 
                return "A temperatura em Fharenheit é: $resultado ";
        }//fim do temperatura

        // 8. Calcule o valor de um produto com 10% de desconto. 
             public function desconto(float $preco)
        {
            if($preco <= 0)
            {
                return "impossível calcular por zero!";

            }else
            {
                $resultado = $preco * 0.90;
                return "O preço a pós 10% de desconto é: $resultado ";
            }
        }//fim do desconto

        // 9. Leia a idade de uma pessoa em anos e exiba em meses. 
            public function lerIdadeEmMesses(int $idade)
        {
            if($idade <= 0)
            {
                return "impossível calcular por zero!";
            }
            else
            {
                $resultado = $idade * 12;  
                return "Sua idade em messes é: $resultado ";
            }
        }//fim do ler idade em messes

        //10. Leia um número e exiba se ele é par ou ímpar (sem usar if). 
           public function numeroImparOuPar(int $num1)
           {
                if($num1 %2 == 0)
                {
                    return "O Número $num1 é Par ";
                }
                else
                {
                    return "O Número $num1 é Ímpar ";
                }
           }//fim do numero impar e par
        
        
    }//fim da classe função
?> <!-- fechamento da tag do php -->