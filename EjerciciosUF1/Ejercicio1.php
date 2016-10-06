<?php
$i = 12;
$x = 13.124;
$y = true;
$z = 'hola';
$tipus_de_i = gettype( $i );
$tipus_de_x = gettype( $x );
$tipus_de_y = gettype( $y );
$tipus_de_z = gettype( $z );
$tipus = gettype( $tipus_de_z );
echo "La variable \$i 
      conté el valor $i 
      i és del tipus $tipus_de_i
      La variable \$x 
      conté el valor $x 
      i és del tipus $tipus_de_x
      La variable \$y 
      conté el valor $y 
      i és del tipus $tipus_de_y
      La variable \$z 
      conté el valor $z 
      i és del tipus $tipus_de_z;
      La variable \$tipus 
      i és del tipus $tipus";
?>
