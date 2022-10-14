<?php
$insert = false;
include "index.html";

$servername = "localhost";
$username = "root";
$password = "";
$database = "login";

// create a connection 
$conn = mysqli_connect ("$servername" , "$username" , "$password" ,"$database");

if(!$conn){
    die("sorry the connection was not succwessfully made");
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sql = "INSERT INTO `info` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";
    $result = mysqli_query($conn , $sql);
    if($result){
      $insert = true;
  }
  else{
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
      <strong>Sorry!</strong> Your record is not inserted.
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
      </button>
    </div>";
  }
 
  
  }
?>

<?php
 if($insert){

    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <strong>Successfully!</strong> Your Record Has Been Inserted.
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
    </button>
  </div>";
}

  
?>