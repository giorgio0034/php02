<?php
 
 abstract class Post{
    public $titolo;
    public $categoria;
    public $tag;


    public function __construct($_titolo, $_categoria,$_tag) {
        $this->titolo = $_titolo;
        $this->categoria = $_categoria;
        $this->tag = $_tag;
      
        

    }

public function mostraArticolo() {
        echo "Titolo:  " . $this->titolo  ;
        echo "\nCategoria: " . $this->categoria ;
        echo "\nTag:  " . $this->tag ;

    }


 }
class Categoria extends Post{

}

$articolo= new Categoria("titolo",'categoria','tag');
print_r($articolo);

$articolo->mostraArticolo();




?>