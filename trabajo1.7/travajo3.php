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

    <h1 align="center">7093. El lado más corto <img src="https://omegaup.com/media/quality-badge.png" alt="dc"></h1>
     
     <h2>DESCRIPCION</h2>
     <p>
     Escribe un programa que, dadas las coordenadas de los vértices de 
     un cuadrilátero, calcule la longitud de su lado más corto.<br><br>
     <img src="https://omegaup.com/img/El-lado-mas-corto/92ba89763999e8ba279d510c31c3e0bb666bf271.png" alt="iamgen">
    </p>

    
    <h2>ENTRADA</h2>
    <p> 
        Ocho reales x1,y1,x2,y2,x3,y3,x4,y4. Puedes suponer que 
        0 < Xi,Yi < 100 y que los vertices se listan en el sentido de 
        las manecillas del reloj.

        


        
    </p>

    <h2>SALIDA</h2>
    <p>
    Un real que sea la longitud del lado más corto del cuadrilátero.
     Tu programa se considerará correcto si el valor calculado es 
     razonablemente cercano a la respuesta exacta.

    </p>

    <h2>EJEMPLO</h2>


    
    
    


    <table border="1">
        <tr>
            <td><h4>ENTRADA</h4></td>
         


            <td><h4>SALIDA</h4></td>

          
        </tr>


                 <h2>Lados a ingresasr </h2>
                <form action="travajo3.php" method="post">
                Dame su valor
                <br>

                y1
                <input type="text" name="txtdisy1"> <br>
                x2
                <input type="text" name="txtdisx2"> <br>
                y2
                <input type="text" name="txtdisy2"> <br>
                x3
                <input type="text" name="txtdisx3"> <br>
                y3
                <input type="text" name="txtdisy3"> <br>
                x4
                <input type="text" name="txtdisx4"> <br>
                y4
                <input type="text" name="txtdisy4"> <br>

                <input type="submit" value="emviar"> <br>

                </form>
                <br><br>
        <tr >
            <td align="center"><?php 
            if($_POST)
            {
                $xd=$_POST['txtdis1'];
                $sas=$_POST['txtdis2'];
                $kawabonga=$_POST['txtdis3'];
                $sopas=$_POST['txtdis4'];
                $arturo=$_POST['txtdis5'];
                $enrique=$_POST['txtdis6'];
                $pepe=$_POST['txtdis7'];
                $m=$_POST['txtdis8'];

                echo $xd . " " . $sas.  "<br>" . $kawabonga . " " . $sopas .  "<br>" . $arturo . " " . $enrique .  "<br>" . $pepe . " " . $m .  "<br>";
            }

            
            ?></td>
            <td align="center"><?php

                    if($_POST)
                    {
                 

                        $a = sqrt((pow($x2-$x1,2))+(pow($y2-$y1,2)));
                        $b = sqrt((pow($x3-$x2,2))+(pow($y3-$y2,2)));
                        $c = sqrt((pow($x4-$x3,2))+(pow($y4-$y3,2)));
                        $d = sqrt((pow($x4-$x1,2))+(pow($y4-$y1,2)));
                       
                        if($a<$b && $a<$c && $a<$d)
                        {
                          printf("%lf",a);
                        }
                        else if ($b<$c && $b<$d)
                        {
                          printf("%lf",b);
                        }
                        else if ($c<$d)
                        {
                          printf("%lf",c);
                        }
                        else
                        {
                          printf("%lf",d);
                        }
                    
                    



                    }

                    

                            

               
                     
        
            
            ?></td>
            

        </tr>
       
            
        
            
            
            
        </tr>
    
        
        
    </table>






</body>








</head>






</html>