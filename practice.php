<?php
// $month = 1;
// if ($month>2 && $month <=5) {
//   echo("春天\r\n");
// } elseif ($month>5 && $month <=8) {
//   echo("夏天\r\n");
// } elseif ($month>8 && $month <=11) {
//   echo("秋天\r\n");
// } else {
//   echo("冬天\r\n");
// }

$result = 0;
for($count = 1; $count <=150; $count ++){
  if($count %2 >0){
    $result = $result + $count;
  }
}
echo($result);