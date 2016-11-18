<?php
 $fp=$_GET['fp'];
?>

<html>
 <head>
  <meta http-equiv="refresh" content="0;url=<?php echo "http://www.aikidorenbukai.it/" . $fp; ?>">
 </head>
 <body>

 <?php

  $filePath = "$fp.txt";

  // If file exists, read current count from it, otherwise, initialize it to 0
  $count = file_exists($filePath) ? file_get_contents($filePath) : 0;
  $count = $count + 1;

  // Increment the count and overwrite the file, writing the new value
  file_put_contents($filePath, $count);

 ?> 

 </body>
</html>