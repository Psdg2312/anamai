<h1><?php echo $title;?></h1>
<br>
 <?php

    echo 'this is Test view';
    echo '<hr>';
    echo 'data from controller ::'.$cat;
    ?>
<hr>
<h3> แสดงผลแบบ Array </h3>                     
<?php
print_r($ar);
echo '<hr>';
print_r ($person);
echo '<hr>';

foreach ($person as $item) {
    echo $item['fname'].'/'.$item['lname'].'/'.$item['email'].'<br>';
    
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

