<?php
$myBook=array(array("title"=>"The Grapes of Wrath","author"=>"John
Steinbeck","year"=>1979),array("title"=>"The Trial","author"=>"Franz
Kafka","year"=>1925),array("title"=>"The Hobbit","author"=>"J. R. R.
Tolkien","year"=>1937));

$count = 0 ;
foreach($myBook as $book){
    $count++;
    echo "Book #". $count . " <br/><br/>";
    foreach($book as $value){
    echo $value. "<br/>";
    }
}
