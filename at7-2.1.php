<?php
$nota=0;
if($nota<20)
{
    echo 'Aluno <span style="color:#ff00000">REPROVADO</span>com'
.$nota. 'valores. ';
echo '<br>Deverá trabalhar mais para alcançar resultados postivos';
switch ( true ){
case($nota>=10 && $nota<=20):
    echo 'Aluno <span style="color:#00ff00">APROVADO</span> com' .$nota. 'valores.';
    echo '<br>Muito bom trabalho';
        break;
case($nota>20 || $nota<0):
        echo '"Valor da nota não é válida"';
        break;
    }
}
?>