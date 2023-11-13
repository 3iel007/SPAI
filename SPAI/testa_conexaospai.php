<?php

include("conexaospai.php");
if ($conexao){
	echo "Conexão criada";
}else{
	echo "Erro de conexão";
}
?>