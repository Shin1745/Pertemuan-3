 <?php
 /*
 $cars = array("Volvo","BMW","Toyota");
 */
 $cars[0] = "Volvo";
 $cars[1] = "BMW";
 $cars[2] = "Toyota";
 print_r($cars);

 header('Content-type: application/json; charset=UTF-8');
echo json_encode($cars);
//array associative
$list = array();