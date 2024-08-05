<?php
if (isset($_FILES['filenameA'])) {
  echo "<pre>";
  print_r($_FILES);
  echo "</pre>";
  
  $file_nameA=$_FILES['filenameA']['name'];
  $file_sizeA=$_FILES['filenameA']['size'];
  $file_tmpA=$_FILES['filenameA']['tmp_name'];
  $file_typeA=$_FILES['filenameA']['type'];

  move_uploaded_file($file_tmpA,"profilephoto/".$file_nameA);
}

if (isset($_FILES['filename1'])) {
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";
    
    $file_name1=$_FILES['filename1']['name'];
    $file_size1=$_FILES['filename1']['size'];
    $file_tmp1=$_FILES['filename1']['tmp_name'];
    $file_type1=$_FILES['filename1']['type'];
  
    move_uploaded_file($file_tmp1,"upload1/".$file_name1);
  }

  if (isset($_FILES['filename2'])) {
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";
    
    $file_name2=$_FILES['filename2']['name'];
    $file_size2=$_FILES['filename2']['size'];
    $file_tmp2=$_FILES['filename2']['tmp_name'];
    $file_type2=$_FILES['filename2']['type'];
  
    move_uploaded_file($file_tmp2,"upload2/".$file_name2);
  }


  if (isset($_FILES['filename3'])) {
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";
    
    $file_name3=$_FILES['filename3']['name'];
    $file_size3=$_FILES['filename3']['size'];
    $file_tmp3=$_FILES['filename3']['tmp_name'];
    $file_type3=$_FILES['filename3']['type'];
  
    move_uploaded_file($file_tmp3,"upload3/".$file_name3);
  }



  if (isset($_FILES['filename4'])) {
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";
    
    $file_name4=$_FILES['filename4']['name'];
    $file_size4=$_FILES['filename4']['size'];
    $file_tmp4=$_FILES['filename4']['tmp_name'];
    $file_type4=$_FILES['filename4']['type'];
  
    move_uploaded_file($file_tmp4,"upload4/".$file_name4);
  }


    $email=$_POST['email'];
    $servername="localhost";
    $username="root";
    $database="stuinfo";
    $passerver="";

    $conn=mysqli_connect($servername,$username,$passerver,$database);

        if (!$conn) {
            die("failed".mysqli_connect_error());
        }else {
            // echo "successful";
            $sql="UPDATE detection set filename='$file_nameA',certi1='$file_name1',certi2='$file_name2',certi3='$file_name3',certi4='$file_name4' where email='$email'";
            $result= mysqli_query($conn,$sql);
            header("location:tophome4.html");
        }
?>