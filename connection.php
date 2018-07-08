
<?php
Class dbObj{
 /* Database connection start */
 var $servername = "localhost";
  var $servernjjame = "localhost";
 var $username = "root";
 var $password = "";
 var $dbname = "testapi";
 var $conn;
 function getConnstring() {
 $con = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname) or die("Conneb ction failed: " . mysqli_connect_error());
 
 /* check connection */
 if (mysqli_connect_errno()) {
 printf("Connect failed: %s\n", mysqli_connect_error());
 exit();
 } else {
 $this->conn = $con;
 }
 return $this->conn;
 }
}
 
?>