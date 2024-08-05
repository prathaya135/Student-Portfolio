<?php
  $login=false;
  $showError=false;
      // if ($_SERVER['REQUEST_method'] == 'POST') {
          // $name=$_POST['name'];
          $email=$_POST['email'];
          $number=$_POST['number'];
          // $password=$_POST['password'];
  
          $servername="localhost";
          $username="root";
          $database="stuinfo";
          $passerver="";
  
          $conn=mysqli_connect($servername,$username,$passerver,$database);
          // include('C:\xampp\htdocs\pbl2\in.php');
          if (!$conn) {
              die("failed".mysqli_connect_error());
          }else {
              // echo "successful";
              $sql="update detection set contact='$number' where email='$email'";
              $result= mysqli_query($conn,$sql);
            //   $num=mysqli_num_rows($result);
            //   if ($num==1) {
                  // $login=true;
                  // echo "prathamesh";
                  header("location:tophome2.html");
            //   }
          }
?>