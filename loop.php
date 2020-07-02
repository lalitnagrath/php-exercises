<?php
//php loop
?>
<table border="2px">
<?php
for($x=1;$x<=100;$x){
    ?>
    <tr>
    <?php
    for($y=0;$y<=9;$y++){
        ?> <td>
        <?php echo $x+$y ."  <br>";
         ?> </td><?php        
}
    $y++;
   ?>
   </tr>
   <?php
    $x=$x+10;
}?>
</table>
<?php

?>
