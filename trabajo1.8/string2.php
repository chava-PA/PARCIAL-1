<html>
<head>
<body>
    
<ul id="menu">
        
       
        <li><a href="menudeomega.html">MENU</a></li>
        <li><a href="string1.php">4352. Bit de paridad</a></li>
        <li><a href="string2.php">4886. Autores</a></li>
        <li><a href="string3.php">3991. Adquisición de Letras</a></li>      
    </ul>

    <h1 align="center">4886. Autores <img src="https://omegaup.com/media/quality-badge.png" alt="dc"></h1>
     
     <h2>DESCRIPCION</h2>
     <p>
     Los grandes descubrimientos científicos a menudo son nombrados por los apellidos de los científicos que los hicieron. Por ejemplo,
      el sistema de criptografía asimétrica más popular, RSA fue descubierto por Rivest, Shamir y Adleman. Otro ejemplo notable es el algoritmo 
      de Knuth-Morris-Pratt, nombrado por Knuth, Morris y Pratt. La referencia de documentos científicos anteriores funciona mucho y es frecuente
       que un documento utilice dos convenciones de nomenclatura diferentes: la variación corta (por ejemplo, KMP) utilizando sólo las primeras 
       letras de los autores y la larga variación (por ejemplo, Knuth-Morris-Pratt) Apellidos completos separados por guiones. Encontramos que la
        mezcla de dos convenciones en un papel es estéticamente desagradable y quisiera que usted escribiera un programa que transformara variaciones 
        largas en cortas
            
    </p>

    
    <h2>ENTRADA</h2>
    <p>
    La primera y única línea de entrada contendrá como máximo 100 caracteres, letras mayúsculas y minúsculas del alfabeto inglés y guión ('-' ASCII 45).
     El primer carácter siempre será una letra mayúscula. Los guiones siempre serán seguidos por una letra mayúscula.
     Todos los demás caracteres serán letras minúsculas.
     </p>

    <h2>SALIDA</h2>
    <p>
    La primera y única línea de salida debe contener la variación corta apropiada.

    </p>

    <h2>EJEMPLO</h2>


    
    
    


    <table border="1">
        <tr>
            <td><h4>ENTRADA</h4></td>
         


            <td><h4>SALIDA</h4></td>

          
        </tr>


                 <h2>Dame el texto a ingresar</h2>
                <form action="string2.php" method="post">
                texto a ingresar.
                <br>
                <input type="text" name="txtdis1"> <br>
               
                <input type="submit" value="emviar"> <br>

                </form>
                <br><br>
        <tr >
            <td align="center"><?php 
            if($_POST)
            {
                $n=$_POST['txtdis1'];
                echo $n;
                $t=strlen($n);
            }

            
                    
            
            
            
            
            
            ?></td>
            <td align="center"><?php

                    if($_POST)
                    {
                        for ($i = 0; $i < $t; $i++) {
                            if (ctype_upper($n[$i])) {
                                echo $n[$i];
                            }
                        }
                    }
                        
                      


                    
               

                    

                            

               
                     
        
            
            ?></td>
            

        </tr>
       
            
        
            
            
            
        </tr>
    
        
        
    </table>











</body>








</head>





