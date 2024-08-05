<?php
    $login=false;
    $showError=false;
    // $name=$_POST['name'];
    $email=$_POST['email'];
    // $password=$_POST['password'];
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
                $sql="Select * from detection where email='$email'";
                $result= mysqli_query($conn,$sql);
                $num=mysqli_num_rows($result);
                if ($num<1) {
                  $showError="Invalid";
                  // header("location:login.html");
                }
            }
      $sql1="select name,university,designation,country,contact,branch,year,DOB,cgpa1,cgpa2,cgpa3,cgpa4,filename,skills,email,certi1,certi2,certi3,certi4,address from detection where email='$email'";
      $result1=$conn->query($sql1);
      if($result->num_rows==1){
        if ($rows=$result1->fetch_assoc()) {
        // echo '<h2>'.$name.'</h2>';
        echo '<!DOCTYPE html>
        <html>
        <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
          <a class="active" href="tophome.php">Home</a>
          <a href="tophome4.html">Profile</a>
          <a href="#contact">My Data</a>
          <a href="tophome3.html">user rating</a>
        </div>
        
        <div style="padding-left:16px">
        </div>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
        body{
          background-color: #ffffff;
          background-repeat: no-repeat;
          background-attachment: fixed; 
          background-size: 100% 100%;
        }
        img {
          border-radius: 50%;
          text-align: center;
        }
        .card{
          margin-top: 24px
        }
        .scroll-container {
          width: 350px;
          height: 350px;
          overflow-y: scroll;
          scroll-behavior: smooth;
          border-radius: 20px;
        }
        .scroll-page {
          display: flex;
          align-items: center;
          justify-content: center;
          height: 100%;
          font-size: 50;
        }
        .container {
                  border-radius: 5px;
                  background-color: #f2f2f2;
                  padding: 20px;
                  /*text-align: center;*/
        }
        </style>
        </head>
        <div style="margin-left: 24px" class="card">
            <div class="container">
                <img src="./profilephoto/'.$rows['filename'].'" style="width:15%">    
                <h2>--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</h2>
                 <h1 style="text-decoration: underline;">'.$rows["name"].'</h1>
                 <h2>--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</h2>
                <br>
                <h3><i><p class="title">'.$rows["designation"].' Student</p></i></h3>
                <h3><i><p class="title">contact no : '.$rows["contact"].'</p></i></h3>
                <h3><i><p class="title">Email : '.$rows["email"].'</p></i></h3>
                <br>
                <h2>--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</h2>

                <h2>Education:</h2>
                <ul>
                <h3 style="margin-left: 90px"><li>University : '.$rows["university"].'</li></h3>
                <h3 style="margin-left: 90px"><li>Branch : '.$rows["branch"].'</h3></li></h3>
                <h3 style="margin-left: 90px"><li>Year : '.$rows["year"].'</h3></li></h3>
                <h3 style="margin-left: 90px"><li>CGPA of 1st year : '.$rows["cgpa1"].'</li></h3>
                <h3 style="margin-left: 90px"><li>CGPA of 2nd year : '.$rows["cgpa2"].'</li></h3>
                <h3 style="margin-left: 90px"><li>CGPA of 3rd year : '.$rows["cgpa3"].'</li></h3>
                <h3 style="margin-left: 90px"><li>CGPA of 4rth year : '.$rows["cgpa4"].'</li></h3>
                </ul>
                <br>
                <h2>--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</h2>

                <h2>Personal Details:</h2>
                <ul>
                <h3 style="margin-left: 90px"><li><p>Date-Of-Birth : '.$rows["DOB"].'</p></li></h3>
                <h3 style="margin-left: 90px"><li><p>Country : '.$rows["country"].'</p></li></h3>
                <h3 style="margin-left: 90px"><li><p>Address : '.$rows["address"].'</p></li></h3>
                </ul>
                <br>
                <h2>--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</h2>

                <h2>Skills : </h2>
                <ul>
                <h3 style="margin-left: 90px"><li><p> '.$rows["skills"].'</p></li></h3>
                </ul>
                <h2>--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</h2>
                <h2>Uploaded Certificates : </h2>
   
                  <img src="./upload1/'.$rows['certi1'].'" style="width:15%">
                  
                  <img src="./upload2/'.$rows['certi2'].'" style="width:15%">
                  
                  <img src="./upload3/'.$rows['certi3'].'" style="width:15%">
                 
                  <img src="./upload4/'.$rows['certi4'].'" style="width:15%">
             
                <h2>--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</h2>
            </div>
            <h2 style="text-align: center"><a href="#"><i class="fa fa-dribbble"></i></a> 
            <a href="#"><i class="fa fa-twitter"></i></a>  
            <a href="#"><i class="fa fa-linkedin"></i></a>  
            <a href="#"><i class="fa fa-facebook"></i></a> 
            </h2>
          </div>
        
        </body>
        </html>';
        }
      }
      $conn->close();
    
?>