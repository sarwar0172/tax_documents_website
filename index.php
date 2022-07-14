<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
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

    <!-- css for home page -->
    <link rel="stylesheet" href="home2.css" />
  </head>
  <body>
    <!--======= heading========= -->
    <header class="home_header">
      <div class="home_header_div1"><p>CALL US FOR FREE CONSULTATION</p></div>
      <div class="home_header_right_parent">
        <div class="home_header_right">
          <div class="home_header_div3">
            <i class="fa-solid fa-phone"></i>
            <p> 905 399 7052</p>
          </div>
          <div class="home_header_div4">
            <i class="fa-solid fa-envelope"></i>
            <p>exontax@gmail.com</p>
          </div>
        </div>
      </div>
    </header>
    <!--===== navbar ==========-->
    <nav class="home_navbar">
      <div class="home_navbar_title">
        <img src="./img/Exon Tax.png" alt="" />
      </div>
      <!-- three line -->
      <a href="#" class="toggle_button">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </a>
      <div class="home_navbar_links">
        <ul>
          <li class="li_1"><a href="./index.php">HOME</a></li>
          <li class="li_2"><a href="./About/about.php">ABOUT</a></li>
          <li class="li_3"><a href="./services/service.php">SERVICES</a></li>
          <li class="li_4"><a href="./documentation/documentation.php">DOCUMENTATION</a></li>
          <li class="li_5"><a href="./uplod_documents/upload_document.php">UPLOAD DOCUMENTS</a></li>
          <li class="li_6"><a href="./contactus/contact.php">CONTACT US</a></li>
        </ul>
      </div>
    </nav>

    <!--============= section1============== -->

    <section class="home_section1">
      <div
        id="carouselExampleIndicators"
        class="carousel slide"
        data-bs-ride="carousel"
      >
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          
        </div>
        <div class="carousel-inner">
          <!-- <div class="carousel-item active">
      <img src="./img/home_s1_img1.jpg" class="d-block w-100" alt="...">
      <h1 class="home_s1_img1_heading">BOOK AN APPOINTMENT </h1>
      <p class="home_s1_img1_sub_heading">Our firm is ready to help you with your personal taxes at the cheapest rate </p>
      <a href="">click here</a>
    </div> -->
          <div class="carousel-item active">
            <img src="./img/home_s1_imge2.jpg" class="d-block w-100" alt="..." />
            <h1 class="home_s1_img2_heading">Schedule a consultation with our expert tax professionals.</h1>
            <p class="home_s2_img2_sub_heading">
              Book a free consultation cl to speak about your tax needs
            </p>
            <a href="">click here</a>
          </div>
          <div class="carousel-item">
            <img src="./img/home_s1_imge1.jpg" class="d-block w-100" alt="..." />
            <h1 class="home_s1_img3_heading">
              Focus on your business growth with peace of mind. Let us manage your tax matters with years of experienc.
            </h1>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

    <!--=================== section 2 ==================-->
    <section class="home_section2">
      <h2 class="home_s2_heading">OUR SERVICES</h2>
      <div class="home_s2_boxes">
        <div class="home_s2_box">
          <div class="home_s2_box_icon">
            <i class="fa-solid fa-clipboard-check"></i>
          </div>
          <div class="home_s2_box_description">
            <h4>PERSONAL INCOME TAX</h4>
            <p>
              Our firm has extensive expertise in personal taxation to ensure
              accurate and timely filing while maximizing all eligible
              deductions.
            </p>
          </div>
        </div>
        <div class="home_s2_box">
          <div class="home_s2_box_icon">
            <i class="fa-solid fa-desktop"></i>
          </div>

          <div class="home_s2_box_description">
            <h4>CORPORATE INCOME TAX</h4>
            <p>
              Our firm has one goal in mind and that is save you money by
              mitigating the taxes you pay on your corporate earnings.
            </p>
          </div>
        </div>
        <div class="home_s2_box">
          <div class="home_s2_box_icon">
            <i class="fa-solid fa-book"></i>
          </div>
          <div class="home_s2_box_description">
            <h4>ACCOUNTING AND BOOKKEEPING</h4>
            <p>
              Let us take over the Bookkeeping of your company so you can focus
              on your customers and building your business.
            </p>
          </div>
        </div>
        <div class="home_s2_box">
          <div class="home_s2_box_icon">
            <i class="fa-solid fa-dollar-sign"></i>
          </div>
          <div class="home_s2_box_description">
            <h4>Business registration and incorporation</h4>
            <p>
              Let our firm review your small business and give you the right
              Business registration and incorporation.
              answer which will help with business registration and incorporation
              
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- section 3 -->
    <section class="home_section3">
      <div class="home_s3_boxes">
        <div class="home_s3_box">
          <div class="home_s3_parentage"><span class="s3_n1">0</span>%</div>
          <div class="home_s3_footer">Employee Satisfaction Rate</div>
        </div>
        <div class="home_s3_box">
          <div class="home_s3_parentage"><span class="s3_n2">94</span>%</div>
          <div class="home_s3_footer">Clients Satisfaction Rate</div>
        </div>
        <div class="home_s3_box">
          <div class="home_s3_parentage"><span class="s3_n3">85</span>%</div>
          <div class="home_s3_footer">Clients Retention Rate</div>
        </div>
        <div class="home_s3_box">
          <div class="home_s3_parentage"><span class="s3_n4">87</span>%</div>
          <div class="home_s3_footer">Referral Rate</div>
        </div>
      </div>
    </section>

    <!-- =========section4 ===========-->
    <section class="section4">
      <div class="home_s4_boxes">
        <div class="home_s4_box1">
          <h3>TEAM OF PROFESSIONALS</h3>
          <p>
            We are a team of professional who believes in excellence on service.
          </p>
        </div>
        <div class="home_s4_box2">
          <h3>COMMITMENT TO ACCURACY</h3>
          <p>We ensure that the service we provide is complete and accurate.</p>
        </div>
        <div class="home_s4_box3">
          <h3>STEP BY STEP GUIDANCE</h3>
          <p>
            We are on your team, and by your side, always. You can count on us.
          </p>
        </div>
      </div>
    </section>

    <!--========= section 5============= -->
    <section class="home_section5">
      <div class="home_s5_heading">
        <h1>Clients Testimonials</h1>
      </div>

      <div
        id="carouselExampleControls"
        class="carousel slide"
        data-bs-ride="carousel"
      >
        <div class="carousel-inner">
          <div class="carousel-item active">
            <p>
              Filing taxes was something I was dreading, especially when moving
              to a new country. But with the help of Rani, this process was
              completely headache-free. She is very professional and friendly,
              and the services offered are spectacular. She answered all the
              questions I had about my specific taxes and tax policy in general.
              Great and easy filing service that I have been using for the last
              three years, and will continue to use. Recommend highly.
            </p>
            <h2>Sarathchand</h2>
          </div>
          <div class="carousel-item">
            <p>
              This was the first time I was filing taxes in Canada since I moved
              from India 3 years ago and filing taxes was so confusing and
              stressful. I had help from my Tax Expert – Ms. Devinder. She made
              things so smooth and easy that it felt like it was just a cake
              walk of getting tax filed and return out of it. Thanks a lot Mam!!
            </p>
            <h2>Amit Maheshwari</h2>
          </div>
          <div class="carousel-item">
            <p>
              This is my 3rd year with Paragon accounting and Finance Inc. I
              never been impressed with such a service. Friendly and
              professional approach. Throughout the year, you can contact them
              for any tax advice or support. I would really like to keep the
              relationship with them and definitely will recommend to my
              friends.
            </p>
            <h2>Amit Maheshwari</h2>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleControls"
          data-bs-slide="prev"
        >
          <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
          <i
            class="fa-solid fa-circle-arrow-left carousel-control"
            aria-hidden="true"
          ></i>
          <!-- <span class="visually-hidden">Previous</span> -->
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleControls"
          data-bs-slide="next"
        >
          <i
            class="fa-solid fa-circle-arrow-right carousel-control"
            aria-hidden="true"
          ></i>
        </button>
      </div>
    </section>

    <!-- =======section6======= -->
    <section class="home_section6">
      <div class="home_s6_heading">
        <h1>Let’s talk! Consultation is free</h1>
      </div>
      <div class="home_s6_boxes">
        <div class="home_s6_box1">
          <div class="home_s6_box1_heading">
            <h2>CONTACT DETAILS</h2>
            <p>
              We are here to help you 7 days a week and respond within 24 hours.
              Plus, you can find most answers to your questions just message us.
            </p>
          </div>
          <div class="home_s6_box1_contact">
            <div class="home_s6_box1_phone">
              <i class="fa-solid fa-phone"></i><span>647 236 0508</span>
            </div>
            <div class="home_s6_box1_phone">
              <i class="fa-solid fa-phone"></i><span>905 399 7052</span>
            </div>
            <div class="home_s6_box1_location">
              <i class="fa-solid fa-location-dot"></i>
              <p> Office Address:14 Torrance Woods, Brampton, Ontario L6Y2N3</p>
            </div>
            <div class="home_s6_box1_location">
              <i class="fa-solid fa-location-dot"></i>
              <p>
                Office Address:507 Molinari Street, Sarnia, Ontario N7W 0B1
              </p>
            </div>
          </div>
        </div>
        <div class="home_s6_box2">
          <h2>Email us</h2>
          <form action="" class="home_s6_massageSent">
            <p>Your Name *</p>
            <input class="name" type="text" />

            <p>Your Email*</p>
            <input class="email" type="text" />

            <p>Your Number*</p>
            <input class="number" type="text" />

            <p>Subject*</p>
            <input type="text" />

            <p>Message</p>
            <textarea name="" id="" rows="5"></textarea><br><br>

            <a href="#" type="submit" name="submit" class="submit">submit</a>
          </form>
        </div>
      </div>
    </section>


    <!-- =======footer========= -->

    <footer class="home_footer">
      <div class="home_footer_main">
        <div class="home_footer_div1">
          <div class="subdiv1">
            <img src="./img/Exon Tax.png" alt="" />
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
        <div class="home_footer_div2">
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
        <div class="home_footer_div3">
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

  <script src="home.js"></script>
  <!-- bootstrap -->
  <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"
  ></script>
</html>
