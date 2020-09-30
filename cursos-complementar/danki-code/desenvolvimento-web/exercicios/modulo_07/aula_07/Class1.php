<?php

//namespace divide as classes em sessões "dividir por pastas"

namespace Sessao1;
//é possivel utilizar outras sessões dentro de um sessão
use Sessao2\Class2;
class Class1 {

    function __construct(){
        echo'Classe instanciada';
//possivel instanciar outra classe junto a primeira instanciada, desde que seja feito o include dela
    /*   
    new \Class2();
// o uso da \ para indicar o diretorio da class
*/
    new \Sessao2\Class2();

}
}

?>