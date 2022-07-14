<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us</title>

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

    <!-- css -->
    <link rel="stylesheet" href="about.css" />
  </head>
  <body>
  <!--======= heading========= -->
    <header class="about_header">
      <div class="about_header_div1"><p>CALL US FOR FREE CONSULTATION</p></div>
      <div class="about_header_right_parent">
        <div class="about_header_right">
          <div class="about_header_div3">
            <i class="fa-solid fa-phone"></i>
            <p> 905 399 7052</p>
          </div>
          <div class="about_header_div4">
            <i class="fa-solid fa-envelope"></i>
            <p>exontax@gmail.com</p>
          </div>
        </div>
      </div>
    </header>

    <!--===== navbar ==========-->
   <nav class="about_navbar">
      <div class="about_navbar_title">
        <img src="./about_img/Exon Tax.png" alt="" />
      </div>
      <!-- three line -->
      <a href="#" class="toggle_button">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </a>
      <div class="about_navbar_links">
        <ul>
          <li class="li_1"><a href="../index.php">HOME</a></li>
          <li class="li_2"><a href="./about.php">ABOUT</a></li>
          <li class="li_3"><a href="../services/service.php">SERVICES</a></li>
          <li class="li_4"><a href="../documentation/documentation.php">DOCUMENTATION</a></li>
          <li class="li_5"><a href="../uplod_documents/upload_document.php">UPLOAD DOCUMENTS</a></li>
          <li class="li_6"><a href="../contactus/contact.php">CONTACT US</a></li>
        </ul>
      </div>
    </nav>

    <!-- section1 -->
    <section class="about_section1">
      <img src="./about_img/about_s1.jpg" alt="" />
      <div class="about_s1_main">
        <h1>ABOUT US</h1>
        <p>
          We are on your team, and by your side, always. You can count on us.
        </p>
      </div>
    </section>

    <!-- section2 -->
    <section class="about_section2">
      <div class="s2_div1">
        <h1>OUR COMPANY</h1>
        <p>
          Paragon is an accounting company that provides personal and corporate
          tax preparation, income tax planning, accounting/bookkeeping and
          incorporate/register a business.
          In tax services, we tend to take a constructive vs. reactive approach. We are able to recognize key tax preparation opportunities that minimize both the current and potential tax liabilities by staying up to date on new tax laws and regulations.
        </p>
       
      </div>
      <div class="s2_div2">
        <h1>OUR MISSION</h1>
        <p>Our mission is to save your precious time and confusion by offering business accounting and bookkeeping services that are reliable, accurate and personalized.
          As your accountant, since we know your financial information is too valuable to get lost in a big accounting firm, we give you personalized attention. We endeavor to continue to provide the highest quality professional service and guidance.
        </p>
      </div>
    </section>

    <section class="about_section3">
      <img src="./about_img/about_s3_img1.jpg" alt="">
      <h1>WHY COSE US</h1>

      <div class="about_s3_main">
         <div class="s3_sub">
          <i class="fa-solid fa-chart-column"></i>
          <p> We always maintain our deadlines</p>
         </div>
         <div class="s3_sub">
          <i class="fa-solid fa-user-group"></i>
            <p>Transparency and personal accountability</p>
         </div>
         <div class="s3_sub">
            <i class="fa-solid fa-handshake-simple"></i>
            <p>Success through partnership</p>
         </div>
         <div class="s3_sub">
          <i class="fa-solid fa-user-group"></i>
            <p>Diversity in our strength</p>
         </div>
      </div>
    </section>

     <footer class="about_footer">
      <div class="about_footer_main">
        <div class="about_footer_div1">
          <div class="subdiv1">
            <img src="./about_img/Exon Tax.png" alt="" />
          </div>
          <div class="subdiv2">
            <p>Office Address: 26 Lafleur Court Brampton, ON L6Y 3L8</p>
          </div>
          <div class="subdiv3">
            <p>Office Address:507 Molinari Street, Sarnia, Ontario N7W 0B1</p>
          </div>
          <div class="subdiv4">
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-linkedin"></i>
            <i class="fa-brands fa-instagram"></i>
          </div>
        </div>
        <div class="about_footer_div2">
          <div class="heading">
              <h2>NAVIGATION</h2>
          </div>

         <div class="footer_div2_subdivs">
           <a href="">Home</a>
           <a href="">About Us</a>
           <a href="">Services</a>
           <a href="">Documentation</a>
           <a href="">Upload Documents</a>
           <a href="">Book an Appointment</a>
           <a href="">Contact Us</a>
         </div>
        </div>
        <div class="about_footer_div3">
          <div class="heading">
            <h2>SERVICES</h2>
          </div>
          <div class="footer_div2_subdivs">
            <a href="">Personal Income Tax</a>
            <a href="">Corporate Income Tax</a>
            <a href="">Accounting/ Bookkeeping</a>
            <a href="">Business registration and incorporation</a>
          </div>
        </div>
      </div>
    </footer>
  </body>
  <script src="about.js"></script>
</html>
