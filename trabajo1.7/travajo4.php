<html>
<head>
<body>
    
<ul id="menu">

<li><a href="indexomega.html">MENU</a></li>
        <li><a href="travajo1.php">7050. Cálculos condicionales</a></li>
        <li><a href="travajo2.php">18710. Formulota</a></li>
        <li><a href="travajo3.php">7093. El lado más corto</a></li>
        <li><a href="travajo4.php">11338. Escalera de asteriscos</a></li>

    </ul>
    
    <h1 align="center">11338. Escalera de asteriscos <img src="https://omegaup.com/media/quality-badge.png" alt="dc"></h1>
     
     <h2>DESCRIPCION</h2>
     <p>
     Inés quiere llegar a su casa, pero accidentalmente, los arquitectos construyeron la puerta demasiado alta. 
     Tu misión es ayudar a Inés a subir a su casa construyendo una escalera de longitud y altura N
     hecha de asteriscos.
    </p>

    
    <h2>ENTRADA</h2>
    <p>
    Se te darán como valor de entrada un numero entero N 
      el cuál representa la longitud y altura de la escalera.
    </p>

    <h2>SALIDA</h2>
    <p>
    Deberás imprimir como salida una escalera de dimensiones N
     de largo y N
    de alto

    </p>

    <h2>EJEMPLO</h2>


    
    
    


    <table border="1">
        <tr>
            <td><h4>ENTRADA</h4></td>
         


            <td><h4>SALIDA</h4></td>

          
        </tr>


                 <h2>Numeros a ingresar </h2>
                <form action="travajo4.php" method="post">
                Dame el numero N.
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
               
            }

            
                    
            
            
            
            
            
            ?></td>
            <td ><?php

                    if($_POST)
                    {

                        for ($i = 1; $i <= $n; $i++) {
                
                            for ($k = 0; $k <$i; $k++) {
                                echo "#";
                            }
                    
                    
                            echo "<br>";
                        }
                    }
                    
                    



                    

                    

                            

               
                     
        
            
            ?></td>
            

        </tr>
       
            
        
            
            
            
        </tr>
    
        
        
    </table>







</body>








</head>






</html>