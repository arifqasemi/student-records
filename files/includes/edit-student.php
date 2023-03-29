<?php

$student_id = $data_object->student_id;

$sqli = "select * from students where studN = '$student_id'"; 
$student = $db->read($sqli,[]);
$mydata = "";
$student = $student[0];
// $data = array();
if($student){

    $mydata .="<form method='post' id='form'>
    <div class='row'>
       <div class='col-12'>
          <h5 class='form-title'><span>Student Information</span></h5>
       </div>
       <div class='col-12 col-sm-6'>
          <div class='form-group'>
             <label>First name</label>
             <input type='text' class='form-control' name='firstname' value='$student->Fname'>
          </div>
       </div>
       <div class='col-12 col-sm-6'>
          <div class='form-group'>
             <label>Last Name</label>
             <input type='text' class='form-control' name='lastname' value='$student->Lname'>
          </div>
       </div>
       <div class='col-12 col-sm-6'>
          <div class='form-group'>
             <label>Student Id</label>
             <input type='text' class='form-control' disabled placeholder='It automatically generat student Id'>
             </div>
       </div>
       <div class='col-12 col-sm-6'>
          <div class='form-group'>
          <br> Gender:<br/>
          <input type='radio' id='gender' name='gender' value='male'>
          <label for='male'>Male</label>
          <input type='radio' id='gender' name='gender' value='female'>
          <label for='female'>Female</label>
          </div>
       </div>
       <div class='col-12 col-sm-6'>
          <div class='form-group'>
             <label>Date of Birth</label>
             <div>
                <input type='text' class='form-control' name='date' value='".date("j,m,Y",strtotime($student->DBirth))."'>
             </div>
          </div>
       </div>
       <div class='col-12 col-sm-6'>
          <div class='form-group'>
             <label>Status</label>
             <input type='text' class='form-control' name='status' value='$student->status'>
          </div>
       </div>
     
       <div class='col-12 col-sm-6'>
          <div class='form-group'>
             <label>Address</label>
             <div>
                <input type='text' class='form-control' name='address' value='$student->Address'>
             </div>
          </div>
       </div>
       <div class='col-12 col-sm-6'>
          <div class='form-group'>
             <label>Email</label>
             <input type='text' class='form-control' name='email' value='$student->Email'>
          </div>
       </div>
    

       <div class='col-12'>
          <button type='submit' class='btn btn-primary' onClick='collect_data(event)'>Submit</button>
       </div>
    </div>
 </form>";


 $info->massege =$mydata;
$info->data_type ="edit_student";
echo json_encode($info);
die;
}









    // if(empty($data_object->password)){
    //     $error .="The password  is empty <br>";
    // }
    // if(empty($data_object->username)){
    //     $error .="The username is empty <br>";
    // }
    
    // if($error ==""){
    //     $data['user_id']=$_SESSION['user']->user_id;
    //     $data['username']=$data_object->username;
    //     $data['password']=$data_object->password;
    
    //     $query = "update  user set username=:username,password=:password where user_id =:user_id";
    //     $result = $db->write($query,$data);
    
    
    //     if($result){
    //         $info->massege ="Your profile is updated successfully!";
    //         $info->data_type ="info";
    //         echo json_encode($info);
    //     }
    // }else{
    //     $info->massege =$error;
    //     $info->data_type ="error";
    //     echo json_encode($info);
    // }
    