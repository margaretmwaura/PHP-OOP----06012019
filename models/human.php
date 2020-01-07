<?php
namespace humanname {
    class human
    {
        // Declare  properties
        protected $name = " ";
        protected $gender = " ";
        protected $status = " ";
        // Method to get the human details
        public function __construct()
        {
            $this->status = "Alive";
        }

        public function getHuman()
        {
            return ($this->name . $this->gender);
        }

        public function getName()
        {
            return ($this->name);
        }

        public function getGender()
        {
            return ($this->gender);
        }
    }

}


