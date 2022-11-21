<?php
    if(isset($_POST["submit"]))
    {
   $fname=$_POST['fname'];
   $lname=$_POST['lname'];
   $dob=$_POST['DOB'];
   $gender=$_POST['r1'];
   $select=$_POST['s1'];

   
   $filenameimg = $fname.$lname.$dob.$gender.$select.".jpeg";
   $filenamepdf = $fname.$lname.$dob.$gender.$select.".pdf";

   $fileimg = $_FILES["fileToUpload"]["tmp_name"];
   $filepdf = $_FILES["docToUpload"]["tmp_name"];

   $folderimg = "./images/".$filenameimg;

  
   $folderpdf = "./documents/".$filenamepdf;
   
   if(move_uploaded_file($fileimg, $folderimg) &&  move_uploaded_file($filepdf, $folderpdf)){
    echo "<script>alert('Document Uploaded !!!')</script>";
   }

   $proof=$_POST['s1'];
   echo "<img src='".$folderimg."' width='150px' height='150px'";
echo " <br><br> First Name : ".$fname."<br>";
echo "Last Name : ".$lname." <br>";
echo "DOB: ".$dob." <br>";
echo  "Gender: ".$gender. "<br>";
echo "I'D Proof: ".$select."<br>";
echo "<a href='".$folderpdf."' download>Download</a>";
    }
?>
<html>
  <head>
    <title></title>
  </head>
</html>