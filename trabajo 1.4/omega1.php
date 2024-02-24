<html>
    <body>
     <h1 align="center">13433. Estaciones del Año</h1>
     
     <h2>DESCRIPCION</h2>
     <p>
     Brithany quiere combinar la programación con el inglés, y se encuentra empezando a usar las estructuras 
     de control selectivas en la programación estructurada, como ejercicio necesita desarrollar un programa 
     que sea capaz de especificar a que estación (su nombre en inglés) del año pertenece una fecha en especifico
     compuesta por un día D y un mes M segun lo siguiente:<br><br>

     - Winter del 21 de diciembre al 20 de marzo<br>
     - Spring del 21 de marzo al 21 de junio<br>
     - Summer del 22 de junio al 22 de septiembre<br>
     - Fall del 23 de septiembre al 20 de diciembre<br><br>
        
     Considerando la siguiente cantidad de días para cada mes:<br><br>

     - Enero, Marzo, Mayo, Julio, Agosto, Octubre y Diciembre 31 días<br>
     - Abril, Junio, Septiembre y Noviembre 30 días<br>
     - Febrero 28 días<br>
     - Cualquier fecha fuera de estos rangos debe considerarse como no existente<br><br>

     Ayuda a Brithany a crear ese programa usando estructuras de control selectivas.<br><br>

    </p>
    
    <h2>ENTRADA</h2>
    <p>Dos números enteros D y M separados por un espacio que corresponden al día y mes de una 
        fecha determinada
</p>
    <h2>SALIDA</h2>
    <p>Dos numeros S que indique la estación del año a la que pertenece la fecha ingresada o un mensaje que 
        indique no existe la fecha, si la fecha no es válida </p>
    <h2>EJEMPLO</h2>


    
    
    


    <table border="1">
        <tr>
            <td><h4>ENTRADA</h4></td>
         


            <td><h4>SALIDA</h4></td>
        </tr>
        <tr >
            <td align="center">15 10 </td>
            <td align="center"><?php

            $d=15;
            $m=10;

            $enero=1; 
            $febrero=2;
            $marzo=3;
            $abril=4;
            $mayo=5;
            $junio=6;
            $julio=7;
            $agosto=8;
            $septimbre=9;
            $octubre=10;
            $nombiembre=11;
            $disiembre=12;

            if($m==9 or $m==10 or $m==11 or $m==12)
             {

                if($m==9 and $d>30 or $m==10 and $d>31 or $m==11 and $b>30 or $m==12 and $d>31 )
                {
                    echo "no existe la fecha";
                }

                 else if($m==9 and $d>=23 or $m==12 and $d<=20 or $m==10 or $m==11)
                  {
                      echo"fall";
                  }
                  else if($m==9 and $d<23)
                  {
                      echo "Summer";
                  }
         
  
             }
             else if($m==3 or $m==4 or $m==5 or $m==6)
             {  
                 if($m==3 and $d>31 or $m==4 and $d>30 or $m==5 and $b>31 or $m==6 and $d>30 )
                {
                    echo "no existe la fecha";
                }
            
                else if($m==3 and $d>=21 or $m==6 and $d<=21 or $d>=23 or $m==12)
                  {
                     echo "Spring";
                  }
                  else if($m==3 and $d<21)
                  {
                     echo "Winter";
                  }
                  else if($m==6 and $d>21)
                  {
                     echo "Summer";
                  }
             }
             else if($m==12 or $m==1 or $m==2 or $m==3)
              {

                    if($m==12 and $d>31 or $m==1 and $d>31 or $m==2 and $b>28 or $m==3 and $d>31 )
                    {
                        echo "no existe la fecha";
                    }
                    else
                    {
                    echo "Winter";
                    }
              }
              else if ($m==6 or $m==7 or $m==8 or $m==9)
             {
                if($m==6 and $d>30 or $m==7 and $d>31 or $m==8 and $b>31 or $m==9 and $d>30 )
                    {
                        echo "no existe la fecha";
                    }
                    else
                    {
                     echo "Summer";
                   }       

                    }

             
            
            
            
            ?></td>
        </tr>
        <tr >
            <td align="center">22 3</td>
            <td align="center"><?php 
            
            $d=22;
            $m=3;

            $enero=1; 
            $febrero=2;
            $marzo=3;
            $abril=4;
            $mayo=5;
            $junio=6;
            $julio=7;
            $agosto=8;
            $septimbre=9;
            $octubre=10;
            $nombiembre=11;
            $disiembre=12;

            if($m==9 or $m==10 or $m==11 or $m==12)
            {

               if($m==9 and $d>30 or $m==10 and $d>31 or $m==11 and $b>30 or $m==12 and $d>31 )
               {
                   echo "no existe la fecha";
               }

                else if($m==9 and $d>=23 or $m==12 and $d<=20 or $m==10 or $m==11)
                 {
                     echo"fall";
                 }
                 else if($m==9 and $d<23)
                 {
                     echo "Summer";
                 }
        
 
            }
            else if($m==3 or $m==4 or $m==5 or $m==6)
            {  
                if($m==3 and $d>31 or $m==4 and $d>30 or $m==5 and $b>31 or $m==6 and $d>30 )
               {
                   echo "no existe la fecha";
               }
           
               else if($m==3 and $d>=21 or $m==6 and $d<=21 or $d>=23 or $m==12)
                 {
                    echo "Spring";
                 }
                 else if($m==3 and $d<21)
                 {
                    echo "Winter";
                 }
                 else if($m==6 and $d>21)
                 {
                    echo "Summer";
                 }
            }
            else if($m==12 or $m==1 or $m==2 or $m==3)
             {

                   if($m==12 and $d>31 or $m==1 and $d>31 or $m==2 and $b>28 or $m==3 and $d>31 )
                   {
                       echo "no existe la fecha";
                   }
                   else
                   {
                   echo "Winter";
                   }
             }
             else if ($m==6 or $m==7 or $m==8 or $m==9)
            {
               if($m==6 and $d>30 or $m==7 and $d>31 or $m==8 and $b>31 or $m==9 and $d>30 )
                   {
                       echo "no existe la fecha";
                   }
                   else
                   {
                    echo "Summer";
                  }       

                   }

           
           
             

            
            
            ?></td>
        </tr>
        <tr >
            <td align="center">31 4</td>
            <td align="center"><?php
             $d=31;
             $m=4;
 
             $enero=1; 
             $febrero=2;
             $marzo=3;
             $abril=4;
             $mayo=5;
             $junio=6;
             $julio=7;
             $agosto=8;
             $septimbre=9;
             $octubre=10;
             $nombiembre=11;
             $disiembre=12;
 
             if($m==9 or $m==10 or $m==11 or $m==12)
             {

                if($m==9 and $d>30 or $m==10 and $d>31 or $m==11 and $b>30 or $m==12 and $d>31 )
                {
                    echo "no existe la fecha";
                }

                 else if($m==9 and $d>=23 or $m==12 and $d<=20 or $m==10 or $m==11)
                  {
                      echo"fall";
                  }
                  else if($m==9 and $d<23)
                  {
                      echo "Summer";
                  }
         
  
             }
             else if($m==3 or $m==4 or $m==5 or $m==6)
             {  
                 if($m==3 and $d>31 or $m==4 and $d>30 or $m==5 and $b>31 or $m==6 and $d>30 )
                {
                    echo "no existe la fecha";
                }
            
                else if($m==3 and $d>=21 or $m==6 and $d<=21 or $d>=23 or $m==12)
                  {
                     echo "Spring";
                  }
                  else if($m==3 and $d<21)
                  {
                     echo "Winter";
                  }
                  else if($m==6 and $d>21)
                  {
                     echo "Summer";
                  }
             }
             else if($m==12 or $m==1 or $m==2 or $m==3)
              {

                    if($m==12 and $d>31 or $m==1 and $d>31 or $m==2 and $b>28 or $m==3 and $d>31 )
                    {
                        echo "no existe la fecha";
                    }
                    else
                    {
                    echo "Winter";
                    }
              }
              else if ($m==6 or $m==7 or $m==8 or $m==9)
             {
                if($m==6 and $d>30 or $m==7 and $d>31 or $m==8 and $b>31 or $m==9 and $d>30 )
                    {
                        echo "no existe la fecha";
                    }
                    else
                    {
                     echo "Summer";
                   }       

                    }




              


                ?> </td>
        </tr>
        <tr>
        
        </tr>
        
    </table>


    </body>
</html>

_______________________________________________________________________________________________________________________


<html>
    
    <body>
     <h1 align="center">7341. El mayor de tres números</h1>
     
     <h2>DESCRIPCION</h2>
     <p>
     Realiza un problema que imprima el mayor de tres números.
    </p>
    
    <h2>ENTRADA</h2>
    <p>Escribe tres numeros enteros a,b y c</p>
    <h2>SALIDA</h2>
    <p>El número entero mayor de los tres números introducidos.</p>
    <h2>EJEMPLO</h2>


    
    
    


    <table border="1">
        <tr>
            <td><h4>ENTRADA</h4></td>
         


            <td><h4>SALIDA</h4></td>
        </tr>
        <tr >
            <td align="center">10<br> 8<br> -7 </td>
            <td align="center"><?php

            $a=10;
            $b=8;
            $c=-7;
            
            if($a>=$b and $a>=$c)
                {
                    echo $a;
                }
                else if($b>=$a and $b>=$c)
                {
                    echo $b;
                }
                else if($c>=$a and $c>=$b)
                {
                    echo $c;
                }
            
            ?></td>
        </tr>
        <tr >
            <td align="center">10<br> 81<br> 101</td>
            <td align="center"><?php 
            
            $s=10;
            $d=81;
            $f=101;

            if($s>=$d and $s>=$f)
                {
                    echo $s;
                }
                else if($d>=$s and $d>=$f)
                {
                    echo $d;
                }
                else if($f>=$d and $f>=$d)
                {
                    echo $f;
                }
            
            
            ?></td>
        </tr>
        <tr >
            <td align="center">11<br> 11<br> 11</td>
            <td align="center"><?php
            $z=11;
            $x=11;
            $v=-11;

            if($z>=$x and $z>=$v)
                {
                    echo $z;
                }
                else if($x>=$z and $x>=$v)
                {
                    echo $x;
                }
                else if($v>=$z and $v>=$x)
                {
                    echo $v;
                }
              


                ?> </td>
        </tr>
        <tr>
        
        </tr>
        <tr >
            <td align="center">10<br> 810<br> 101 </td>
            <td align="center"><?php

            $a=10;
            $b=810;
            $c=101;
            
            if($a>=$b and $a>=$c)
                {
                    echo $a;
                }
                else if($b>=$a and $b>=$c)
                {
                    echo $b;
                }
                else if($c>=$a and $c>=$b)
                {
                    echo $c;
                }
            
            ?></td>
        </tr>
    </table>


    </body>
</html>
_______________________________________________________________________________________________________________________

<html>
    <body>
     <h1 align="center">7294. ¿Cuántos valen 7?</h1>
     
     <h2>DESCRIPCION</h2>
     <p>
     Escribe un programa que lea dos enteros e imprima cuántos de ellos valen 7. 
.
    </p>
    
    <h2>ENTRADA</h2>
    <p>Dos enteros en el rango de -1000a + 1000</p>
    <h2>SALIDA</h2>
    <p>La cantidad de enteros es igual a 7.</p>
    <h2>EJEMPLO</h2>


    
    
    


    <table border="1">
        <tr>
            <td><h4>ENTRADA</h4></td>
         


            <td><h4>SALIDA</h4></td>
        </tr>
        <tr >
            <td align="center">-3 0 </td>
            <td align="center"><?php

            $a=-3;
            $b=0;
            $cont=0;
            
            if($a==7 && $b==7)
            {
                $cont=$cont+2;
            }
            else if($a==7 || $b==7)
            {
                $cont++;
            }
            echo $cont;

          
            
            ?></td>
        </tr>
        <tr >
            <td align="center">7 57</td>
            <td align="center"><?php 

            $a=7;
            $b=57;
            $cont=0;
            
            if($a==7 && $b==7)
            {
                $cont=$cont+2;
            }
            else if($a==7 || $b==7)
            {
                $cont++;
            }
           
            echo $cont;
           
            
            
            ?></td>
        </tr>
        <tr >
            <td align="center">62 7</td>
            <td align="center"><?php
            $a=62;
            $b=7;
            $cont=0;
            
            if($a==7 && $b==7)
            {
                $cont=$cont+2;
            }
            else if($a==7 || $b==7)
            {
                $cont++;
            }
           
            echo $cont;
              


                ?> </td>
        </tr>
        <tr>
        
        </tr>
        <tr >
            <td align="center">7 7 </td>
            <td align="center"><?php

                $a=7;
                $b=7;
               
               $cont=0;
               if($a==7 && $b==7)
            {
                $cont=$cont+2;
            }
            else if($a==7 || $b==7)
            {
                $cont++;
            }
            echo $cont;
            
            ?></td>
        </tr>
    </table>


    </body>
</html>