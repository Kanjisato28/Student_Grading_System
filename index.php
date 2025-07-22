<?php

use Pagador\Gs\models\StudentModel;



require 'vendor/autoload.php';

$student = new StudentModel;

//$student->id=62835;
//$student->name="JETRO";
//$student->course="BPEED";
//$student->section="A";
//$student->year_level=3;

//$student->create();



//$student->delete(1234);


//$student->name="HAROLD";
//$student->course="BSIT";
//$student->section="D";
//$student->year_level=1;


$student->delete(62835);


//$listOfStudents = $student->read();
//print_r($listOfStudents);


?>