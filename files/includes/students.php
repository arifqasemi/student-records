<?php
// $id = $_SESSION['user']->user_id;
$mydata="";
  $sqli = "select * from students"; 
  $student = $db->read($sqli,[]);
  if($student){
foreach($student as $row){

  $user = "
  <tr >
   <td>$row->studN</td>
     <td>
     <h2 class='table-avatar'>
        <a href='student-details.html' class='avatar avatar-sm mr-2'><img class='avatar-img rounded-circle' src='assets/img/user_male.jpg' alt='User Image'></a>
        <a href='student-details.html'>$row->Fname</a>
     </h2>
  </td>
  <td>$row->sex</td>
  <td>$row->Email</td>
  <td>$row->status</td>
  <td>".date("jS,m,Y",strtotime($row->DBirth))."</td>
  <td>$row->Address</td>
  <td class='text-right'>
     <div class='actions'>
        <a href='edit-student.html' class='btn btn-sm bg-success-light mr-2'>
        <i class='fas fa-pen' onClick='edit_student($row->studN)'></i>
        </a>
        <a href='' class='btn btn-sm bg-danger-light' onClick='delete_student($row->studN)'>
        <i class='fas fa-trash'></i>
        </a>
     </div>
  </td>
  </tr>
  ";
    $mydata .= $user;
}
  


$info->massege =$mydata;
$info->data_type ="students";
echo json_encode($info);
die;
  }else{
$info->massege ="no students were found";
$info->data_type ="error";
echo json_encode($info);
  }