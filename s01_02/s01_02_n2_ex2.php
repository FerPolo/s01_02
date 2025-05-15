

<?php

/**opcion con array */

$preus = array("xocolata" => 1.0, "xiclet"   => 0.5, "caramel"  => 1.5);

function subtotal($preus, $producte, $quantitat) {
    if (array_key_exists($producte, $preus)) {
        return $preus[$producte] * $quantitat;      
    } else {
        return 0;  
    }
}

$total =subtotal($preus,"xocolata",4 ) +subtotal($preus,"xiclet",5)+subtotal($preus,"caramel",6);

echo $total;



/**Opcion sin array */

$xocolata = 1;
$xiclet = 0.5;
$caramel = 1.5;



function subtxoco ($xocolata, $quantitat1)

{return $xocolata * $quantitat1;} 

function subtxiclet ($xiclet, $quantitat2)

{ return $xiclet * $quantitat2;} 


function subtcaramel ($caramel, $quantitat3)

{ return $caramel * $quantitat3;} 

$total = subtxoco($xocolata, 4) + subtxiclet($xiclet, 5) + subtcaramel($caramel, 5);

echo "El total de la seva compra es de $total euros";

?>


