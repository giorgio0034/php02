<?php

$users = [
  ['name' => 'Davide', 
  'surname' => 'Cariola', 
  'gender' => 'NB'],
  




  ['name' => 'Maria',
  'surname'=>'Rossi',
  'gender'=>'F'],


  ['name' => 'Mario',
  'surname'=>'Bianchi',
  'gender'=>'M'],

];

foreach ($users as $user) {
  if($user['gender']=='M'){
  echo "Buongiorno sign ". $user['name']. " ". $user['surname'] ."\n";
}elseif($user['gender']=='F'){
  echo "Buongiorno signora ". $user['name']. " ". $user['surname'] . "\n";
}else{
  echo "Buongiorno ". $user['name']. " ". $user['surname'] ."\n";

}

}














?>