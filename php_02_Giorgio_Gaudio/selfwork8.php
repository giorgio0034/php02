<?php

class Company{
    public $name;
    public $location;
    public $tot_employees=0;
    public $spesaMensile;


    public function __construct($name, $location,$spesaMensile,$tot_employees=0) {
        $this->name = $name;
        $this->location = $location;
        $this->tot_employees = $tot_employees;
        $this->spesaMensile=$spesaMensile;
        

    }
public function frase(){
    if($this->tot_employees >0){
        echo"L’ufficio $this->name con sede in $this->location ha ben  $this->tot_employees dipendenti\n";
    }else{
        echo "L’ufficio $this->name con sede in $this->location  non ha dipendenti\n";
        }
}        

public function SpesaAnnuale(){
    
        $spesAnnuale=$this->spesaMensile*12;
        echo"L'azienda $this->name spende annualmente $spesAnnuale \n";
    
}

public function totaleSpeseIstanze($aziende) {
    $totale = 0;

    foreach ($aziende as $azienda) {
        $totale += $azienda->spesaMensile;
    }

    return $totale;
}

 public static function totaleSpese($aziende) {
        $totale = 0;
        foreach ($aziende as $azienda) {
            $totale += $azienda->spesaMensile;
        }
        return $totale;
    }
}

    






$azienda1= new Company('Aulab','Italia',1000,50);
$azienda2= new Company("Dreher","Germania",2000,200);
$azienda3= new Company("Coca-cola","Inghilterra",3000,300);
$azienda4= new Company("Kinder","Francia",4000,400);
$azienda5= new Company("MulinoBianco","Spagna",5000,0);

$aziende = [$azienda1, $azienda2, $azienda3, $azienda4, $azienda5];

//$azienda1->frase();
//$azienda2->frase();
//$azienda3->frase();
//$azienda4->frase();
//$azienda5->frase();


//$azienda1->SpesaAnnuale();
//$azienda2->SpesaAnnuale();
//$azienda3->SpesaAnnuale();
//$azienda4->SpesaAnnuale();
//$azienda5->SpesaAnnuale();

$azienda1->totaleSpeseIstanze($aziende);
echo "Totale spese : " . $azienda1->totaleSpeseIstanze($aziende) . "\n";
echo "Totale spese (metodo statico): " . Company::totaleSpese($aziende) . "\n";
























?>