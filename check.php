<?php
include 'action.php';

$data1 = $functionObj->get_one_article(1);
$data2 = $functionObj->get_one_article(3);

echo $data1['art_date']." ".$data2['art_date'];

echo "<br>";

$date1 =$data1['art_date'];
$date2 = date('Y-m-d');

echo $date2."<br>";


$time1 = new DateTime($date1);
$time2 = new DateTime($date2);


$interval = $time1->diff($time2);
echo $interval->d;

echo "<br>";

$day = $interval->d;

echo $day;


echo "<br>";

if($day < 7){
    echo "NEW";
}else{
    echo "OLD";
}

?>