<?php

include("_includes/config.inc");
include("_includes/dbconnect.inc");
include("_includes/functions.inc");
include "_includes/passwordLib.php";


// check logged in
if (isset($_SESSION['id'])) {


  if(isset($_POST['Student'])){
    $list = $_POST['Student'];
    $password = password_hash($list[1], PASSWORD_DEFAULT);
    $query = "INSERT INTO `student`(`studentid`, `password`, `dob`, `firstname`, `lastname`, `house`, `town`, `county`, `country`, `postcode`)
    VALUES ('$list[0]','$password','$list[2]','$list[3]','$list[4]','$list[5]','$list[6]','$list[7]','$list[8]','$list[9]')";
    if(!mysqli_query($conn, $query)){
      echo mysqli_error($conn);
    }
  }

   echo template("templates/partials/header.php");
   echo template("templates/partials/nav.php");

echo '<div class="col-md-2 col-md-offset-5" style="margin-left:40%"><form action ="addstudent.php" method="post">
    <table class="table center">
      <tr><td>Student ID: </td><td><input type="text" name="Student[]"></td></tr>
      <tr><td>Password: </td><td><input type="password" name="Student[]"></td></tr>
      <tr><td>DOB: </td><td><input type="date" name="Student[]"></td></tr>
      <tr><td>Firstname: </td><td><input type="text" name="Student[]"></td></tr>
      <tr><td>Lastname: </td><td><input type="text" name="Student[]"></td></tr>
      <tr><td>House: </td><td><input type="text" name="Student[]"></td></tr>
      <tr><td>Town: </td><td><input type="text" name="Student[]"></td></tr>
      <tr><td>County: </td><td><input type="text" name="Student[]"></td></tr>
      <tr><td>Country: </td><td><input type="text" name="Student[]"></td></tr>
      <tr><td>Postcode:  </td><td><input type="text" name="Student[]"></td></tr>
      <tr><td><input class="btn btn-dark" type="submit" value="Add Student!"></td></tr>
    </table>
  </form></div>
  ';

}
else{
  echo "You do not have access to this place man. Please <a href='index.php'>login</a> or go away";
}
?>
