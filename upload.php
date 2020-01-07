<?php
//This file will be used to collect the details of the human who has been registered

require "human.php";
if(isset($_POST["submit"]))
{
    $name = $_POST["name"];
    $gender = $_POST["gender"];


  //The next step is creating the human
    $newhuman = new human;
    $newhuman ->gender = $gender;
    $newhuman -> name = $name;

    $details = $newhuman -> gethuman();
    echo "This are the details of the user that have been collected " . $details ;
}
