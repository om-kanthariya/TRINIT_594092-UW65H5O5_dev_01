<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "basicdemo1";
  $conn = mysqli_connect($servername , $username , $password, $database);
  
  if(!$conn)
  {
      die("connnection error :".mysqli_connect_error());
    }
    else{
        echo "Connection was successful <br/>";
    }
    
    
    if(isset($_POST['submit']))
    {
        echo $_POST['name'];
        echo $_POST['mobile_no'];
        echo $_POST['email'];
        echo $_POST['profession'];
        echo $_POST['case_number'];
        echo $_POST['Alt_number'];
        echo $_POST['address'];
    }
    
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $mobile_no= mysqli_real_escape_string($conn,$_POST[' mobile_no']);
    $email = mysqli_real_escape_string($conn,$_POST[' email']);
    $profession = mysqli_real_escape_string($conn,$_POST[' profession']);
    $case_number = mysqli_real_escape_string($conn,$_POST[' case_number']);
    $Alt_number = mysqli_real_escape_string($conn,$_POST[' Alt_number']);
    $address = mysqli_real_escape_string($conn,$_POST[' address']);
    
    $sql = "INSERT INTO table1 (name, mobile_no ,email,profession,case_number,alt_number,address) VALUES ($name,$mobile_no ,$email,$profession,$case_number,$Alt_number,$address)";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      
      $conn->close();
    // $result = mysqli_query($conn,$sql);
    // if( mysqli_query($conn,$sql))

?>