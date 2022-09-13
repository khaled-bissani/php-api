<?php

function Palindrome($string){ 
    if (strrev($string) == $string){ 
        return 1; 
    }
    else{
        return 0;
    }
} 

$value = $_GET["value"];
if(Palindrome($value)==1){ 
    $palindrome = "True"; 
}
else { 
    $palindrome = "Flase"; 
}

$results = [
    "string" => $value,
    "Palindrome" => $palindrome
];

echo json_encode($results);

?> 