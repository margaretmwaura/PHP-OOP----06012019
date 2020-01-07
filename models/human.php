<?php
class human
{
    // Declare  properties
    protected $name = " ";
    protected $gender = " ";
    // Method to get the human details
    public function __construct()
    {
        $this ->gender = "Alive";
    }
    public function gethuman()
    {
        return ($this->name .$this->gender);
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
?>
