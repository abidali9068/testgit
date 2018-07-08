<?php 
cool masterhai 
// Connect to database
COOL Brnachhai
 include("../connection.php");
 $db = new dbObj();
 $connection =  $db->getConnstring();
 
 $request_method=$_SERVER["REQUEST_METHOD"];


 switch($request_method)
 {
 case 'GET':
 // Retrive Products
 if(!empty($_GET["id"]))
 {
 $id=intval($_GET["id"]);
 get_employees($id);
 }
 else
 {
 get_employees();
 }
 break;
 default:
 // Invalid Request Method
 header("HTTP/1.0 405 Method Not Allowed");
 break;
 }

function get_employees()
 {
 global $connection;
 $query="SELECT * FROM employee";
 $response=array();
 $result=mysqli_query($connection, $query);
 while($row=mysqli_fetch_array($result))
 {
 $response[]=$row;
 }
 header('Content-Type: application/json');
 echo json_encode($response);
 }


?>

