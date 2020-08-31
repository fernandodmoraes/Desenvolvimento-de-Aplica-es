<?php
echo "Iniciando a pesquisa PAR ou IMPAR:" . PHP_EOL;

$primeiroNumero = readline('Primeiro Numero ');
$segundoNumero = readline('Segundo Numero ');

$resultado = $primeiroNumero + $segundoNumero;

echo "A soma dos numeros é  $resultado" . PHP_EOL;
    
if ($resultado % 2 == 0){
   echo 'O resultado da pesquisa é PAR.';
}
else {
   echo"O resultado da pesquisa é IMPAR.";

}

