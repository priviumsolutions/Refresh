<?php

if(!file_exists("stats.katylog")){
    fopen("stats.katylog", "w");
}


    // Open the file for reading
    $fp = fopen("stats.katylog", "r");

    // Get the existing count
    $count = fread($fp, 999999999);//The 9999 Int is the length of reading

    // Close the file
    fclose($fp);

    // Add 1 to the existing count
    $count = $count + 1;



    // Reopen the file and erase the contents
    $fp = fopen("stats.katylog", "w");

    fwrite($fp, $count);

    // Close the file
    fclose($fp);


?>