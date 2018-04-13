<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            echo "Afegint cookies<br>";
            echo "Sóc el desenvolupador aldegu1718daw2";
            setcookie("nom", "Jordi Pons", time()+3600, "/", "", 0);
            setcookie("edat", "21", time()+3600, "/", "", 0);
            setcookie("cicle", "DAW", time()+3600, "/", "", 0);
            setcookie("curs", "2n", time()+3600, "/", "", 0);
            setcookie("any", "2017-2018", time()+3600, "/", "", 0);
        ?>  
    </body>    
</html>
