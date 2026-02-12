<?php


class Vertebrates{

 

}

class WarmBlooded extends Vertebrates{

}

class ColdBlooded extends Vertebrates{

}

class Mammals extends WarmBlooded{
    

}

class Birds extends WarmBlooded{
    

 
}

class Fish extends ColdBlooded{
    
       public function __construct(){
  
    }

    public function getFrase(){
        return "Sono un animale Vertebrato\nSono un animale a Sangue Freddo \n Splash! \n";
    }


}

class Reptiles extends ColdBlooded{
    

}

class Amphibians extends ColdBlooded{
    

}


$magikarp = new Fish();
echo $magikarp->getFrase();



?>