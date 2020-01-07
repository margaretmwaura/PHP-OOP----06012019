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

$studentarray = array();
if(isset($_POST["submit"]))
{
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $grade = $_POST["class"];
    $age = $_POST["age"];
    $stream = $_POST["stream"];
    $stats = $_POST["status"];
  //The next step is creating the human
    $newhuman = new student();
    $newhuman -> getGender = $gender;
    $newhuman -> getName  = $name;
    $newhuman -> grade = $grade;
    $newhuman -> age = $age;
    $newhuman -> stream = $stream;
    $occupation = $newhuman -> getOccupation();
    $personal = $newhuman -> getPersonalDetails();

    echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <th>Student Gender </th> 
          <th>Student name</th> 
          <th>Student grade</th> 
          <th>Student age</th> 
          <th>Student stream</th> 
         <th>Student Occupation</th> 
          <th>Personal info</th> 
          <th>Health status</th>
      </tr>
       <tr> 
                  <td>'.$newhuman -> getGender .'</td> 
                  <td>'.$newhuman -> getName .'</td> 
                  <td>'.$newhuman -> grade.'</td> 
                  <td>'.$newhuman -> age.'</td> 
                  <td>'.$newhuman -> stream.'</td> 
                  <td>'.$occupation.'</td> 
                  <td>'.$personal.'</td> 
                   <td>'.$newhuman -> healthstatus($stats).'</td> 
              </tr>
              </table>';

};


if(isset($_POST["submitt"]))
{
    $namet = $_POST["name"];
    $gendert = $_POST["gender"];
    $placew = $_POST["placeofwork"];
    $childrenn = $_POST["children"];
    $id_num = $_POST["id_number"];

    //The next step is creating the human
    $teacher = new teacher();
    $teacher -> getName = $namet;
    $teacher -> getGender = $gendert;
    $teacher -> placeofwork = $placew;
    $teacher -> children = $childrenn;
    $teacher -> id_number = $id_num;
    $details = $teacher -> getteacher();
    $occupation = $teacher -> getOccupation();
    $personal = $teacher -> getPersonalDetails();

    echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <th>Teacher Gender </th> 
          <th>Teacher name</th> 
          <th>Teacher placeofwork</th> 
          <th>Teacher children</th> 
          <th>Teacher id_num</th> 
         <th>Teacher Occupation</th> 
          <th>Personal info</th> 
      </tr>
       <tr> 
                  <td>'.$teacher -> getGender.'</td> 
                  <td>'.$teacher -> getName .'</td> 
                  <td>'.$teacher -> placeofwork.'</td> 
                  <td>'.$teacher -> children.'</td> 
                  <td>'.$teacher -> id_number.'</td> 
                  <td>'.$occupation.'</td> 
                  <td>'.$personal.'</td> 
              </tr>
              </table>';

}


