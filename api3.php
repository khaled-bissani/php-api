<?php

// Given password
$password = $_POST["password"];

$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);

if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) <= 12) {
    // Check uppercase
    if (!$uppercase) {
        $upperPass = 'Should include at least one upper case letter';
    }
    else {
        $upperPass = 'Uppercase available';
    }
    // Check lowercase
    if (!$lowercase) {
        $lowerPass = 'Should include at least one lower case letter';
    }
    else {
        $lowerPass = 'Lowercase available';
    }
    // Check number
    if (!$number) {
        $numberPass = 'Should include at least one number';
    }
    else {
        $numberPass = 'Number available';
    }
    // Check special character
    if (!$specialChars) {
        $specialPass = 'Should include at least one special character';
    }
    else {
        $specialPass = 'Special character available';
    }
    $strongPass= 'Weak password.';
}
else {
    $strongPass= 'Strong password.';
}

$results = [
    "Upper-case" => $upperPass,
    "Lower-case" => $lowerPass,
    "Number" => $numberPass,
    "Special character" => $specialPass,
    "Password" => $strongPass
];

echo json_encode($results);

?>