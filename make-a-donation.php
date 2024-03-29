<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Westend Hospital | make a donation
        </title>
        <link rel="icon" type="image/x-icon" href="./img/logo/favicon.ico.png"/>
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"/>
        <meta name="description" content=""/>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"/>
        <link rel="stylesheet" href="css/demo.css"/>
        <link rel="stylesheet" href="css/slideshow.css"/>
        <link rel="stylesheet" href="css/slick.css"/>
        <link rel="stylesheet" href="css/slick-theme.css"/>
        <link rel="stylesheet" href="css/style.css"/>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="http://code.jquery.com/jquery-3.1.1.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
        <script src="https://kit.fontawesome.com/12d9de5a0c.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    </head>
    <body>
        <!--header-hero section-->
        <div class="header-hero-container">
            <header
                id="myHeaderMenu">
                <!-----------TOP NAVIGATION------------->
                <div class="topNav">
                    <div class="container flex">
                        <a href="index.php" id="wehLogo">
                            <img src="img/logo/Westend logo blue.png" alt="Westend Hospital Logo"/>
                        </a>
                        <nav class="flex">
                            <div id="navToggler" class="hamburgerMenu" onclick="myFunction(this)">
                                <div class="bar bar1"></div>
                                <div class="bar bar2"></div>
                                <div class="bar bar3"></div>
                            </div>

                            <div class="navbar-links" id="sideNavbar">
                                <ul
                                    class="flex navBar1">
                                    <!--Medical Test & services-->
                                    <li class="dropdown">
                                        <a href="#" class="dropbtn">Medical Test & Services</a>
                                        <ul class="dropdown-content" id="menuDropdown">
                                            <li>
                                                <a href="medical-test-and-services/A-Z-of-all-medical-test.php">A-Z of all Medical Test</a>
                                            </li>
                                            <li>
                                                <a href="medical-test-and-services/A-Z-of-all-medical-services.php">A-Z of all Medical Services</a>
                                            </li>
                                            <li>
                                                <a href="medical-test-and-services/department-and-services.php">Department & Services</a>
                                            </li>
                                            <li>
                                                <a href="medical-test-and-services/patient-education.php">Patient Education</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <!--Patient and visitors-->
                                    <li class="dropdown">
                                        <a href="#" class="dropbtn">Patient & Visitors</a>
                                        <ul class="dropdown-content" id="menuDropdown">
                                            <li>
                                                <a href="patient-and-visitors/vistors.php">Visitors</a>
                                            </li>
                                            <li>
                                                <a href="patient-and-visitors/your-hospital-stay.php">Your Hospital Stay</a>
                                            </li>
                                            <li>
                                                <a href="patient-and-visitors/billing-and-financial-asistance.php">Billing & Financial Asistance</a>
                                            </li>
                                            <li>
                                                <a href="patient-and-visitors/accepted-insurance.php">Accepted Insurance</a>
                                            </li>
                                            <li>
                                                <a href="patient-and-visitors/medical-records.php">Medical Records</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <!--Why choose us-->
                                    <li class="dropdown">
                                        <a href="#" class="dropbtn">Why Choose Us</a>
                                        <ul class="dropdown-content" id="menuDropdown">
                                            <li>
                                                <a href="why-choose-us/our-mission-vision-and-values.php">Our Mission, Vision & Values</a>
                                            </li>
                                            <li>
                                                <a href="why-choose-us/quality-patient-care.php">Quality Patient Care</a>
                                            </li>
                                            <li>
                                                <a href="why-choose-us/patient-stories-testimonies.php">Patient's Stories/Testimonies</a>
                                            </li>
                                            <li>
                                                <a href="why-choose-us/our-team.php">Our Team</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="contact-li">
                                        <a href="contact-us.php" class="contact-us">Contact Us</a>
                                    </li>
                                </ul>
                                <!--navbar2-->
                                <ul class="flex navbar2">
                                    <li>
                                        <a href="map-and-directions.php">Maps & Direction</a>
                                    </li>
                                    <li>
                                        <a href="request-an-appointment.php">Request Appointment</a>
                                    </li>
                                    <li>
                                        <a href="refer-a-patient.php">Refer a Patient</a>
                                    </li>
                                    <li>
                                        <a href="find-a-doctor.php">Find a Doctor</a>
                                    </li>
                                    <li>
                                        <a href="#">Call Us: 0807 420 2574
                                        </a>
                                    </li>
                                </ul>
                            </div>

              
              <!--search BTN-->
              <a id="searchBTN" class="fa fa-search"></a>
            </nav>
          </div>
          <!--display dropdown when search button is clicked-->
          <div class="search-overlay" id="search-Overlay">
            <div class="container">
              <div class="search-content">
                <form action="#" method="post" autocomplete="off">
                  <div>
                    <input
                      type="text"
                      placeholder="Looking for something?"
                      name="Search" onkeyup="liveSearch(this.value)" id="searchInput"
                    />
                    <button type="submit" id="searchBtn" class="overlaySearch">
                      <i class="fa fa-search"></i>
                    </button>
                  </div>
                </form>
                <!--display Ajax result from server here-->
                <div id="searchResult" class="popular-searches">
                  <h3>Popular Searches</h3>
                  <ul>
                    <li><a href="refer-a-patient.php">Refer a patient</a></li>
                    <li><a href="map-and-directions.php">Maps & Directions</a></li>
                    <li><a href="#">Treatments</a></li>
                    <li><a href="#">Services</a></li>
                  </ul>
                </div>

                <!--replace search content with below file-->
                <div id="searchResult2" class="popular-searches" style="display: none">
                  <h3>Popular Searches</h3>
                  <ul>
                    <li><a href="refer-a-patient.php">Refer a patient</a></li>
                    <li>
                      <a href="map-and-directions.php">Maps & Directions</a>
                    </li>
                    <li><a href="#">Treatments</a></li>
                    <li><a href="#">Services</a></li>
                  </ul>
                </div>



              </div>
            </div>
          </div>
        </div>
      </header>
    </div>

        <!---------------------------MAIN PAGE CONTENT---------------------------------------------->
        <main>
            <div class="section-background-image award-recognition">
                <div class="container">
                    <h2 class="subnavbar-color">Make a Donation</h2>
                    <ul class="inline-block-breadcrumb subnavbar-color">
                        <li>
                            <a href="index.php">Home</a>
                        </li>            
                        <li>Make a Donation</li>

                    </ul>
                </div>
            </div>

            <section id="MakeADonation">
                <div class="container  align-start make-a-donation">
                    <div class="flex">
                        <div class="column-left col-40 v-border-right">
                            <h5 class="text-capitalize sky-blue">Make A Difference</h5>
                            <h2 class="text-capitalize navy-blue">Let’s Create A 
                                Better Tomorrow</h2>
                            <div class="donation-img">
                                <img src="img/other photos/bill-wegener-LqOO5Ko0zSo-unsplash.jpg" alt="orphan photos" class="margin-top">
                            </div>
                            <div class="img-text-content margin-top">
                                <p>
                                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et ipsa alias voluptatibus corporis adipisci qui, sed reiciendis, perspiciatis natus voluptatem quam, dolores laborum possimus? Quod voluptatum, perferendis optio voluptatibus fugit iste quae obcaecati hic temporibus.
                                </p>
                                <p>
                                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et ipsa alias voluptatibus corporis adipisci qui, sed reiciendis, perspiciatis natus voluptatem quam, dolores laborum possimus? 
                                </p>
                                <a href="https://fathersheartchildrenstrust.org/" target="_blank" class="sky-blue">Visit Father’s Heart Trust official Website</a>
                            </div>
                        </div>
                        <!--story about each awards and its picture-->
                        <div
                            class="column-right col-40">
                            <div class="form-container">
                            <h3 class="navy-blue">Payment Information</h3>
                            <form action="" method="post" autocomplete="off" id="paymentForm">
                                <div class="form-content">
                                    <p id="importantText" class="important-text">
                                        * Indicates a required field
                                    </p>
                                
                                    <div class="flex">
                                        <div class="col-100">
                                            <label for="fname">First name:
                                                <span>*</span>
                                            </label>
                                            <input type="text" name="firstName" id="fname" required/>
                                        </div>                                        
                                    </div>
                                    <div class="flex">
                                        <div class="col-100">
                                            <label for="lname">Last name:
                                                <span>*</span>
                                            </label>
                                            <input type="text" name="lastName" id="lname" required/>
                                        </div>                                       
                                    </div>
                                    <div class="flex">
                                        <div class="col-100">
                                            <label for="email">Email:
                                                <span>*</span>
                                            </label>
                                            <input type="text" name="Email" id="email" required/>
                                        </div>                                
                                    </div>
                                    <div class="flex">
                                        <div class="col-100">
                                            <label for="amount">Amount:
                                            </label>
                                            <input type="tel" name="Email" id="amount" required/>
                                        </div>                              
                                    </div>
                                   
                                    <button type="submit" class="btn bg-navy-blue-square-btn"  onclick="payWithPaystack()">
                                        Make Donation
                                    </button>
                                </div>
                            
                            </form>
                            </div>
                        </div>
                    </div>
                </section>
            </main>

            <!---------------------------MAIN PAGE CONTENT ENDS----------------------------------------->

            <footer>
      <!--Our Affiliations-->
      <div class="our-affiliations mini-section">
        <div class="container flex flex-column">
          <h3>
            <span>Our</span>
            Affiliations
          </h3>
          <div class="affiliation flex">
            <img
              src="img/logo/_1511456132_462_General-Electric-mobile copy 2.png"
              alt="General Electric logo"
            /><img
              src="img/logo/Safari logo copy.png"
              alt="Safari Pharmacy logo"
            /><img
              src="img/logo/ddccopy.png"
              alt="DNA diagnostic Center"
            /><img
              src="img/logo/Fathers Heart copy.png"
              alt="Fathers Hearth Children Trust logo"
            /><img
              src="img/logo/Tymed CT Scan copy.png"
              alt="TYMED CT Scan Center logo"
            />
          </div>
        </div>
      </div>

      <section id="main-footer">
        <div class="container">
          <!--row 1 About, For Health Professionals, Billing and Insurance & Ways to help-->
          <!--BACK TO TOP-->
          <button
            class="scrollTopBtn flex-column"
            id="myTopBTN"
            onclick="topFunction()"
          >
            <i class="fa fa-angle-up"></i>
            <p>Top</p>
          </button>
          <!--BACK TO TOP BTN ENDS-->
          <div class="flex lg-size">
            <div class="dropdown">
              <h4 class="dropbtn">About Us</h4>
              <ul class="dropdown-content footer-menu" id="menuDropdown">
                <li>
                  <a href="our-history.php">History</a>
                </li>
                <li>
                  <a href="awards-and-recognition.php">Awards & recognition</a>
                </li>
                <li>
                  <a href="map-and-directions.php">Maps & Directions</a>
                </li>
                <li>
                  <a href="report-misconduct.php">Report Misconduct</a>
                </li>
                <li>
                  <a href="contact-us.php">Contact</a>
                </li>
              </ul>
            </div>
            <div class="dropdown">
              <h4 class="dropbtn">For Health Professionals</h4>
              <ul class="dropdown-content footer-menu" id="menuDropdown">
                <li>
                  <a href="#">Transfer a patient</a>
                </li>
                <li>
                  <a href="refer-a-patient.php">Refer a patient</a>
                </li>
                <li>
                  <a href="#">For nurses</a>
                </li>
                <li>
                  <a href="#">For physician</a>
                </li>
                <li>
                  <a href="request-an-appointment.php"
                    >Enquiries & appointment</a
                  >
                </li>
              </ul>
            </div>
            <div>
              <div class="billing-insurrance dropdown">
                <h4 class="dropbtn">Billing and Insurance</h4>
                <ul class="dropdown-content footer-menu" id="menuDropdown">
                  <li>
                    <a href="patient-and-visitors/accepted-insurance.php"
                      >Insurance Information</a
                    >
                  </li>
                  <li>
                    <a
                      href="patient-and-visitors/billing-and-financial-asistance.php"
                      >Pay a bill</a
                    >
                  </li>
                </ul>
              </div>
              <div class="ways-to-help footer-header">
                <h4>Ways to Help</h4>
                <p>
                  We supports Father's Heart Children's Trust, see how you can
                  make the lives of Orphans in Delta State better.
                </p>

                <a href="" class="make-donation btn rounded-white-btn"
                  >Make a Donation</a
                >
              </div>
            </div>
          </div>
          <div class="social-img flex">
            <!--row 2 socials media-->
            <div class="follow-us-align-left footer-header mini-section">
              <h4>Follow us on Social media</h4>
              <div class="flex">
              <a href="https://www.facebook.com/thewestendhospital" target = "_blank" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="https://instagram.com/westendhospitalwarri" target = "_blank" class="fa fa-instagram"></a>
                <a href="https://www.linkedin.com/company/westend-hospital" target = "_blank" class="fa fa-linkedin"></a>
              </div>
            </div>

            <!--row 3 Westend Hospital Logo -->
            <div class="footer-img-container">
              <img
                src="img/logo/Westend logo white.png"
                alt="Westend Hospital white logo"
                class="westendbluelogo"
                id="myImg"
              />
            </div>
          </div>

          <div class="copyright">
            <small class="coy"
              >&copy; <?php echo date("Y");?> Westend Hospital. All Right Reserved.
            </small>
            <small class="flex">
              <a href="privacy-policy.php">Privacy Policy</a>
              <a href="terms-of-use.php">Terms & Conditions</a>
              <a href="patient-feedback.php">Feedback</a>
              <a href="#">Sitemap</a>
            </small>
          </div>
        </div>
      </section>
    </footer>
            <script src="js/main.js"></script>
            <script src="js/paystackIntegration.js"></script>
            <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
            <script src="js/slick.js" type="text/javascript"></script>
            <script src="https://js.paystack.co/v1/inline.js"></script> 
        </body>
    </body>
</html>
