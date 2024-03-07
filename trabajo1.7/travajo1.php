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

    <h1 align="center">7050. Cálculos condicionales <img src="https://omegaup.com/media/quality-badge.png" alt="dc"></h1>
     
     <h2>DESCRIPCION</h2>
     <p>
     Eres muy bueno evaluando fórmulas y realizando cálculos directos,
      pero te cuesta trabajo decidir en qué situaciones se deben hacer qué operaciones. Un compañero 
      te sugirió un ejercicio de cálculo mental que consiste en, dado un número inicial N 
      realizar las siguientes operaciones en el orden indicado y con aritmética entera:<br><br>
      1.Si el valor actual de N es par, divídelo entre 2. En caso contrario, súmale 1.<br>
      2.Si el valor actual de N tiene tres o más cifras, divídelo entre 100. Pero si tiene exactamente dos cifras, divídelo entre 10.<br>
      3. Si el valoractual de N es un múltiplo de tres, réstale uno.<br><br>

      Escribe un programa que te ayude a calcular el valor final de N y el numero
      de que veces que N fue modificado
            
    </p>

    
    <h2>ENTRADA</h2>
    <p>
        Un entero N. Puedes suponer que 1 < N < 1000.
    </p>

    <h2>SALIDA</h2>
    <p>
      Dos enteros que correspondan con el valor final de N y el numero de
      veces de N fue modificado respectivamente.

    </p>

    <h2>EJEMPLO</h2>


    
    
    


    <table border="1">
        <tr>
            <td><h4>ENTRADA</h4></td>
         


            <td><h4>SALIDA</h4></td>

          
        </tr>


                 <h2>Numeros a ingresar </h2>
                <form action="travajo1.php" method="post">
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
            <td align="center"><?php

                    if($_POST)
                    {
                    $modifi=0;
                    $r=0;


                  
                    if($n%2==0)
                    {
                       $r=$r+($n/2);
                        $modifi++;

                        if($n>=100)
                        {
                            $r=$r+($n/100);
                            $modifi++;
                            
                            if($n%3==0)
                            {
                                $r=$r+($n-1);
                                $modifi++;
                            }

                        }
                        else if($n<100 and $n>9)
                        {
                            $r=$r+($n/10);
                            
                            $modifi++;
                            if($n%3==0)
                            {
                                $r=$r+($n-1);
                                $modifi++;
                            }
                        }


                    }
                    else
                    {
                        $r=$r+($n+1);
                        $modifi++;
                        if($n>=100)
                        {
                            $r=$r+($n/100);
                            $modifi++;
                            if($n%3==0)
                            {
                                $r=$r+($n-1);
                                $modifi++;
                            }

                        }
                        else if($n<100 and $n>9)
                        {
                            $r=$r+($n/10);
                            $modifi++;
                            if($n%3==0)
                            {
                                $r=$r+($n-1);
                                $modifi++;
                            }
                        }
                    }
                    echo $r . "  " . $modifi;


                    
                    



                    }

                    

                            

               
                     
        
            
            ?></td>
            

        </tr>
       
            
        
            
            
            
        </tr>
    
        
        
    </table>











</body>








</head>





