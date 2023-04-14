<?php


//glob
$sum = 0; 

// if($sum){
//     $x = 0;
// }


// if($sum){
//     $x;
// }

function hello_world(){

    $greet = "Hello World! <br>";
    echo $greet;

}

function notify_successfull_greeting(){

    echo "Successfully Login!";

}

function get_number_1000(){
    return 1000;
}

function check_if_true(){
    return TRUE;
}


function sum_up_2_int($x , $y){
    //local variable
    return $x + $y;
}

function peso_bill($pesos){

$thousands = 0;
$five_hundreds = 0;
$one_hundreds = 0;
$fifties = 0;
$twenties = 0;
$tens = 0;
$fives = 0;
$ones = 0;

while ($pesos > 0) {
    if ($pesos >= 1000) {
        $thousands++;
        $pesos -= 1000;
        //998
    } elseif ($pesos >= 500) {
        $five_hundreds++;
        $pesos -= 500;
    } elseif ($pesos >= 100) {
        $one_hundreds++;
        $pesos -= 100;
    } elseif ($pesos >= 50) {
        $fifties++;
        $pesos -= 50;
    } elseif ($pesos >= 20) {
        $twenties++;
        $pesos -= 20;
    } elseif ($pesos >= 10) {
        $tens++;
        $pesos -= 10;
    } elseif ($pesos >= 5) {
        $fives++;
        $pesos -= 5;
    } elseif ($pesos >= 1) {
        $ones++;
        $pesos -= 1;
    }
}

echo "1000 peso bills: " . $thousands . "<br>";
echo "500 peso bills: " . $five_hundreds . "<br>";
echo "100 peso bills: " . $one_hundreds . "<br>";
echo "50 peso coins: " . $fifties . "<br>";
echo "20 peso coins: " . $twenties . "<br>";
echo "10 peso coins: " . $tens . "<br>";
echo "5 peso coins: " . $fives . "<br>";
echo "1 peso coins: " . $ones . "<br>";

}


?>

