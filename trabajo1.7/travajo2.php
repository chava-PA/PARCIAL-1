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

    <h1 align="center">18710. Formulota <img src="https://omegaup.com/media/quality-badge.png" alt="dc"></h1>
     
     <h2>DESCRIPCION</h2>
     <p>
     Diseñar un programa que pregunte los valores de las variables x,y,z y evalue la función f(x,y,z). <br><br>

                <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
            <mi>f</mi>
            <mo stretchy="false">(</mo>
            <mi>x</mi>
            <mo>,</mo>
            <mi>y</mi>
            <mo>,</mo>
            <mi>z</mi>
            <mo stretchy="false">)</mo>
            <mo>=</mo>
            <mfrac>
                <mrow>
                <mfrac>
                    <mrow>
                    <mi>x</mi>
                    <mo>+</mo>
                    <mi>y</mi>
                    </mrow>
                    <mrow>
                    <mn>2</mn>
                    <mi>x</mi>
                    </mrow>
                </mfrac>
                <mo>+</mo>
                <mfrac>
                    <mrow>
                    <msup>
                        <mi>x</mi>
                        <mn>3</mn>
                    </msup>
                    <mo>+</mo>
                    <msup>
                        <mi>y</mi>
                        <mn>3</mn>
                    </msup>
                    </mrow>
                    <mrow>
                    <msup>
                        <mi>x</mi>
                        <mn>2</mn>
                    </msup>
                    <mo>+</mo>
                    <msup>
                        <mi>y</mi>
                        <mn>2</mn>
                    </msup>
                    </mrow>
                </mfrac>
                </mrow>
                <mrow>
                <msup>
                    <mi>x</mi>
                    <mn>2</mn>
                </msup>
                <mo>+</mo>
                <msup>
                    <mi>y</mi>
                    <mn>2</mn>
                </msup>
                <mo>+</mo>
                <msup>
                    <mi>z</mi>
                    <mn>2</mn>
                </msup>
                </mrow>
            </mfrac>
            </math>
    
         
    </p>

    
    <h2>ENTRADA</h2>
    <p>
    El programa pedirá tres números, uno por renglón, estos podrán ser positivos, 
    negativos o cero, y pudieran tener decimales.
    </p>

    <h2>SALIDA</h2>
    <p>
      
            La respuesta, o salida a la consola, será el valor de la función f(x,y,z) redondeado a 6 decimales.

        Nota: Se puede usar la función tofixed(numero,decimales) para ajustar la salida.




    </p>

    <h2>EJEMPLO</h2>


    
    
    


    <table border="1">
        <tr>
            <td><h4>ENTRADA</h4></td>
         


            <td><h4>SALIDA</h4></td>

            <td><h4>DESCRIPCION</h4></td>

          
        </tr>


                 <h2>Numeros a ingresar </h2>
                <form action="travajo2.php" method="post">
                Dame los valores de x,y,z
                <br>
                x=
                <input type="text" name="txtdis1"> <br>
                y=
                <input type="text" name="txtdis2"> <br>
                z=
                <input type="text" name="txtdis3"> <br>
               
                <input type="submit" value="emviar"> <br>

                </form>
                <br><br>
        <tr >
            <td align="center"><?php 
            if($_POST)
            {
                $x=$_POST['txtdis1'];
                $y=$_POST['txtdis2'];
                $z=$_POST['txtdis3'];
                
                echo $x . "<br>"; 
                echo $y . "<br>"; 
                echo $z . "<br>"; 
            }

            
                    
            
            
            
            
            
            ?></td>
            <td align="center"><?php

                    if($_POST)
                    {
                    
                     $f=(($x+$y)/($x*2)+(pow($x,3)+pow($y,3))/(pow($x,2)+pow($y,2)))/(pow($x,2)+pow($y,2)+pow($z,2));
                   
                        echo   round($f,6);


                    }

                    

                            

               
                     
        
            
            ?></td>
             <td align="center"><?php

                    if($_POST)
                    {

                    $f=(($x+$y)/($x*2)+(pow($x,3)+pow($y,3))/(pow($x,2)+pow($y,2)))/(pow($x,2)+pow($y,2)+pow($z,2));

                        echo $f;


                    }



        


 


?></td>
            

        </tr>
       
            
        
            
            
            
        </tr>
    
        
        
    </table>









</body>








</head>





