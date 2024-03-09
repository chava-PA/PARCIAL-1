<html>
<head>
<body>
    
<ul id="menu">
        
       
        <li><a href="menudeomega.html">MENU</a></li>
        <li><a href="string1.php">4352. Bit de paridad</a></li>
        <li><a href="string2.php">4886. Autores</a></li>
        <li><a href="string3.php">3991. Adquisición de Letras</a></li>      
    </ul>

    <h1 align="center">4352. Bit de paridad  <img src="https://omegaup.com/media/quality-badge.png" alt="dc"></h1>
     
     <h2>DESCRIPCION</h2>
     <p>
            Un bit de paridad es un dígito binario que indica si el número de bits con un valor de 1 en un conjunto de 
            bits es par o impar. Los bits de paridad conforman el método de detección de errores más simple. Existen dos variantes de este método:

        Bit de paridad par
        Bit de paridad impar.
        En el caso de la paridad par, se cuentan el número de unos. Si el total es impar, el bit de paridad
         se establece en uno y por tanto la suma del total anterior con este bit de paridad, daría par. Si el conteo de bits uno es par, 
         entonces el bit de paridad se deja en 0, pues ya es par.

        Escribe un programa que sirva para añadir un bit de paridad par a una secuencia de bits.
            
    </p>

    
    <h2>ENTRADA</h2>
    <p>
    La entrada consiste de una sola línea con una secuencia de siete bits 0 o 1.    </p>

    <h2>SALIDA</h2>
    <p>
    La salida es la misma secuencia de siete bits de la entrada más el bit de paridad par. Dicho bit de paridad se agrega al lado derecho.

    </p>

    <h2>EJEMPLO</h2>


    
    
    


    <table border="1">
        <tr>
            <td><h4>ENTRADA</h4></td>
         


            <td><h4>SALIDA</h4></td>

          
        </tr>


                 <h2>Numeros a ingresar </h2>
                <form action="string1.php" method="post">
                Dame el numero binario.
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
                        
                        $cont=0;
                     


                        for($i=0; $i<$t; $i++)
                        {
                            $cont=$cont+$n[$i];
                            
                        }
                       
                        if($cont%2==0)
                        {
                            echo $n,0;
                        }
                        else
                        {
                            echo $n,1;   
                        }


                    }
               

                    

                            

               
                     
        
            
            ?></td>
            

        </tr>
       
            
        
            
            
            
        </tr>
    
        
        
    </table>











</body>








</head>





