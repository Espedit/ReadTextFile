read_file_std.php


<?php


$handle=fopen("//","r");

while(!feof($handle)
{
  $readt=fgets($handle);

echo $readt,"<br>";






}


fclose($handle);

















 ?>
