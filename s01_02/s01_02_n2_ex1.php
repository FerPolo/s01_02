

<?php

    function preu_trucada ($durada){ 
    
        if ($durada <3 )

            { $preu = 10;}
      
        else  

         { $preu =  ($durada -3) * 5 + 10;}

        echo  "El preu de la seva trucada es $preu céntims" ;

    }
      preu_trucada(7)
    ?>





