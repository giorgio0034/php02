<?php

require 'php1.php';
require 'php2.php';
require 'php3.php';
require 'php4.php';
require 'php5.php';
require 'php6.php';


class IronMan{
    public $attack1;
    public $attack2;
    public $move;
    public static $count=0;


    public function __construct(BraccioDestro $_attack1,BraccioSinistro $_attack2,Gambe $_move){
        $this->attack1=$_attack1;
        $this->attack2=$_attack2;
        $this->move=$_move;


        self::$count++; 
    }
    public function attack1(){
        $this->attack1->attack1();
    }
    public function attack2(){
        $this->attack2->attack2();
    }
    public function move(){
        $this->move->move();
    }


}





$mk1=new Ironman(new Razzo, new RaggioMortale,new Volo);
$mk2=new Ironman(new Razzo, new RaggioMortale,new Volo);
$mk1->attack1();
$mk1->attack2();
$mk1->move();
$mk2->attack1();
$mk2->attack2();
$mk2->move();



echo Ironman::$count;


?>
