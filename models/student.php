<?php
include("human.php");
use humanname\human;
include ("interfaces/detailsinterface.php");
include ("health.php");
use detailinterfacename\detailsinterface;
use healthna\health;
    class student extends human implements detailsinterface
    {

        use health;
        // Declare  properties
        public $grade = " ";
        public $age = " ";
        public $stream = " ";
        // Method to get the human details
        public function getstudent()
        {
            return ($this->name .$this->gender.$this->grade.$this->age.$this->stream);
        }

        public function getPersonalDetails()
        {
            return ($this -> age . $this->grade . $this->stream);
        }

        public function getOccupation()
        {
            return("Student");
        }

}

