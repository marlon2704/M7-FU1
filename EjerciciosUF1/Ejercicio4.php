<?php
$m = array( "Alibaba" => "y los quarenta ladrones",
            "Harry Potter" => "y el cáliz de fuego");

$m["Aníbal"] = "El caníbal";

print_r($m);
print( "<br>");

print( $m["Alibaba"]);
print( "<br>");

unset( $m["Harry Potter"]);

print_r($m);
print( "<br>");

?>


