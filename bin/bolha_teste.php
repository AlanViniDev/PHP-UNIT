<?php 

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require("../../bolha/bolha.php");

class bolha_teste extends TestCase{

    public $vetor,$vetor2;
    public $TAM;
    

    public function teste (){
      
            $acessa = new Bolha();
            $acessa->Executa();
            $this->TAM = 7;

            /* Testa a ordem crescente */

            $this->vetor = array(
                0,1,2,3,4,5,6
            );

            for($x = 0; $x < $this->TAM; $x++){

                $this->assertEquals($this->vetor[$x],($acessa->vetor[$x]));
    
            } 

        
            /* Testa a ordem decrescente */

            $this->vetor2 = array(
                6,5,4,3,2,1,0
            ); 

        
        for($x = 0; $x < $this->TAM; $x++){

            $this->assertEquals($this->vetor2[$x],($acessa->vetor2[$x]));

        } 

    }
}

$teste = new bolha_teste();
$teste->teste();
?>



