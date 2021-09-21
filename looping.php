<?php
$a=1;
do{
  echo "<ul>";
  echo "<li>".$a."</li>";
  $a++;
echo "</ul>";
}while($a<=10);


$arr=[10,70,"suprava",77.8,true];
for($i=0;$i<count($arr);$i++){
  echo $arr[$i]."<br>";
}

//for each loop
foreach($arr as $v){
  echo $v ."<br>";
}

?>