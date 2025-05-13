
<?php

function isBitten() {
  
    $resultado = rand(0, 1);

    if ($resultado == 1) {
        echo "El perro te ha mordido";
    } else {
        echo "El perro no te ha mordido";
    }
}

echo isbitten();