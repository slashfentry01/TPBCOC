<?php

// $file = "dog";
// $file = escapeshellarg($file);
//$filename = escapeshellarg($filename);
//escap the others 
// $output = exec("./jeff.sh $file");
?>

<?php
$filename="nigel";
putenv("FILENAMETEST=$filename");
// putenv("FILETEST=$file");
// putenv("TAGSTEST=$tags");
// putenv("PRIVATETEST=$private");
// putenv("PASSWORDTEST=$PASSWORD");
$output = exec('./jeff.sh');

?>