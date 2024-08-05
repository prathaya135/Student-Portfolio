<?php
    $name=$_POST['name'];
    $email=$_POST['email'];
    $country=$_POST['country'];
    $branch=$_POST['branch'];
    $year=$_POST['year'];
    $DOB=$_POST['DOB'];
    $university=$_POST['university'];
    $designation=$_POST['designation'];
    $cgpa1=$_POST['cgpa1'];
    $cgpa2=$_POST['cgpa2'];
    $cgpa3=$_POST['cgpa3'];
    $cgpa4=$_POST['cgpa4'];
    $skills=$_POST['skills'];
    $contact=$_POST['contact'];
    $address=$_POST['address'];


    $servername="localhost";
    $username="root";
    $database="stuinfo";
    $passerver="";

    $conn=mysqli_connect($servername,$username,$passerver,$database);

        if (!$conn) {
            die("failed".mysqli_connect_error());
        }else {
            // echo "successful";
            $sql="UPDATE detection set country='$country',branch='$branch',year='$year',DOB='$DOB',university='$university',designation='$designation',cgpa1='$cgpa1',cgpa2='$cgpa2',cgpa3='$cgpa3',cgpa4='$cgpa4',skills='$skills',contact='$contact',address='$address' where email='$email'";
            $result= mysqli_query($conn,$sql);
            header("location:tophome4.html");
        }
?>