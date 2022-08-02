<?php

if(isset($_POST['submit'])){
  $server = "localhost";
  $username = "root";
  $password = "";
  $dbname = "employee";

  $con = mysqlii_connect($server,$username,$password,$dbname);
  
  if($insert == true){
  echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the US trip</p>";
  }
  
  else(!$con){
    die("connection to this database failed due to ". mysqlii_connect_error());
  }
//   echo "Success Connecting to the database";
$Name = $_POST['Name'];
$Gender = $_POST['Gender'];
$Address = $_POST['Address'];
$Email = $_POST['Email'];
$Pincode = $_POST['Pincode'];
$Location = $_POST['Location'];
$Title = $_POST['Title'];
$Date = $_POST['Date'];
$ctc = $_POST['ctc'];


$sql="INSERT INTO employee( Name, Gender, Address, Email, Pincode, Location, Title, Date, ctc, datesub) VALUES ( '$Name', '$Gender', '$Address', '$Email', '$Pincode', '$Location', '$Title', '$Date', '$ctc', current_timestamp());";
echo $sql;
// Execute the query
if($con->query($sql) == true){
    // echo "Successfully inserted";

    // Flag for successful insertion
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}

// Close the database connection
$con->close();
}
?>

