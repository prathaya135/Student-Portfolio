<?php
$login=false;
$showError=false;
    // if ($_SERVER['REQUEST_method'] == 'POST') {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];

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
            $sql="Select * from detection where email='$email' AND password='$password'";
            $result= mysqli_query($conn,$sql);
            $num=mysqli_num_rows($result);
            if ($num==1) {
                // $login=true;
                // echo "prathamesh";
                echo "<script>alert('Succesful'); location.href='tophome.php';</script>";
               // header("location:tophome.php");
            }
            else {
                $showError="Invalid";
                // echo "prathamesh";
                echo "<script>alert('Unvalid Credential'); location.href='login.html';</script>";
               // header("location:login.html");
            }
        }

    // }
?>