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
  $sql1="select name,university,designation,country,branch,year,DOB,cgpa1,cgpa2,cgpa3,cgpa4,filename,contact,email,skills,address from detection where email='$email'";
  $result1=$conn->query($sql1);
  if($result->num_rows==1){
    if ($rows=$result1->fetch_assoc()) {
    
ob_end_clean();
require('fpdf185/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
class PDF extends FPDF {
  
    // Page header
    function Header() {
          
        $this->SetFont('Arial','B',20);
        
        $this->Cell(80);
        
        // Header
        $this->Cell(50,20,'PORTFOLIO',1,0,'C');
        
        // Line break
        $this->Ln(20);
    }
  
    function Footer() {
          
        $this->SetY(-15);
          
        $this->SetFont('Arial','I',8);
          
        $this->Cell(0,10,'Page ' . 
            $this->PageNo() . '/{nb}',0,0,'C');
    }
}
  
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',14);
$pdf->Cell(0, 10, ' ' 
            , 0, 1);
$pdf->Cell(0, 10, '-----------------------------------------------------------------------------------------------------------------', 0, 1,'L');

$pdf->Cell(0, 10, '  NAME  : ' 
            . $rows['name'], 0, 1,'L');
$pdf->Cell(0, 10, '-----------------------------------------------------------------------------------------------------------------', 0, 1,'L');
$pdf->Cell(0, 10, '   '.$rows['designation'].' Student' , 0, 1,'L');
$pdf->Cell(0, 10, '   Contact no : ' 
            . $rows['contact'], 0, 1,'L');
$pdf->Cell(0, 10, '   Email : ' 
            . $rows['email'], 0, 1,'L');

$pdf->Cell(0, 10, '-----------------------------------------------------------------------------------------------------------------', 0, 1,'L');
$pdf->Cell(0, 10, '   EDUCATION : ' , 0, 1,'L');
$pdf->Cell(0, 10, '            UNIVERSITY : ' 
            . $rows['university'], 0, 1,'L');
$pdf->Cell(0, 10, '            BRANCH : ' 
            . $rows['branch'], 0, 1,'L');   
$pdf->Cell(0, 10, '            YEAR : ' 
            . $rows['year'], 0, 1,'L');
$pdf->Cell(0, 10, '            CGPA of 1st year : ' 
            . $rows['cgpa1'], 0, 1,'L');
$pdf->Cell(0, 10, '            CGPA of 2nd year : ' 
            . $rows['cgpa2'], 0, 1,'L');
$pdf->Cell(0, 10, '            CGPA of 3rd year : ' 
            . $rows['cgpa3'], 0, 1,'L');
$pdf->Cell(0, 10, '            CGPA of 4rth year : ' 
            . $rows['cgpa4'], 0, 1,'L');
$pdf->Cell(0, 10, '-----------------------------------------------------------------------------------------------------------------', 0, 1,'L');

$pdf->Cell(0, 10, '   PERSONAL DETAILS : ', 0, 1,'L');         
$pdf->Cell(0, 10, '            COUNTRY  : ' 
            . $rows['country'], 0, 1,'L');
$pdf->Cell(0, 10, '            ADDRESS  : ' 
            . $rows['address'], 0, 1,'L');             
$pdf->Cell(0, 10, '            DATE-OF-BIRTH : ' 
            . $rows['DOB'], 0, 1,'L');
$pdf->Cell(0, 10, '-----------------------------------------------------------------------------------------------------------------', 0, 1,'L');
$pdf->Cell(0, 10, '   SKILLS : '.$rows['skills'], 0, 1,'L');  
$pdf->Cell(0, 10, '-----------------------------------------------------------------------------------------------------------------', 0, 1,'L');


$pdf->Output();
  
    }
}
  
?>