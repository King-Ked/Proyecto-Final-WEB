<?php
    $pregunta1=$_POST['pregunta1'];
    $pregunta2=$_POST['pregunta2'];
    $pregunta3=$_POST['pregunta3'];
    $pregunta4=$_POST['pregunta4'];
    $pregunta5=$_POST['pregunta5'];
    $pregunta6=$_POST['pregunta6'];
    $pregunta7=$_POST['pregunta7'];
    $pregunta8=$_POST['pregunta8'];
    $resultado=0;

    if($pregunta1=="a")$resultado+=1;
    if($pregunta2=="b")$resultado+=1;
    if($pregunta3=="a")$resultado+=1;
    if($pregunta4=="c")$resultado+=1;
    if($pregunta5=="b")$resultado+=1;
    if($pregunta6=="c")$resultado+=1;
    if($pregunta7=="a")$resultado+=1;
    if($pregunta8=="b")$resultado+=1;

    echo "<h1>Resultado: tuviste $resultado respuestas correctas.</h1>";
?>