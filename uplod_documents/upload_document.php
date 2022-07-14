<?php

include 'connection.php';

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $address=$_POST['address'];
  $city=$_POST['city'];
  $zip=$_POST['zip'];
  $birth_date=$_POST['birth_date'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];


  $sql="insert into `user_info` (name ,address,City,zip,Date_of_birth,Phone,Email)
  values('$name','$address','$city','$zip','$birth_date','$phone','$email')";


$result=mysqli_query($con,$sql);
if($result){
      ?>
<!-- <script>
    alert('document successfully submitted');
</script> -->

<?php
    }else{
      die(mysqli_error($con));
    }

}


if(isset($_FILES['file'])){
   $file_name=$_FILES['file']['name'];
   $file_name=preg_replace("/\s+/","_",$file_name);
   $file_size=$_FILES['file']['size'];
   $file_temp=$_FILES['file']['tmp_name'];
   $file_type=$_FILES['file']['type'];
   
 $file_ext=pathinfo($file_name,PATHINFO_EXTENSION);
  $file_name=pathinfo($file_name,PATHINFO_FILENAME);
$file_name="[$name]".$file_name.".".$file_ext;
  if(move_uploaded_file($file_temp,"uploaded_files/".$file_name)){
  ?>
<script>
    alert('document successfully submitted');
</script>

<?php
  }else{
    echo "file could not uploaded";
  };
 
}


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload documents</title>
      <!-- font awesome  -->
    <script
      src="https://kit.fontawesome.com/8ed3007ab6.js"
      crossorigin="anonymous"
    ></script>

    <link rel="stylesheet" href="upload_documents.css">
</head>
<body>
      <!--======= heading========= -->
    <header class="up_doc_header">
      <div class="up_doc_header_div1"><p>CALL US FOR FREE CONSULTATION</p></div>
      <div class="up_doc_header_right_parent">
        <div class="up_doc_header_right">
          <div class="up_doc_header_div3">
            <i class="fa-solid fa-phone"></i>
            <p> 905 399 7052</p>
          </div>
          <div class="up_doc_header_div4">
            <i class="fa-solid fa-envelope"></i>
            <p>exontax@gmail.com</p>
          </div>
        </div>
      </div>
    </header>
    <!--===== navbar ==========-->
    <nav class="up_doc_navbar">
      <div class="up_doc_navbar_title">
        <img src="./img/Exon Tax.png" alt="" />
      </div>
      <!-- three line -->
      <a href="#" class="toggle_button">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </a>
      <div class="up_doc_navbar_links">
        <ul>
          <li class="li_1"><a href="../index.php">HOME</a></li>
          <li class="li_2"><a href="../About/about.php">ABOUT</a></li>
          <li class="li_3"><a href="../services/service.php">SERVICES</a></li>
          <li class="li_4"><a href="../documentation/documentation.php">DOCUMENTATION</a></li>
          <li class="li_5"><a href="./upload_document.php">UPLOAD DOCUMENTS</a></li>
          <li class="li_6"><a href="../contactus/contact.php">CONTACT US</a></li>
        </ul>
      </div>
    </nav>


  <!-- section1 -->
  <section class="up_doc_section1">
         <h1>Upload your documents</h1>
  </section>

  <!-- section2-->
  <Section class="up_doc_section2">
    <div class="from">
         <form action="" method="POST" enctype="multipart/form-data">
          <p>Name*</p>
          <input type="text" name="name" class="name" required>
          <p>Complete address</p>
          <input type="text" name="address" class="address" required>
          <p>City</p>
          <input type="text" name="city" id="" class="city" required>
          <p>Zip code</p>
          <input type="number" name="zip" class="zip" required>
           <p>Date of birth</p>
           <input type="date" name="birth_date" class="birth_date" required>
           <p>Phone number</p>
           <input type="text" name="phone" class="phone" required>
           <p>Email address</p>
           <input type="email" name="email" class="email" required>
            <p>file attached</p>
           <input type="file" name="file"><br><br>
           <input type="submit" name="submit" class="submit_btn" value="submit">
         </form>
         </div>

        
  </Section>

 
</body>
<script src="./upload_documents.js"></script>
</html>