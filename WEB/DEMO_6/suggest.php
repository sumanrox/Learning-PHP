<?php

$people[]="Hal";
$people[]="Mad";
$people[]="Cat";
$people[]="Dog";
$people[]="Titli";
$people[]="Suman";
$people[]="Anima";
$people[]="Milton Roy";
$people[]="Joydeep";
$people[]="Amanda";
$people[]="Rachel";
$people[]="Jose";
$people[]="Malcom";
$people[]="Rosie";
$people[]="Greg";
$people[]="Mary";
$people[]="Billy";
$people[]="Steve";
$people[]="Elon";
$people[]="Jack";
$people[]="Royce";

// Get Query String

$q=$_REQUEST['q'];

$suggestion="";

//Get Suggestions
if($q!==""){
    $q=strtolower($q);
    $len=strlen($q);
    foreach($people as $person){
        if(stristr($q, substr($person, 0 , $len))){
            if($suggestion===""){
                $suggestion=$person;
            }
            else{
                $suggestion .=", $person";
            }
        }
    }
}

echo $suggestion===""? "No Suggestion" : $suggestion;

?>