<?php

function f1($i1, $i2, $i3 ){

$word_length = strlen($i1);
$count  = 0;
$org = $i1;
$new_word = ''; 
while($new_word !==  $org) {
  if(  $count%2 == 0){
    $word_part =  substr($i1, -$i2);
  	$new_word = $word_part.substr($i1, 0, -$i2);
  }else{
    $word_part =  substr($i1, -$i3);
  	$new_word = $word_part.substr($i1, 0, -$i3);
  }
  $i1 = $new_word;
  $count++;
  
}
  
return $count;

}

echo f1('abgdressdc', 1, 2)

?>