<?php


class Car {
  private $num_telaio;

  public function __construct($num_telaio){
    $this->num_telaio=$num_telaio;
  }
    private function getNumtelaio(){
        return $this->num_telaio;
    }
    public function printNumtelaio(){
        echo $this->getNumtelaio();
    } 

}
class Fiat extends Car {
  protected $license;
  protected $name;
  public $targa;


  public function __construct($name, $license, $targa,$num_telaio ){
    parent::__construct($num_telaio);
    $this->name=$name;
    $this->license=$license;
    $this->targa=$targa;
  }
   public function getName(){
    return $this->name;
   }
 
   public function getLicense(){
    return $this->license;

    }

    public function frase(){
        echo "La mia macchina e' $this->name, con targa $this->targa e numero di Telaio: ";
         $this->printNumtelaio();
    }
 

 }
  




$car= new Fiat('Opel','license','ND123OJ','1234');
//print_r($car);

//echo $car->getName();
//echo $car->getLicense();
//$car->printNumtelaio();

$car->frase();





?>