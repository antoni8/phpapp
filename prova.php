<?php
    // $db = new mysqli('appsbeta.hmanacor.org','amatamalas','admin21','prova');
    // //check if there is any problem to connect to the data base
    // if ($db->connect_errno != null) {
    //   echo "An unexpected error happened.</br> Error number $db->connect_errno when conneting to the database.</br> Error message: $db->connect_error ";
    //   exit();
    // }else{
    //   //check if the plate already exist in the table cars as is a primary key
    //   $query_select="select * from cars";
    //   //echo "query_select $query_select</br>";
    //   $result_select = $db->query($query_select);
    //   //connection has to be closed()
    //   $db->close();
    // }
//   $cars= array (
//   array("Volvo",22,18),
//   array("BMW",15,13),
//   array("Saab",5,2),
//   array("Land Rover", 17)
// );
$cars["title"]= array("Volvo","BMW");
$cars["hola"]= array(123456, 9987654);

// var_dump($cars);
// echo "<br>";
// var_dump($cars["title"]);
// echo "<br>";
// echo $cars["title"]["0"];

$json_cars = json_encode($cars);

$handler = fopen("./cars.json", "w+");
fwrite($handler, $json_cars);
fclose($handler);

header("Location: ./cars.json");
?>