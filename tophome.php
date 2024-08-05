<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <p style="background-image: url('front.jpeg');"> -->
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="tophome4.html">Profile</a>
  <a href="tophome2.html">My Data</a>
  <a href="tophome3.html">user rating</a>
</div>

<div style="padding-left:16px">
  <!-- <h2>Top Navigation Example</h2> -->
  <!-- <p>Some content..</p> -->
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body{
    background-image: url('pro.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
  background-color: #0bac4e;
 
}

.title {
  color: rgb(2, 25, 8);
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<h2 style="text-align:center">Student Profile Card</h2>
<form action="page.php" method="POST">
<div class="card">
  <img src="" alt="" style="width:100%">
  <?php
    $login=false;
    $showError=false;
    // $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    // function my_funct(){
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
                if ($num<1) {
                  $showError="Invalid";
                  header("location:login.html");
                }
            }
      $sql1="select name,university,designation,filename from detection where email='$email'";
      $result1=$conn->query($sql1);
      if($result->num_rows==1){
        if ($rows=$result1->fetch_assoc()) {
        ?>
        <img src="./profilephoto/<?php echo $rows['filename']; ?>" style="width:100%">
        <?php
        echo '<h1>'.$rows["name"].'</h1>
        <p class="title">'.$rows["designation"].'</p>
        <p>'.$rows["university"].'</p>';
        }
      }
      $conn->close();
    // }
    // my_funct();
      
    
?>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <!-- <p><button type="submit">Contact</button></p> -->
</div>
</form>
<!-- </p> -->

</body>
</html>