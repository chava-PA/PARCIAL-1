<html>
    <body>
     <h1 align="center">12618. Practicando con formulas</h1>
     
     <h2>DESCRIPCION</h2>
     <p>
     Dado un valor real A, quieres resolver una serie de ecuaciones 
     hasta obtener el valor de Z.<br><br>

     x = 3a + 15<br><br>

     Y = x + 3 / x + 1<br><br>

     z = 5x + 7y / axy<br><br>

            
    </p>

    
    <h2>ENTRADA</h2>
    <p>Un real A. Puedes suponer 1 < A < 100.
    </p>
    <h2>SALIDA</h2>
    <p>Un rel que sea el valor de Z impreso con tres puntos decimales</p>
    <h2>EJEMPLO</h2>


    
    
    


    <table border="1">
        <tr>
            <td><h4>ENTRADA</h4></td>
         


            <td><h4>SALIDA</h4></td>
        </tr>
        <tr >
            <td align="center">33.562 </td>
            <td align="center"><?php

            # CODIGO PHP PARA LA MULTIPLICACION
            $a=33.562;

            $x= (3*$a) + 15;
            $y= ($x + 3) / ($x + 1);
            
            $z= (5 * $x +  7 * $y)/($a*$x*$y);

            echo round($z,3);

            # OPERACIONS
            
        
            
            ?></td>
        </tr>
        <tr >
            <td align="center">72.569</td>
            <td align="center"><?php 

              # CODIGO PHP PARA LA MULTIPLICACION
              $a=72.569;

              $x= (3*$a) + 15;
              $y= ($x + 3) / ($x + 1);
              
              $z= (5 * $x +  7 * $y)/($a*$x*$y);
  
              echo round($z,3);
  
              # OPERACIONS
            
        
            
            
            ?></td>
        </tr>
        <tr >
            <td align="center">64.835</td>
            <td align="center"><?php 

              # CODIGO PHP PARA LA MULTIPLICACION
              $a=64.835;

              $x= (3*$a) + 15;
              $y= ($x + 3) / ($x + 1);
              
              $z= (5 * $x +  7 * $y)/($a*$x*$y);
  
              echo round($z,3);
  
              # OPERACIONS
            
        
            
            
            ?></td>
        </tr>
    
        
        
    </table>


    </body>
</html>