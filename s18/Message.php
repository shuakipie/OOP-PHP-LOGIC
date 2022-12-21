<?php

    // Data encapsulation
    class Message{

        // property
        
        private $message;

        public function setMessage($sms){
            $this->message = $sms;


        }
        public function getMessage(){

            echo "The message i received says: $this->message";
        }
    }


    // object

    $sms1 = new Message();
    $sms1->setMessage("Hello Dear");
    $sms1->getMessage();

?>