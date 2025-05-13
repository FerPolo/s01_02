
<?php


function grau($nota)

{
if ($nota >=60){
  echo "primera divisió";
}

elseif ($nota >= 45 && $nota <= 59)
{
echo  "segona divisio";
}

elseif ($nota >=33 && $nota <=44)
{
echo  "tercera divisio";
}

else {echo "reprovat"; }

}

$nota = 55;

echo grau($nota)

?>

