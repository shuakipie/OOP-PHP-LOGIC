<?php

    // Chaining  Methods

    // Property

    class Bank{

        public $balance = 80;
        public $amount;
    
        // methods
    
        function account(){
    
            echo "Your account has " . $this->balance . " euros <br>";
            $this->amount = 100;
            return $this;
            
        }
    
        function withdraw(){
            echo "You can not withdraw " . $this->amount . " euros <br>";
            $this->balance = 75;
            return $this;
            
    
    
        }
    
        function tryAgain(){
    
            echo " You can withdraw less than " . $this->balance . " euros. try again!";
        }
    }

    // object

    $bank = new Bank();
    $bank->account()->withdraw()->tryAgain();

   





?>