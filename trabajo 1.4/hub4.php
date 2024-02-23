<html>
    <body>
     <h1 align="center">5630. Colegiatura</h1>
     
     <h2>DESCRIPCION</h2>
     <p>
     La mamá de Esteban quiere inscribirlo en la mejor preparatoria de Cuernavaca,
     pero le preocupa cuanto vaya a pagar, y te pide ayuda para que hagas un programa
     que le diga cuanto tenga que pagar. El esquema que maneja la prepa es este:<br><br>
     PLAN DE PAGOS:<br><br>

     -La colegiatura de los alumnos se determina según el numero de materias que cursan. 
     El costo de cada una de las materias es de $1600.<br><br>

     -Se ha establecido un programa para estimular a los alumnos, el cual consiste en lo 
     siguiente: si el promedio obtenido por un alumno en el ultimo periodo es mayor o igual que 9, 
     se le hará un descuento del 30% sobre la colegiatura y no se le cobrara IVA; si el promedio obtenido 
     es menor que 9 deberá pagar la colegiatura completa, mas el IVA del 16%.
    
    </p>

    
    <h2>ENTRADA</h2>
    <p>El numero de materias A que Esteban va a cursar. Y un numero con 
        desimales B que es el promedio de Esteban.
    </p>
    <h2>SALIDA</h2>
    <p>El número entero C con el precio a pagar. Deve de ir con un $.</p>
    <h2>EJEMPLO</h2>


    
    
    


    <table border="1">
        <tr>
            <td><h4>ENTRADA</h4></td>
         


            <td><h4>SALIDA</h4></td>
        </tr>
        <tr >
            <td align="center">5<br> 9.6 </td>
            <td align="center"><?php

            $a=5;
            $b=9.6;
            
            $r=$a*1600;

            if($b>=9)
            {
                $r1=$r*0.30;
                $c=$r-$r1;
                echo "$",$c;

            }
            else if($b<9)
            {
                $r1=$r*0.16;
                echo "$",$r+$r1;
            }
        
            
            ?></td>
        </tr>
        <tr >
            <td align="center">8<br> 7.8</td>
            <td align="center"><?php 
            
            $a=8;
            $b=7.8;
            
            $r=$a*1600;

            if($b>=9)
            {
                $r1=$r*0.30;
                $c=$r-$r1;
                echo "$",$c;

            }
            else if($b<9)
            {
                $r1=$r*0.16;
                echo "$",$r+$r1;
            }
            
            
            ?></td>
        </tr>
        <tr >
            <td align="center">2<br> 8</td>
            <td align="center"><?php
                 $a=2;
                 $b=8;
                 
                 $r=$a*1600;
     
                 if($b>=9)
                 {
                     $r1=$r*0.30;
                     $c=$r-$r1;
                     echo "$",$c;
     
                 }
                 else if($b<9)
                 {
                     $r1=$r*0.16;
                     echo "$",$r+$r1;
                 }
          
              


                ?> </td>
        </tr>
        
        
    </table>


    </body>
</html>