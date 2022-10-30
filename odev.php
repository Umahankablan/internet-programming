<?php
$cities = 
[
    "Balıkesir",
    "Kütahya",
    "Bursa",
    "Denizli",
    "Diyarbakır"
];
  echo "<h4> while döngüsü ile</h4>";
  $i= 0;
  while ($i<count ($cities))
{
    echo $cities[$i++];
    echo "<br/>";
}
echo "<h4> do while döngüsü ile</h4>";
  $i =0;
do
{
    echo $cities[$i++];
    echo "<br/>";

}while($i<count($cities))
?>