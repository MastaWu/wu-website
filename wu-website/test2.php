<?php

$openFile = fopen("help_content.php", "r");

$openFile2 = fopen("nohtml2.txt", "r");

    if($openFile){
       
    //    for($i = 0; $i<5;$i++){
            
    //        $getLine = fgets($openFile);
            
    //        echo $getLine . "<br />";
            
    //    }
        
        while(! feof($openFile)){
            
            while($getLine = fread($openFile, filesize("help_content.php"))){
            
                $strip = strip_tags($getLine);
                
                print $strip;
                
                echo fwrite($openFile2, $strip);
            }
            
        }
        
    }

    fclose($openFile);
    
    fclose($openFile2);
    
?>