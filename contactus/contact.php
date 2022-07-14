<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <!-- font awesome  -->
    <script
      src="https://kit.fontawesome.com/8ed3007ab6.js"
      crossorigin="anonymous"
    ></script>

    <!-- bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!-- Css -->
    <link rel="stylesheet" href="contact.css">
</head>
<body>
      <!--======= heading========= -->
    <header class="contact_header">
      <div class="contact_header_div1"><p>CALL US FOR FREE CONSULTATION</p></div>
      <div class="contact_header_right_parent">
        <div class="contact_header_right">
          <div class="contact_header_div3">
            <i class="fa-solid fa-phone"></i>
            <p> 905 399 7052</p>
          </div>
          <div class="contact_header_div4">
            <i class="fa-solid fa-envelope"></i>
            <p>exontax@gmail.com</p>
          </div>
        </div>
      </div>
    </header>

       <!--===== navbar ==========-->
    <nav class="contact_navbar">
      <div class="contact_navbar_title">
        <img src="./img/Exon Tax.png" alt="" />
      </div>
      <!-- three line -->
      <a href="#" class="toggle_button">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </a>
      <div class="contact_navbar_links">
        <ul>
          <li class="li_1"><a href="../index.php">HOME</a></li>
          <li class="li_2"><a href="../About/about.php">ABOUT</a></li>
          <li class="li_3"><a href="../services/service.php">SERVICES</a></li>
          <li class="li_4"><a href="../documentation/documentation.php">DOCUMENTATION</a></li>
          <li class="li_5"><a href="../uplod_documents/upload_document.php">UPLOAD DOCUMENTS</a></li>
          <li class="li_6"><a href="./contact.php">CONTACT US</a></li>
        </ul>
      </div>
    </nav>

    <!-- section1 -->
    <section class="contact_section1">
        <h1>Contact US</h1>
        <a href="#contact_section2">send a massage</a>
    </section>

    <!-- section2 -->
    <section class="contact_section2"id="contact_section2" >
         <div class="from" >
          <form action="" class="contact_s2_form">
            <p>Your Name*</p>
            <input type="text" name="name">
            <p>Your Email*</p>
            <input type="text" name="email">
            <p>Your Phone Number*</p>
            <input type="text" name="phone">
            <p>Subject*</p>
            <input type="text" name="subject">
            <p>message</p>
            <textarea name="massage" id="" cols="40" rows="5"></textarea> <br><br>
            <button name="submit" class="submit"><a href="">submit</a></button>
          </form>
         </div>
         <div class="contact_details">
           <div>
            <h2>CONTACT DETAILS</h2>
            <p>Paragon accounting has the necessary skill to set up and run an accurate financial accounting system.</p>
           </div>
           <div>
            <h2>General Inquiries​</h2>
            <h3>Address:</h3>
            <p>26 Lafleur Court Brampton, ON L6Y 3L8</p>
           </div>
           <div>
            <h2>Contact us:</h2>
             <p>T:647 236 0508</p>
             <p>T:905 399 7052</p>
           </div>
           <div class="icons">
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-linkedin"></i>
           </div>
         </div>
         
    </section>
</body>
<script src="./contact.js"></script>
</html>