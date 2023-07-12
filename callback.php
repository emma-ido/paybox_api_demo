<?php

$myfile = fopen("dump.txt", "a") or die("Unable to open file!");
//$_POST['hello'] = "hello";

fwrite($myfile, "\n===== Start ======\n");

$content = var_dump($_POST);
// echo $content;


fwrite($myfile, $content);

fwrite($myfile, "\n===== End ======\n");

fclose($myfile);



?>