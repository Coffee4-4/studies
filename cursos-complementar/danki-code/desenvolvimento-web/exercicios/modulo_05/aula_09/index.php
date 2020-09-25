<?php
$variavel1 = 'André';
$variavel2 = 'Luiz';

if($variavel1 == $variavel2){
    //utilizando estilos css dentro do html na linguagem PHP
    echo '
    div style="width:300px;height:300px;background:red;0">
    
        <h1>Estou dentro do IF</h1>
    
    </div>';
}else{
    echo 'A condição não bate';
}

if($variavel1 == 'André'){
    //utilizando estilos css dentro do html na linguagem PHP
    echo 
    '<div style="width:300px;height:300px;background:red;">
    
        <h1>Estou dentro do IF</h1>
    
    </div>';
}else{
    echo 'A condição não bate';
}

//Executar um trecho em HTML se uma condição for satisfeita

if('André'==$variavel1){

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09</title>
</head>
<body>
    <div style="font-size: xx-large; background:green;width:200px;margin:5px">
    Sou um trecho em HTML puro.
    </div>
</body>
</html>

<?php
}
?>


<?php
$var1 = 10 + 5;
$var2 = '10 + 5';
if($var1 == $var2){
    echo 'Verdade';
}else if($var1 != $var2){
    echo'verdade condição else if';

}else{
    echo 'Falso';
}

?>