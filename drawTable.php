<?php
// Exercise 10
$array_of_arrays = array(range(1,5), range(2,10,2), range(3,15,3), range(4,20,4), range(5,25,5));

function drawTable($arrayOfArrays) {
  for ($i=0; $i<count($arrayOfArrays[0]); $i++) {
    echo $i;
    echo "<tr>";
    for ($j=0; $j<count($arrayOfArrays); $j++) {
      echo "<td>".$arrayOfArrays[$j][$i]."</td>";
    }
    echo "</tr>";
  }
  echo "</table>";
}
drawTable($array_of_arrays); //does print numbers in right sequence. Does not draw a table
?>
