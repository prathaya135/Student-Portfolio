<?php
    session_start();
    $email= $_POST['email'];
    $namepass= $_POST['newpass'];

    $servername="localhost";
    $username="root";
    $database="stuinfo";
    $passerver="";

    $conn=mysqli_connect($servername,$username,$passerver,$database);

        if (!$conn) {
            die("failed".mysqli_connect_error());
        }else {
            // echo "successful";
            $sql="UPDATE detection set password ='$namepass' where email='$email'";
            $result= mysqli_query($conn,$sql);
            $_SESSION['status']="data inserted succesfully";
            header("location:login.php");
        }
?>