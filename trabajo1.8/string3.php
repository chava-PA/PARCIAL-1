<html>
<head>
<body>
    
<ul id="menu">
        
       
        <li><a href="menudeomega.html">MENU</a></li>
        <li><a href="string1.php">4352. Bit de paridad</a></li>
        <li><a href="string2.php">4886. Autores</a></li>
        <li><a href="string3.php">3991. Adquisición de Letras</a></li>
      
    </ul>

    <h1 align="center">3991. Adquisición de Letras<img src="https://omegaup.com/media/quality-badge.png" alt="dc"></h1>
     
     <h2>DESCRIPCION</h2>
     <p>
     En el ITAM, a los alumnos que estudian ingeniería les gusta comer letras. A Miguel le encanta la letra "d" y
      quiere saber cuántas se va a poder comer de un paquete que la escuela proporciona a todos sus alumnos.

    El paquete que la escuela entrega es una palabra con letras minúsculas del alfabeto.
            
    </p>

    
    <h2>ENTRADA</h2>
    <p>
    Un solo string de letras minúsculas.
     </p>

    <h2>SALIDA</h2>
    <p>
    La cantidad de veces que aparece la letra favorita de Miguel.

    </p>

    <h2>EJEMPLO</h2>


    
    
    


    <table border="1">
        <tr>
            <td><h4>ENTRADA</h4></td>
         


            <td><h4>SALIDA</h4></td>

          
        </tr>


                 <h2>Dame el texto a ingresar</h2>
                <form action="string3.php" method="post">
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
                        $cont=0;
                        
                        for ($i = 0; $i < $t; $i++) {
                            
                                
                                if($n[$i]=='d' || $n[$i]=='D')
                                {
                                    $cont++;
                                }
                            
                        }
                        echo $cont;
                    }
                        
                      


                    
               

                    

                            

               
                     
        
            
            ?></td>
            

        </tr>
       
            
        
            
            
            
        </tr>
    
        
        
    </table>











</body>








</head>





