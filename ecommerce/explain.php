<?php
//printing a php
echo "hello world <br> ";


// declaring a variable 
$name="sameer <br>";
echo $name; 

// concatenation
echo "hi ".$name."<br>" ;

// indexed arrays 
$games=array("ASO","FF","NFS");
// accessing single element 
echo $games[0]."</br>";
var_dump($games);
print_r($games);

// associative array 
$details=array("</br> name"=>"sameer","age"=>19,"height"=>179);
echo "</br>".$details["age"];
foreach ($details as $detail) {
    echo "</br>".$detail;
}

$age=20;

if($age<=18) 
{
    echo "not allowed to drink";
}else if($age>=18) 
{
    echo "can have a drink";
}




















?>