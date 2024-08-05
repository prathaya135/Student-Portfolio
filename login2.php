<?php
    // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $servername = "localhost";
        $username = "root";
        $database = "stuinfo";
        $passerver = "";

        $conn = mysqli_connect($servername, $username, $passerver, $database);

        if (!$conn) {
            die("failed" . mysqli_connect_error());
        } else {
            //echo "successful";
            $sql = "INSERT INTO `detection` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                //echo "successfull";
                echo "<script>alert('Successful'); location.href='login.php';</script>";
                //header("location:login.php");

            } else {
                echo "<script>alert('Not Successful'); location.href='login.php';</script>";
            }
        }

    // }
?>
