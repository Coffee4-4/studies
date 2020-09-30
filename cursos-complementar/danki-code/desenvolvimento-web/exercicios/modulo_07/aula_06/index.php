<?php
include ('class1.php');
$teste = new class1('André', 26);

echo $teste->getNome();
echo $teste->getIdade();

?>