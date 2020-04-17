<?php
    $valor1=$_POST['n1'];
    $valor2=$_POST['n2'];
    $suma=$_POST['suma'];
    $resta=$_POST['resta'];
    $multi=$_POST['multi'];
    $div=$_POST['div'];
    $op=$_POST['operacion'];
    
    if($op==$suma)
    {
        $Total=$valor1 + $valor2 ;
        echo "la suma es: ".$Total;
    }
    else if ($op==$resta)
    {
        $Total = $valor1 - $valor2 ;
        echo "la resta es: ".$Total ;
    }
    else if ($op==$multi)
    { 
         $Total = $valor1 * $valor2 ;
         echo "la multiplicacion es: ".$Total 
    }
    else 
    {
        $Total = $valor1 / $valor2 ;
        echo "la divicion es: ".$Total 
    }
?>
