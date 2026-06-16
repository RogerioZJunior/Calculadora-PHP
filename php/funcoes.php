<?php 
    namespace Projeto\ti23t\php;
 
    class Funcao{
        //encapapsulamento para evitar outras classes de acessarem estas variaveis 
        private int $num1;
        private int $num2;
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
        }//fim do somar

          public function subtrair()
        {
            $this-> resultado = $this->num1 - $this->num2;
        }//fim do subtrair

          public function multiplicar()
        {
            $this-> resultado = $this->num1 * $this->num2;
        }//fim do multiplicar

        public function dividir()
        { 
            if ($string->num2 <= 0)
            {
                $this->resultado = "Impossível dividir por zero";
            }
            else
            {
                $this-> resultado = $this->num1 / $this->num2;
            }
        }//fim do divisão

        
    }//fim da classe função
?> <!-- fechamento da tag do php -->