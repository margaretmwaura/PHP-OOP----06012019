<?php
class teacher extends human implements detailsinterface
{
    // Declare  properties
    public $placeofwork = " ";
    public $children = " ";
    public $id_number = " ";
    // Method to get the human details
    public function getteacher()
    {
        return ($this->name .$this->gender.$this->placeofwork.$this->children.$this->id_number);
    }
    public function getPersonalDetails()
    {
        return ($this -> placeofwork. $this->children . $this->id_number);
    }
    public function getOccupation()
    {
        return("Teacher");
    }
}
