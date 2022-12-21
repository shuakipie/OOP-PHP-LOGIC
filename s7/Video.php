<?php

    // Getters and Setters
    class Video{

        // properties
        public $type = "";
        public $duration = "";
        //Setter Methos
        function setVideoInfo($video_type, $video_duration){
                $this->type = $video_type;
                $this->duration = $video_duration;

        }
        // Getter Methods

        function getVideoInfo(){

            return "This is an " . $this->type . " video and it lasts " . $this->duration . " seconds";

        }
    }

    // object
    $myvideo = new Video();

    // access methods and properties
    $myvideo->setVideoInfo(".mp4", 45);
    echo $myvideo->getVideoInfo();
?>

