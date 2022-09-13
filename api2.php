<?php


if (isset($_POST["a"])) {
    $val_a = $_POST["a"];
}
else {
    $val_a=1;
}
if (isset($_POST["b"])) {
    $val_b = $_POST["b"];
}
else {
    $val_b=1;
}if (isset($_POST["ac"])) {
    $val_c = $_POST["c"];
}
else {
    $val_c=1;
}


$result = pow($val_a,3) + ($val_b * $val_c) - ($val_a / $val_b);


$results = [
    "result" => $result
];

echo json_encode($results);

?>