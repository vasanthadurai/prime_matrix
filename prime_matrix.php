<?php

function multiply_n_prime($n) {
  $prime_array = array();
  for( $i = 2; $i <= $n; $i++ )
  {
    for( $j = 2; $j < $i; $j++ )
    {
      if( $i % $j === 0 )
        break;

    }
    if( $j === $i )
      $prime_array[] = $i ;
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

multiply_n_prime('30');

?>