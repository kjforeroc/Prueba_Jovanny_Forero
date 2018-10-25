<?php
require_once("conexion.php");

$ consulta = mysql_query("select * from contador WHERE id='1' ") or die (mysql_error());
do{
	$desc = $ registro['visitas'];
	echo "$desc"+1;
}
while ($ registro = mysql_fetch_array($ consulta));
?>