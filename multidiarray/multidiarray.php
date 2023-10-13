<?php
$films = array(
                 array(
                        "Pink Panther",
                         "Johnny English",
                         "See no evil hear no evil"
                      ),

                 array (
                         "Die Hard",
                         "Expendables 1",
                         "Expendables 2"
                       ),

                 array ("The Lord of the rings 1",
                        "The Lord of the rings 2",
                        "The Lord of the rings 3"
                       )
                );

        for ($row = 0; $row < 3; $row++) { 
                
                for ($col=0; $col < 3; $col++) { 
                        echo $films[$row][$col]. ', ';
                }
                echo "</br>";
        }
        

?>
