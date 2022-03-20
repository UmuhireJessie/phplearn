<?php

    // file system 2

    $file = 'quotes.txt';

    // openning a file for reading
    $handle = fopen($file, 'r+');

    // read the file
    // echo fread($handle, filesize($file));
    // echo fread($handle, 123);

    // read a single line
    // echo fgets($handle);
    // echo fgets($handle);

    // // read a single character
    // echo fgetc($handle);
    // echo fgetc($handle);
    
    // writing to a file

    // fwrite($handle, "\neverything popular is wrong")

    fclose($handle);

    unlink($file);  // delete a file

?>
