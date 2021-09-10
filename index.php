<?php
function sumaDivisores($num){
    if (is_numeric($num)){
        for ($i=0; $i<=$num ; $i++){
            if ($num%$i == 0){
                $num+=$i;
            }
        }
        return $num;
    }else {
        throw new Exception("El dato ingresado debe ser un numero");
        //return 0;
        
    }
}
//echo sumaDivisores('?')

try{
echo sumaDivisores('10');
}
catch (Exception $e){
    echo $e->getMessage();
}
catch (DivisionByZeroError $ob){
    echo $ob->getMessage();
}
echo 'ultima linea del codigo';

?>