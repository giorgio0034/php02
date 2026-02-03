<?php




//$password= readLine("inserisci la password:");


$lenght=false;
$number=false;
$upper=false;

function checkLenght($psw){
    if(strlen($psw)>=8){
     return true;
}
echo "deve essere lunga di 8 caratteri e più \n";
    return false;
}


//$first=checkLenght($password);



//Lunghezza



//Numeri

function checkNumber($psw){
    for($i=0;$i<strlen($psw);$i++){
    if(is_numeric($psw[$i])){
        return true;
    }
    
        
    }
    echo "Metti almeno un numero \n";
    return false;
}

//$second=checkNumber($password);



//$number=checkNumber($password);




//Maiuscolo

function checkUpper($psw){

for($i=0;$i<strlen($psw);$i++){
    if(ctype_upper($psw[$i])){
            return true;
    }
           
        
    }
     echo" Metti almeno una lettera maiuscola \n";     
    return false;
    }

 //$third= checkUpper($password);
 

//$special=false;

function checkSpecial($psw){
    $specialChars=['!','@','&'];
for($i=0;$i<strlen($psw);$i++){
    if(in_array($psw[$i], $specialChars)){
            return true;
        }
    }
    echo" Metti almeno un carattere speciale \n";
    return false;
}

//$fourt=checkSpecial($password);
//var_dump($fourt);

//$upper=checkUpper($password);


//function result($string){

//if(checkLenght($string) && checkNumber($string) && checkUpper($string) && checkSpecial($string)){
//echo "la password è valida \n";
//    return true;
//}
//    echo "la password non è valida";
//    return false;
//}



//result($password);

function checkPassword($string){
    $first= checkLenght($string);
    $second= checkNumber($string);
    $third= checkUpper($string);
    $fourt= checkSpecial($string);


    if($first && $second && $third && $fourt){
        echo "password corretta \n";
        
    }

    return $first && $second && $third && $fourt;
}

do{
    $password= readLine("la password è: ");
}while(!checkPassword($password));




?>