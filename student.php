<?php

include("_includes/config.inc");
include("_includes/dbconnect.inc");
include("_includes/functions.inc");


// check logged in
if (isset($_SESSION['id'])) {

    if(isset($_POST['student'])){
      $students = $_POST['student'];
      echo "<br>";
      for($i = 0; $i < sizeof($students);$i++){

        $query = "DELETE FROM `student` WHERE studentid={$students[$i]};";
        if (!mysqli_query($conn, $query)) {
             echo "Error deleting record: " . mysqli_error($conn);
          }
      }
    }


   echo template("templates/partials/header.php");
   echo template("templates/partials/nav.php");

   $sql = "select * from student;";
   $result = mysqli_query($conn,$sql);

   echo "<div class='col-md-2 col-md-offset-5'>";
   echo "<table class='table'>";
   echo "<tr>";
   echo "<th>*</th><th>Firstname</th> <th>Lastname</th> <th>House</th> <th>Town</th> <th>County</th> <th>Country</th> <th>Postcode</th>";
   echo "<form action='student.php' method='post'>";
   while($row = mysqli_fetch_assoc($result))
   {
     echo "<tr>";
     echo "<td> <input type='checkbox' name='student[]' value='{$row['studentid']}'> </td>";
     echo "<td>{$row['firstname']}</td>";
     echo "<td>{$row['lastname']}</td>";
     echo "<td>{$row['house']}</td>";
     echo "<td>{$row['town']}</td>";
     echo "<td>{$row['county']}</td>";
     echo "<td>{$row['country']}</td>";
     echo "<td>{$row['postcode']}</td>";
     echo "</tr>";
   }

   echo "</table>";
   echo "<input type='submit' class='btn btn-dark' value='Delete'>";
    echo "</form>";
    echo "</div>";


}
else{
  echo "You do not have access to this place man. Please <a href='index.php'>login</a> or go away";
}
?>
