<?php

trait Calculator{

public function sum($a, $b) {
  return $a + $b;
}

public function sub($a, $b) {
  return $a - $b;
}

public function mul($a, $b) {
  return $a * $b;
}



public function div($a, $b) {
  return $a / $b;
}

public function sqr($a){
  return sqrt($a);
}

}


class Rettangolo{
    
    use Calculator;
    public $b;
    public $h;

public function __construct($_b,$_h){
    $this->b= $_b;
    $this->h= $_h;
}

public function area(){
    return $this->mul($this->b, $this->h);
}
public function perimetro(){
    return $this->sum(2*$this->b, 2*$this->h);
}

public function diagonale(){
    return $this->sqr($this->h**2 + $this->b**2);
   
}


}



$area= new Rettangolo(5,10);
print_r($area);

 echo "L'area è " . $area->area() . "\n";
 echo "il perimetro è " . $area->perimetro() ."\n";
 echo "il risultato della diagonale è " . $area->diagonale() . "\n";



?>