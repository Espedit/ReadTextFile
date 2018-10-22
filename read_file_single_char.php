read_file_single_char.php  read_file_std.php

<?php

$handle=fopen("//","r");

while($char=fgetc($handle))
{
   if($char == "\n")

   {
       $char="<br>";



   }


echo "$char";







}










 ?>
