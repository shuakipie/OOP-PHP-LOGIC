<?php 

    class Person{

        // no properties
        
        // methods

         function screamName($name, $age){

            echo "My name is $name and I  am $age years old";

         }


    }

    // Object

    $george = new Person();
    
    // access methods
    $george->screamName("George", 25);
?>