<?php


$result = $db->totalStudent('select * from students');

$info->massege =$result;
$info->data_type ="totalstudents";
echo json_encode($info);