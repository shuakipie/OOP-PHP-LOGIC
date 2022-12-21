<?php
    // Type Hinting

    declare(strict_types=1);
    class Person{


        private $name;
        private $age;


        public function setInfo(string $name, int $age) : void {

            $this->name = $name;
            $this->age = $age;


        }

        function getInfo() : string {

            return " My name is $this->name and i am $this->age years old !";
            
        }

    }

    $person = new Person();
    $person->setInfo("ShuakiPie", 35);
    echo $person->getInfo();

?>
