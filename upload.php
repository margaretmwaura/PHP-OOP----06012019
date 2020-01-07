<?php
function autoloadModel($className) {
    $filename = "models/".$className . ".php";
    if (is_readable($filename)) {
        require $filename;
    }
}

function autoloadController($className) {
    $filename = "interfaces/" . $className . ".php";
    if (is_readable($filename)) {
        require $filename;
    }
}

spl_autoload_register("autoloadModel");
spl_autoload_register("autoloadController");
if(isset($_POST["submit"]))
{
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $grade = $_POST["class"];
    $age = $_POST["age"];
    $stream = $_POST["stream"];

  //The next step is creating the human
    $newhuman = new student();
    $newhuman ->gender = $gender;
    $newhuman -> name = $name;
    $newhuman -> grade = $grade;
    $newhuman -> age = $age;
    $newhuman -> stream = $stream;
    $details = $newhuman -> getstudent();
    $occupation = $newhuman -> getOccupation();
    $personal = $newhuman -> getPersonalDetails();

    echo "This are the details of the user that have been collected " . $details ;

    echo "This is the occupation of the student " . $occupation;
    echo "This are the personal details of the student " . $personal;
}
