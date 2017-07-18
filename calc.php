<?php
    if (isset($_GET['equal']))
    {
        $box= $_GET['equal'];  
        $t = '$n='.$box.';';
           eval($t);
			echo $n;            
    }
    
?>
