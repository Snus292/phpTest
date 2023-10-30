<!DOCTYPE html>
<?php
    require './func.php';
    require './month.php';
?>

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
//        echo 'Enter simple numbers 1 to 1000';
//        for ($num = 0; $num <=1000; $num++) {
//           echo $num . '<br>';
//        };
        
        $total = 0;
        echo 'Enter simple numbers 1 to 1000';
        for ($num = 0; $num <=1000; $num++) {
            if ($num%2 === 0){
                simple_num($num);
                $total += $num;
            }
       };
       
       echo '<br>'. 'Kokku on '. $total;
        ?>
    </body>
</html>
