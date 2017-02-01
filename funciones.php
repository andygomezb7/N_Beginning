<?php
/*
* FUNCIONES EXTRAS PARA EL FUNCIONAMIENTO DEL MUDADO DE BASE DE DATOS MySQL
*/

function result_array($result){
if(!is_resource($result)) return false;
while($row = mysql_fetch_assoc($result)) $array[] = $row;
return $array;
}

?>
