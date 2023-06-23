<?php

$myfile = fopen("dump.txt", "a") or die("Unable to open file!");
$_POST['hello'] = "hello";
fwrite($myfile, "\n===== POST ======\n");

foreach( $_POST as $stuff ) {
    if( is_array( $stuff ) ) {
        foreach( $stuff as $thing ) {
            echo $thing;
            fwrite($myfile, $thing);
        }
    } else {
        echo $stuff;
        fwrite($myfile, $stuff);
    }
}

fwrite($myfile, "\n====== GET =======\n");

foreach( $_GET as $stuff ) {
    if( is_array( $stuff ) ) {
        foreach( $stuff as $thing ) {
            echo $thing;
            fwrite($myfile, $thing);
        }
    } else {
        echo $stuff;
        fwrite($myfile, $stuff);
    }
}



fclose($myfile);



?>