<?php
//PDO=PHP DATA OBJECTS
//DFSN= DATA SOURCE NAME
$dsn='mysql:host=localhost;dbname=adsi';
$user='root';
$psw='';
try{
$conexion=new PDO($dsn,$user,$psw);
$statement=$conexion->prepare('SELECT *FROM aprendiz');
$statement->execute();
}
catch(PDOexception $e){
    echo $e->getmesagge();
}
foreach ($statement as $key){
    echo 'nombre:'.$key[0].' <br> ';
    echo 'documento:'.$key[1].' <br>';
    echo 'formacion:'.$key[2].' <br>';
    echo 'genero:'.$key[3].'<br>';

}
echo '<br>-------------fetch-------------------<br>';
$statement->execute();
while($key=$statement->fetch()){
    echo $key['nombre'],'<br>';

}
echo '<br>--------------fetchall------------------<br>';
$statement->execute();
$resultados = $statement->fetchAll();
//echo $resultados;
//var_dump($resultados);
foreach ($resultados as $key){
    echo $key['documento'].'<br>';
}
echo '<br>------------asociativo--------------------<br>';
$statement->execute();
while($key=$statement->fetch(PDO::FETCH_ASSOC)){
    echo $key['formacion'],'<br>';

}
echo '<br>--------------numerico------------------<br>';
$statement->execute();
while($key=$statement->fetch(PDO::FETCH_NUM)){
    echo $key['3'],'<br>';

}
echo '<br>--------------objeto------------------<br>';
$statement->execute();
while($key=$statement->fetch(PDO::FETCH_OBJ)){
    echo $key->nombre,'<br>';

}

echo '<br>---------------order by nombre objeto-----------------<br>';
$statement=$conexion->prepare("SELECT *FROM aprendiz ORDER BY 'nombre'");
$statement->execute();
while($key=$statement->fetch(PDO::FETCH_OBJ)){
    echo $key->nombre,'<br>';
    echo $key->documento,'<br>';
    echo $key->formacion,'<br>';
    echo $key->sexo,'<br>';

}
echo '<br>---------------insertar datos-----------------<br>';
$statement=$conexion->prepare("INSERTgit INTO *FROM aprendiz VALUES ('JANET RAMIREZ','23562387','CONTABILIDAD','FEMENINO')");
$statement->execute();


//var_dump($statement);
//print_r($statement);
?>
