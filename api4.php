<?php

// $today = new DateTime();

// echo $today;

$christmasDay =strtotime('December 25');


if (isset($_GET["time"])) {
    $todayTime = $_GET["time"];
    $todayTime = strtotime($todayTime);
}
else {
    $todayTime=time();
}

$seconds = $christmasDay - $todayTime;

$minutes = $seconds / 60;
$hours = $minutes / 60;
$days = ceil($hours / 24);


$results = [
    "Days until Christmas" => $days
];

echo json_encode($results);

?>