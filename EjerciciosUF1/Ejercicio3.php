<?php
// creo un array amb 3 elements
$a = array( 5,7,11);
$tipus_de_a = gettype( $a );
echo $tipus_de_a;
echo "\n";
print_r( $a );
echo "<br>";
//afegeixo més elements a l'array
$a[] = 13;  
$a[] = 17;
print_r( $a );
echo "<br>";
//afegir element d'un array d'una altra forma
array_push ($a, 23);
print_r( $a );
echo "<br>";
//pinto elements de l'array
echo "El valor de del terce element de l'array és " . $a[2];
echo "<br>";
//eliminar elementos de un array
unset($a[0]); 
unset($a[1]); // el valor 7 seguia a la possició 1
//como acceder a un array
$a[1] = 12;
print_r( $a );
echo "<br>";
?>
