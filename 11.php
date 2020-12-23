<?php
// $people=array("steve",456);

// print_r($people);

$people = ['john', 456, 'tim'];
foreach ($people as $key => $person) {
  echo('第'.$key.'個學生'.$person."\r\n");
}