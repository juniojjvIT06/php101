<?php

 $colors = array('RED', 'BLUE' , 'GREEN' , 'PINK' , 'BROWN');
 $names = array("lastname" => "Junio", "firstname" => "Jezreel John", "middlename" => "Victorino");
//  for($counter = 0; $counter < sizeof($colors); $counter++)
//  {
//     echo $colors[$counter] . ", ";
//  }

// foreach($colors as $x){
//     echo $x . ",";
// }

foreach($names as $x => $y){
   echo $x .' > '.  $y . ' ';
}



?>