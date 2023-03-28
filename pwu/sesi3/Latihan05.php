<?php
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    header('Content-type: application/json; charset=UTF-8');
    echo json_encode($age);