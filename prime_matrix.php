<?php

function multiply_n_prime($n) {
  $prime_array = array();
  $count = 0;  
  $num = 2;
  while ($count < $n )  
  {  
    $div_count=0;  
    for ( $i=1; $i<=$num; $i++)  
    {  
      if (($num%$i)==0) 
        $div_count++;
    }
    if ($div_count === 2)  
    {  
      $prime_array[] = $num;  
      $count=$count+1;  
    }  
    $num=$num+1;  
  }
  $prime_count = count($prime_array);
  echo "<pre>  ".implode("  ",$prime_array)."<br>";
  for( $i = 0; $i < $prime_count; $i++ )
  {
    echo $prime_array[$i]." ";
    for( $j = 0; $j < $prime_count; $j++ )
    {      
      echo $mul = $prime_array[$j] * $prime_array[$i] ."  ";
    }
      echo "<br>";
  }
}
multiply_n_prime(10);

?>
