<?php

    class File{

        // no properties

        // methods

        function showInfo($filename){

            echo "The name of the file that will open is <b>$filename</b>";
            echo "<br>";
            $content = file_get_contents($filename);
            echo "The content of the <br>$filename </b> is : <i>$content</i>";
        
        }

    }

    //  Object

    $file1 = new File();
    $file1->showInfo("textfile.txt");

?>