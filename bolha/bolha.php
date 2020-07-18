<?php

class Bolha
{

    public $vetor,$vetor2;
    public $TAM;
    public $aux;

    public function Executa ()
    {

        $this->vetor = [7];

        $this->vetor = array(
            6,5,4,3,2,1,0
        );

        $this->vetor2 = array(
            0,1,2,3,4,5,6
        ); 

        $this->TAM = 7;
        $this->aux = 0;

        // coloca em ordem crescente
        for($x = 0; $x < $this->TAM; $x++ ){
            for($y = $x + 1; $y < $this->TAM; $y++ ){ // sempre 1 elemento a frente
                // se o (x > (x+1)) entao o x passa pra frente (ordem crescente)
                if ($this->vetor[$x] > $this->vetor[$y] ){
                    $this->aux = $this->vetor[$x];
                    $this->vetor[$x] = $this->vetor[$y];
                    $this->vetor[$y] = $this->aux;
                }
            }
        }

        echo " Elementos ordenados (Crescente): <br/>";

        for($x = 0; $x < $this->TAM; $x++){

            echo " O numero na posicao ".$x." eh ".$this->vetor[$x]."<br/>";

        }
        
        // coloca em ordem decrescente
        for($x = 0; $x < $this->TAM; $x++){
            for($y = $x + 1; $y < $this->TAM; $y++ ){
                if ($this->vetor2[$x] < $this->vetor2[$y] ){
                    $this->aux = $this->vetor2[$x];
                    $this->vetor2[$x] = $this->vetor2[$y];
                    $this->vetor2[$y] = $this->aux;
        }
    }
}

echo " Elementos Desordenados (Decrescente): <br/>";

for($x = 0; $x < $this->TAM; $x++){

    echo " O numero na posicao ".$x." eh ".$this->vetor2[$x]."<br/>";

}
}
}
