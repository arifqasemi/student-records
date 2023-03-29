<?php


$data = array();

if(empty($data_object->lname)){
    $error .="The lastname name empty <br>";
}
if(empty($data_object->fname)){
    $error .="The firstname name empty <br>";
}
if(empty($data_object->date)){
    $error .="The date of birth is empty <br>";
}
if(empty($data_object->lname)){
    $error .="The status is empty <br>";
}


if(empty($data_object->email)){
    $error .="please enter a valid email <br>";
}
if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-])/",$data_object->email)){
    $error .="The email is invalid <br>";
}

if(!isset($data_object->gender)){
    $error .="The gender should be selected <br>";
}
$data['studN']=$db->generate_id(10);
$data['Fname']=$data_object->fname;
$data['Address']=$data_object->address;
$data['DBirth']=$data_object->date;
$data['status']=$data_object->status;

if(isset($data_object->gender)){
$data['sex']=$data_object->gender;
}
$data['Email']=$data_object->email;
$data['Lname']=$data_object->lname;
$data['spouse']=$data_object->spouse;
// $data['Lname']=$data_object->lname;

// $data['date'] =date('Y-m-d H:i:s');
$query = "insert into students(studN,Fname,Lname,Address,sex,DBirth,Email,status,spouse)
values(:studN,:Fname,:Lname,:Address,:sex,:DBirth,:Email,:status,:spouse)";
if($error ==""){
    $result = $db->write($query,$data);
    if($result){
        $info->massege ="Student is added Successfully!";
        $info->data_type ="info";
        echo json_encode($info);
    }



}else{
        $info->massege =$error;
        $info->data_type ="error";
        echo json_encode($info);
}