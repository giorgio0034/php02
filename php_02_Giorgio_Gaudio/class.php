<?php


abstract class Category{


     abstract public function getMyCategory();
    

}


class Attualità extends Category{
    

    public function getMyCategory(){
        echo "Attualità \n";

    } 
}

class Sport extends Category{
       
    public function getMyCategory(){
            echo "Sport \n";
    } 
}

class Gossip extends Category{
       
    public function getMyCategory(){
        echo " Gossip \n";
    } 
}

class Storia extends Category{
       
    public function getMyCategory(){
        echo "Storia \n";
        
    } 
}

$cat1 = new Attualità();
$cat2 = new Sport();
$cat3 = new Gossip();
$cat4 = new Storia();

$cat1->getMyCategory();

$cat2->getMyCategory();

$cat3->getMyCategory();
$cat4->getMyCategory();