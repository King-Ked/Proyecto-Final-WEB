<!DOCTYPE html>
<html lang="es">
<head>
    <title>Aula Virtual - Actividad 1</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 1</title>
</head>
<body style="background-color: #0097A7;">
    <div style="margin-left: 400px;">
        <h1>Actividad 1: Contesta el siguiente cuestionario.</h1><a href="../../alumnos/actividades.php">Volver</a>
    <form method="POST" action="">
        <h4>1. ¿Qué números faltan en el tablero?</h4><br>
        <img src="1.jpg" width="400px"/>
        <ol type="a">
            <li><input type="radio" name="pregunta1" id="p11" value="a"/>9, 12, 14, 26, 29, 32, 35, 46, 49</li><!--*-->
            <li><input type="radio" name="pregunta1" id="p12" value="b"/>9, 12, 16, 24, 27, 30, 31, 42, 44</li>
            <li><input type="radio" name="pregunta1" id="p13" value="c"/>9, 12, 13, 27, 28, 30, 34, 49, 50</li>
        </ol><br>
        
        <h4>2. Anota los números que faltan.</h4><br>
        <img src="2.jpg" width="400px"/>
        <ol type="a">
            <li><input type="radio" name="pregunta2" id="p21" value="a"/>31, 41, 20, 28 y 35</li>
            <li><input type="radio" name="pregunta2" id="p22" value="b"/>32, 41, 19, 28 y 34</li><!--*-->
            <li><input type="radio" name="pregunta2" id="p23" value="c"/>30, 42, 20, 29 y 35</li>
        </ol><br>

        <h4>3. ¿Qué numeros pudieron haber salido en los dados para llegar al número que dicen los niños?</h4><br>
        <img src="3.jpg" width="400px"/>
        <ol type="a">
            <li><input type="radio" name="pregunta3" id="p31" value="a"/>3 y 7, 4 y 4, 2 y 5, 3 y 2</li><!--*-->
            <li><input type="radio" name="pregunta3" id="p32" value="b"/>5 y 5, 5 y 3, 4 y 3, 3 y 1</li>
            <li><input type="radio" name="pregunta3" id="p33" value="c"/>6 y 3, 5 y 4, 3 y 4, 2 y 2</li>
        </ol><br>
        
        <h4>4. ¿Cuántas fichas juntan en total los niños?</h4><br>
        <img src="4.jpg" width="400px"/>
        <ol type="a">
            <li><input type="radio" name="pregunta4" id="p41" value="a"/>30, 45, 37 y 40</li>
            <li><input type="radio" name="pregunta4" id="p42" value="b"/>30, 45, 39 y 40</li>
            <li><input type="radio" name="pregunta4" id="p43" value="c"/>30, 45, 38 y 39</li><!--*-->
        </ol><br>

        <h4>5. ¿Cuántas fichas pusieron los niños para juntar el total que se indica?</h4><br>
        <img src="5.jpg" width="400px"/>
        <ol type="a">
            <li><input type="radio" name="pregunta5" id="p51" value="a"/>11, 21, 23 y 15</li>
            <li><input type="radio" name="pregunta5" id="p52" value="b"/>11, 21, 22 y 16</li><!--*-->
            <li><input type="radio" name="pregunta5" id="p53" value="c"/>10, 20, 20 y 30</li>
        </ol><br>

        <h4>6. Calcula los resultados.</h4><br>
        <img src="6.jpg" width="400px"/>
        <ol type="a">
            <li><input type="radio" name="pregunta6" id="p61" value="a"/>9, 9, 11, 11, 10, 10</li>
            <li><input type="radio" name="pregunta6" id="p62" value="b"/>10, 10, 11, 11, 9, 9</li>
            <li><input type="radio" name="pregunta6" id="p63" value="c"/>10, 10, 10, 10, 10, 10</li><!--*-->
        </ol><br>

        <h4>7. Calcula los resultados.</h4><br>
        <img src="7.jpg" width="400px"/>
        <ol type="a">
            <li><input type="radio" name="pregunta7" id="p71" value="a"/>20, 20, 30, 20, 20, 20</li><!--*-->
            <li><input type="radio" name="pregunta7" id="p72" value="b"/>20, 30, 40, 50, 30, 20</li>
            <li><input type="radio" name="pregunta7" id="p73" value="c"/>10, 10, 10, 10, 10, 10</li>
        </ol><br>

        <h4>8. Calcula cuánto le falta a la niña.</h4><br>
        <img src="8.jpg" width="400px"/>
        <ol type="a">
            <li><input type="radio" name="pregunta8" id="p81" value="a"/>10, 20, 30, 20, 20</li>
            <li><input type="radio" name="pregunta8" id="p82" value="b"/>10, 20, 10, 20, 30</li><!--*-->
            <li><input type="radio" name="pregunta8" id="p83" value="c"/>10, 20, 20, 10, 10</li>
        </ol><br>
        <input type="submit" name="enviar_respuestas" value="Enviar Respuestas"/>
        <br>
    </form>
    <?php
    if(isset($_POST['enviar_respuestas'])){
        $pregunta1=$_POST['pregunta1'];
        $pregunta2=$_POST['pregunta2'];
        $pregunta3=$_POST['pregunta3'];
        $pregunta4=$_POST['pregunta4'];
        $pregunta5=$_POST['pregunta5'];
        $pregunta6=$_POST['pregunta6'];
        $pregunta7=$_POST['pregunta7'];
        $pregunta8=$_POST['pregunta8'];
        $resultado=0;

        if($pregunta1=="" || $pregunta2=="" || $pregunta3=="" || $pregunta4=="" || $pregunta5=="" ||
        $pregunta6=="" || $pregunta7=="" || $pregunta8==""){
            echo "<script>
                alert('Debes contestar todas las preguntas.');
                window.location= 'actividad1.php'
            </script>";
        }else{
            if($pregunta1=="a")$resultado+=1;
            if($pregunta2=="b")$resultado+=1;
            if($pregunta3=="a")$resultado+=1;
            if($pregunta4=="c")$resultado+=1;
            if($pregunta5=="b")$resultado+=1;
            if($pregunta6=="c")$resultado+=1;
            if($pregunta7=="a")$resultado+=1;
            if($pregunta8=="b")$resultado+=1;

            //echo "<h1>Resultado: tuviste $resultado respuestas correctas.</h1>";
            echo "<script>
                    alert('Resultado: tuviste $resultado respuestas correctas');
                    window.location= 'actividad1.php'
                </script>";
        }
    }else{
        $pregunta1 = isset($_POST['pregunta1']) ? $_POST['pregunta1'] : "";
        $pregunta2 = isset($_POST['pregunta1']) ? $_POST['pregunta2'] : "";
        $pregunta3 = isset($_POST['pregunta1']) ? $_POST['pregunta3'] : "";
        $pregunta4 = isset($_POST['pregunta1']) ? $_POST['pregunta4'] : "";
        $pregunta5 = isset($_POST['pregunta1']) ? $_POST['pregunta5'] : "";
        $pregunta6 = isset($_POST['pregunta1']) ? $_POST['pregunta6'] : "";
        $pregunta7 = isset($_POST['pregunta1']) ? $_POST['pregunta7'] : "";
        $pregunta8 = isset($_POST['pregunta1']) ? $_POST['pregunta8'] : "";
    }
    
?>
    </div>
    
</body>
</html>