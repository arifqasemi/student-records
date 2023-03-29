<?php
$student_id=$data_object->studentId;
$query = "DELETE FROM students where '$student_id' limit 1";
        $result = $db->write($query,[]);