<?php

echo "<table border='1px solid-black' cellspacing='0' align='center' >";

$cols = array('1','2','3','4','7','6'); //array for y-axis
$rows = array('2','3','1','0','5');	  //array for x-axis

$arrlength1 = count($rows);  //count array object
$arrlength2 = count($cols);

echo "<tr>";

//create table header for column
echo "<th scope='col' width='10%'></th>";  //first cell is empty
for($a=0;$a<$arrlength2;$a++){
echo "<th scope='col' width='10%'>".$cols[$a]."</th>";
}
echo "</tr>";

//create table header for row
for($x=0;$x<$arrlength1;$x++){
echo "<tr>";
echo "<th scope='row'>".$rows[$x]."</th>";

//calculate the multiplication value
for($y=0;$y<$arrlength2;$y++){
echo "<td align='center'>".$rows[$x]*$cols[$y]."</td>";
}
echo "</tr>";
}
echo "</table>";
?>
