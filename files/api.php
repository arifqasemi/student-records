<?php
require_once("includes/database.php");
session_start();
$db =new Database();
$data = file_get_contents("php://input");
$data_object = json_decode($data);
$info = (object)[];

$error = "";

if(isset($data_object->data_type) && $data_object->data_type =='addStudent'){
    include("includes/add-student.php");
 }

 if(isset($data_object->data_type) && $data_object->data_type =='students'){
    include("includes/students.php");
 }

 if(isset($data_object->data_type) && $data_object->data_type =='editStudent'){
    include("includes/edit-student.php");
 }

 if(isset($data_object->data_type) && $data_object->data_type =='updateStudent'){
    include("includes/updateStudent.php");
 }

 if(isset($data_object->data_type) && $data_object->data_type =='deletStudents'){
    include("includes/delete-student.php");
 }

 if(isset($data_object->data_type) && $data_object->data_type =='totalstudents'){
   include("includes/totalstudent.php");
}