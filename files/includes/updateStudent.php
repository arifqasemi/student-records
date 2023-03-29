<?php

$data = array();
if(empty($data_object->gender)){
    $error .="please select gender <br>";
   
}

if(empty($data_object->fname)){
    $error .="firstname is empty <br>";
   
}
if(empty($data_object->lname)){
    $error .="lastname is empty <br>";
   
}
if(empty($data_object->gender)){
    $error .="date of birth is empty <br>";
   
}
if($error ==""){
    
        $data['Fname']=$data_object->fname;
        $data['Lname']=$data_object->lname;
        $data['studN']=$data_object->student_id;
        $data['Address']=$data_object->address;
        $data['sex']=$data_object->gender;
        $data['DBirth']=$data_object->date;
        $data['status']=$data_object->status;
        $data['Email']=$data_object->email;



        $query = "update  students set studN=:studN,Fname=:Fname,Lname=:Lname,Address=:Address,sex=:sex,DBirth=:DBirth,Email=:Email, status=:status where studN =:studN";
        $result = $db->write($query,$data);
    
    
        if($result){
            $info->massege ="Your profile is updated successfully!";
            $info->data_type ="info";
            echo json_encode($info);
        }else{
        $info->massege ="sory";
        $info->data_type ="error";
        echo json_encode($info);
    }


}else{
    $info->massege =$error;
    $info->data_type ="error";
    echo json_encode($info);
}
  