<!DOCTYPE html>
<!-- saved from url=(0021)http://localhost/mvo/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Mega Vision Organisation Rwanda">
        <title>Mega Vision Organisation </title>
        <link rel="stylesheet" href="./Mega Vision Organisation_files/themify-icons.css">
        <link rel="stylesheet" href="./Mega Vision Organisation_files/bootstrap-icons.css">
        <link rel="stylesheet" href="./Mega Vision Organisation_files/style.css">
        <script type="text/javascript">
        function validateForm() {
        var name = document.getElementById("inputName").value.trim();
        var email = document.getElementById("inputEmail").value.trim();
        var phone = document.getElementById("inputPhone").value.trim();
        var amount = document.getElementById("inputAmount").value.trim();
        var card = document.getElementById("inputCard").value.trim();
        var exp = document.getElementById("inputExp").value.trim();
        var cvv = document.getElementById("inputCVV").value.trim();
        
        var nameError = document.getElementById("nameError");
        var emailError = document.getElementById("emailError");
        var phoneError = document.getElementById("phoneError");
        var amountError = document.getElementById("amountError");
        var cardError = document.getElementById("cardError");
        var expError = document.getElementById("expError");
        var cvvError = document.getElementById("cvvError");
        
        var valid = true;
        
        if (name == "") {
        nameError.innerHTML = "Please enter your name";
        valid = false;
        } else {
        nameError.innerHTML = "";
        }
        
        if (email == "") {
        emailError.innerHTML = "Please enter your email";
        valid = false;
        } else if (!/\S+@\S+\.\S+/.test(email)) {
        emailError.innerHTML = "Please enter a valid email";
        valid = false;
        } else {
        emailError.innerHTML = "";
        }
        
        if (phone == "") {
        phoneError.innerHTML = "Please enter your phone number";
        valid = false;
        } else if (!/^\d{10}$/.test(phone)) {
        phoneError.innerHTML = "Please enter a valid phone number";
        valid = false;
        } else {
        phoneError.innerHTML = "";
        }
        
        if (amount == "") {
        amountError.innerHTML = "Please enter donation amount";
        valid = false;
        } else if (isNaN(amount)) {
        amountError.innerHTML = "Please enter a valid number";
        valid = false;
        } else {
        amountError.innerHTML = "";
        }
        
        if (card == "") {
        cardError.innerHTML = "Please enter credit card number";
        valid = false;
        } else if (!/^\d{16}$/.test(card)) {
        cardError.innerHTML = "Please enter a valid credit card number";
        valid = false;
        } else {
        cardError.innerHTML = "";
        }
        
        if (exp == "") {
        expError.innerHTML = "Please enter expiration date";
        valid = false;
        } else if (!/^(0[1-9]|1[0-2])\/\d{2}$/.test(exp)) {
        expError.innerHTML = "Please enter a valid expiration date (MM/YY)";
        valid = false;
        } else {
        expError.innerHTML = "";
        }
        
        if (cvv == "") {
        cvvError.innerHTML = "Please enter CVV";
        valid = false;
        } else if (!/^\d{3}$/.test(cvv)) {
        cvvError.innerHTML = "Please enter a valid CVV";
        valid = false;
        } else {
        cvvError.innerHTML = "";
        }
        
        return valid;
        }
        </script>
    <style type="text/css">@font-face {
      font-family: Source Sans Pro SB;
      src: url("chrome-extension://jcbfebakonmpfdgeflcomgpgefmbhlck/fonts/source-300.woff2");
      font-weight: 300;
    }
    @font-face {
      font-family: Source Sans Pro SB;
      src: url("chrome-extension://jcbfebakonmpfdgeflcomgpgefmbhlck/fonts/source-400.woff2");
      font-weight: 400;
    }
    @font-face {
      font-family: Source Sans Pro SB;
      src: url("chrome-extension://jcbfebakonmpfdgeflcomgpgefmbhlck/fonts/source-600.woff2");
      font-weight: 600;
    }
    @font-face {
      font-family: Source Sans Pro SB;
      src: url("chrome-extension://jcbfebakonmpfdgeflcomgpgefmbhlck/fonts/source-700.woff2");
      font-weight: 700;
    }
    @font-face {
      font-family: Source Sans Pro SB;
      src: url("chrome-extension://jcbfebakonmpfdgeflcomgpgefmbhlck/fonts/source-900.woff2");
      font-weight: 900;
    }</style><style type="text/css">@font-face {
      font-family: Source Sans Pro SB;
      src: url("chrome-extension://jcbfebakonmpfdgeflcomgpgefmbhlck/fonts/source-300.woff2");
      font-weight: 300;
    }
    @font-face {
      font-family: Source Sans Pro SB;
      src: url("chrome-extension://jcbfebakonmpfdgeflcomgpgefmbhlck/fonts/source-400.woff2");
      font-weight: 400;
    }
    @font-face {
      font-family: Source Sans Pro SB;
      src: url("chrome-extension://jcbfebakonmpfdgeflcomgpgefmbhlck/fonts/source-600.woff2");
      font-weight: 600;
    }
    @font-face {
      font-family: Source Sans Pro SB;
      src: url("chrome-extension://jcbfebakonmpfdgeflcomgpgefmbhlck/fonts/source-700.woff2");
      font-weight: 700;
    }
    @font-face {
      font-family: Source Sans Pro SB;
      src: url("chrome-extension://jcbfebakonmpfdgeflcomgpgefmbhlck/fonts/source-900.woff2");
      font-weight: 900;
    }
    .summary-box-writer {
      position: fixed;
      z-index: 999999999;
    }</style><style>
    #simplified_ai_menu_shadow_wrapper {
      display: none;
      position: absolute;
    }
    #simplified_ai_menu_shadow_wrapper.simplified_shown {
      display: block;
    }
  </style><style>
			#simplified_preloader_wrapper {
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.6);
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        top: 0;
        right: 0;
        z-index:9999999;
			}
    </style><style>
			#simplified_preloader {
        display: inline-block;
        border-color: currentColor;
        border-style: solid;
        border-radius: 99999px;
        border-width: 2px;
        border-bottom-color: transparent;
        border-left-color: transparent;
        -webkit-animation: simplified-loader-spin 0.45s linear infinite;
        animation: simplified-loader-spin 0.45s linear infinite;
        width: 3rem;
        height: 3rem;
        color: #FFAC41;
			}

			#simplified_preloader_inner {
        border: 0px;
        clip: rect(0px, 0px, 0px, 0px);
        height: 1px;
        width: 1px;
        margin: -1px;
        padding: 0px;
        overflow: hidden;
        white-space: nowrap;
        position: absolute;
        color: #FFAC41;
			}
			@keyframes simplified-loader-spin {
				0% {
					transform: rotate(0deg)
				}
				100% {
					transform: rotate(360deg)
				}
			}
    </style></head>
    <body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
        <!--<a href="components.html" class="btn btn-primary btn-component" data-spy="affix" data-offset-top="600"><i class="ti-shift-left-alt"></i> Components</a>-->
        <header class="header">
            <div class="container">
                <ul class="social-icons pt-3">
                    <li class="social-item"><a class="social-link text-light" href="https://web.facebook.com/profile.php?id=100083653026701"><i class="ti-facebook" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link text-light" href="https://twitter.com/MegaVisionOrga1"><i class="ti-twitter" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link text-light" href="https://www.instagram.com/megavisionorganisation/"><i class="ti-instagram" aria-hidden="true"></i></a></li>
                </ul>
                <div class="header-content">
                    <h1 class="header-title">MEGA VISION <br><br> ORGANISATION</h1>
                    <h6 class="header-mono">Rwanda</h6>
                    <a href="http://localhost/mvo/#getinvolved"><button class="btn btn-primary btn-rounded"><i class="ti-gift pr-2"></i>DONATE</button></a>
                </div>
            </div>
        </header>
        <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white affix" data-spy="affix" data-offset-top="510">
            <div class="container">
                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse mt-sm-20 navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="http://localhost/mvo/#home" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="http://localhost/mvo/#about" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="http://localhost/mvo/#getinvolved" class="nav-link">Get Involved</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav brand">
                        <img src="./Mega Vision Organisation_files/avatar.jpg" alt="" class="brand-img">
                        <li class="brand-txt">
                            <h5 class="brand-title">MEGA VISION ORGANISATION</h5>
                            <div class="brand-subtitle">RWANDA</div>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="http://localhost/mvo/#events" class="nav-link active">Events</a>
                        </li>
                        <li class="nav-item">
                            <a href="http://localhost/mvo/#contact" class="nav-link">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="http://localhost/mvo/#getinvolved" class="ml-4 mt-1 btn btn-primary btn-md btn-rounded">DONATE</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div id="about" class="row about-section">
                <div class="col-lg-4 about-card">
                    <h3 class="font-weight-light">Who we are.</h3>
                    <span class="line mb-5"></span>
                    <h5 class="mb-3">A Non-Governmental Organisation based in Rwanda.</h5>
                                        <p class="mt-20"> Mega Vision Rwanda is a non-profit organization dedicated to promoting human 
rights. Our mission is to promote Human right and development of Youth and 
women, empowering them with life skills for active participation in development of 
their country. We strive to make a difference in the lives of teen mothers by 
supporting them and empowering them with life skills for self-development.</p>
                    <a href="http://localhost/mvo/#getinvolved"><button class="btn btn-outline-danger"><i class="icon-down-circled2 "></i>Get Involved</button></a>
                </div>
                <div class="col-lg-4 about-card">
                    <h3 class="font-weight-light">Organisational Info</h3>
                    <span class="line mb-5"></span>
                    <ul class="mt40 info list-unstyled">
                        <li><span>Email</span> : megavisionorganisation@gmail.c</li>
                        <li><span>Phone</span> : +(250) 788 627 </li>
                        <li><span>Phone</span> : +(250) 781 043 </li>
                        <li><span>Account bank (Rwf ):</span> 4003200769427</li>
                        <li><span>Account bank (USD ):</span> 4003200769433</li>
                        <li><span>Address</span> :  KN 54ST, Kanombe, Kigali-Rwanda.</li>
                    </ul>
                    <ul class="social-icons pt-3">
                        <li class="social-item"><a class="social-link" href="https://web.facebook.com/profile.php?id=100083653026701"><i class="ti-facebook" aria-hidden="true"></i></a></li>
                        <li class="social-item"><a class="social-link" href="https://twitter.com/MegaVisionOrga1"><i class="ti-twitter" aria-hidden="true"></i></a></li>
                        <li class="social-item"><a class="social-link" href="https://www.instagram.com/megavisionorganisation/"><i class="ti-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-4 about-card">
                    <h3 class="font-weight-light">Our Programs</h3>
                    <span class="line mb-5"></span>
                    <div class="row">
                        <div class="col-1 text-danger pt-1"><i class="ti-rocket icon-lg"></i></div>
                        <div class="col-10 ml-auto mr-3">
                            <h6>Youth and Women Empowerment</h6>
                            <p class="subtitle">Improving their access to resources, and transforming their consciousness through beliefs, values, and attitudes.</p>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1 text-danger pt-1"><i class="bi bi-people icon-lg" style="color: indianred;"></i></div>
                        <div class="col-10 ml-auto mr-3">
                            <h6>Protect Human Right and Governance</h6>
                            <p class="subtitle">Protecting human rights is essential for promoting justice, equality, and dignity for all</p>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1 text-danger pt-1"><i class="ti-shield icon-lg"></i></div>
                        <div class="col-10 ml-auto mr-3">
                            <h6>Children Protection</h6>
                            <p class="subtitle">Ensuring the child is safety and preventing him or her from suffering further harm</p>
                            <hr>
                        </div>
                    </div>
                                </div>
            </div>
        </div>
        <!--Get Involved Section-->
        <section class="section" id="getinvolved">
            <div class="container">
                <h2 class="mb-5"><span class="text-danger">Get</span> Involved</h2>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="mt-2">
                                    <h4>How to Get Involved</h4>
                                    <span class="line"></span>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="title text-danger">Donate</h6>
                                <p>Contribute.</p>
                                <p class="subtitle">You can involve in contributing financial resources to Mega Vision Organisation to support our programs and initiatives.</p>
                                <hr>
                                <h6 class="title text-danger">Volunteer</h6>
                                <p>Offer time, resources and skills</p>
                                <p class="subtitle">You can offer your time and skills to Mega Vision Organisation and actively participate in our work and make a tangible difference.</p>
                                <hr>
                                <h6 class="title text-danger">Spread Awareness</h6>
                                <p>Share our content.</p>
                                <p class="subtitle">You can promote Mega Vision Organisation's cause and initiatives to raise public support and drive positive change.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="mt-2">
                                    <h4>Volunteerism</h4>
                                    <span class="line"></span>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="title text-danger">Volunteer Registration Form</h6>
                                <p class="subtitle">Thank you very much for your interest in contributing to the humanitarian act at MVO Rwanda. Fill in the form attached and we will send it to megavisionorganisation@gmail.com. Once your placement is confirmed, you will be contacted.
                                </p>
                                <form action="http://localhost/mvo/volunteer.php" method="POST">
                                    <div class="form-group">
                                        <label for="inputName">Name</label>
                                        <input type="text" class="form-control" id="inputName" name="name" placeholder="Enter your name">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail">Email address</label>
                                        <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPhone">Phone number</label>
                                        <input type="tel" class="form-control" id="inputPhone" name="phone" placeholder="Enter phone number">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Address</label>
                                        <input type="text" class="form-control" id="inputAddress" name="location" placeholder="Province-District-Sector">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Register</button>
                                </form>
                                
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card" style="border: 1px solid #F85C70;">
                            <div class="card-header">
                                <div class="pull-left">
                                    <h4 class="mt-2">Donation</h4>
                                    <span class="line"></span>
                                </div>
                            </div>
                            <div class="card-body pb-2">
                                <form method="post" action="http://localhost/mvo/payment.php">
                                    <div class="form-group">
                                        <label for="inputName">Name</label>
                                        <input type="text" class="form-control" id="inputName" name="name" placeholder="Enter your name">
                                        <span class="error" id="nameError"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail">Email address</label>
                                        <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Enter email">
                                        <span class="error" id="emailError"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPhone">Phone number</label>
                                        <input type="tel" class="form-control" id="inputPhone" name="phone" placeholder="Enter phone number">
                                        <span class="error" id="phoneError"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAmount">Donation amount</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">$</span>
                                            </div>
                                            <input type="text" class="form-control" id="inputAmount" name="amount" placeholder="Enter amount">
                                        </div>
                                        <span class="error" id="amountError"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputCard">Credit card number</label>
                                        <input type="text" class="form-control" id="inputCard" name="card" placeholder="Enter credit card number">
                                        <span class="error" id="cardError"></span>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputExp">Expiration date</label>
                                            <input type="text" class="form-control" id="inputExp" name="exp" placeholder="MM/YY">
                                            <span class="error" id="expError"></span>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputCVV">CVV</label>
                                            <input type="text" class="form-control" id="inputCVV" name="cvv" placeholder="Enter CVV">
                                            <span class="error" id="cvvError"></span>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Donate</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
    </section>

    <section class="section bg-dark text-center">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6 col-lg-3">
                    <div class="row ">
                        <div class="col-5 text-right text-light border-right py-3">
                            <div class="m-auto"><i class="ti-user icon-xl"></i></div>
                        </div>
                        <div class="col-7 text-left py-3">
                            <h1 class="text-danger font-weight-bold font40">4</h1>
                            <p class="text-light mb-1">Volunteers</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="row">
                        <div class="col-5 text-right text-light border-right py-3">
                            <div class="m-auto"><i class="ti-layers-alt icon-xl"></i></div>
                        </div>
                        <div class="col-7 text-left py-3">
                            <h1 class="text-danger font-weight-bold font40">100</h1>
                            <p class="text-light mb-1">Projects Done</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="row">
                        <div class="col-5 text-right text-light border-right py-3">
                            <div class="m-auto"><i class="ti-face-smile icon-xl"></i></div>
                        </div>
                        <div class="col-7 text-left py-3">
                            <h1 class="text-danger font-weight-bold font40">1 000</h1>
                            <p class="text-light mb-1">Direct Beneficiaries</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="row">
                        <div class="col-5 text-right text-light border-right py-3">
                            <div class="m-auto"><i class="ti-location-pin icon-xl"></i></div>
                        </div>
                        <div class="col-7 text-left py-3">
                            <h1 class="text-danger font-weight-bold font40">20</h1>
                            <p class="text-light mb-1">Communities Reached</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="section" id="events">
        <div class="container">
            <h2 class="mb-5">Latest <span class="text-danger">News</span></h2>
            <div class="row">
                <div class="blog-card">
                    <div class="img-holder">
                        <img src="./Mega Vision Organisation_files/blog1.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                    </div>
                    <div class="content-holder">
                        <h6 class="title">Consectetur adipisicing elit</h6>
                        <p class="post-details">
                            <a href="http://localhost/mvo/#">By: Admin</a>
                            <a href="http://localhost/mvo/#"><i class="ti-heart text-danger"></i> 234</a>
                            <a href="http://localhost/mvo/#"><i class="ti-comment"></i> 123</a>
                        </p>
                        
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet nesciunt qui sit velit delectus voluptates, repellat ipsum culpa id deleniti. Rerum debitis facilis accusantium neque numquam mollitia modi quasi distinctio.</p>
                        <p><b>Necessitatibus nihil impedit! Ex nisi eveniet, dolor aliquid consequuntur repudiandae.</b></p>
                        <p>Magnam in repellat enim harum omnis aperiam! Explicabo illo, commodi, dolor blanditiis cupiditate harum nisi vero accusamus laudantium voluptatibus dolores quae obcaecati.</p>
                        <a href="http://localhost/mvo/#" class="read-more">Read more <i class="ti-angle-double-right"></i></a>
                    </div>
                    </div><!-- end of blog wrapper -->
                    <!-- blog-card -->
                    <div class="blog-card">
                        <div class="img-holder">
                            <img src="./Mega Vision Organisation_files/blog2.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                        </div>
                        <div class="content-holder">
                            <h6 class="title">Explicabo illo</h6>
                            <p class="post-details">
                                <a href="http://localhost/mvo/#">By: Admin</a>
                                <a href="http://localhost/mvo/#"><i class="ti-heart text-danger"></i> 456</a>
                                <a href="http://localhost/mvo/#"><i class="ti-comment"></i> 264</a>
                            </p>
                            
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit excepturi laborum enim, vitae ipsam atque eum, ad iusto consequuntur voluptas, esse doloribus. Perferendis porro quisquam vitae exercitationem aliquid, minus eos laborum repudiandae, cumque debitis iusto omnis praesentium? Laborum placeat sit adipisci illum tempore maxime, esse qui quae? Molestias excepturi corporis similique doloribus. Esse vitae earum architecto nulla non dolores illum at perspiciatis quod, et deleniti cupiditate reiciendis harum facere, delectus eum commodi soluta distinctio sit repudiandae possimus sunt. Ipsum, rem.</p>
                            <a href="http://localhost/mvo/#" class="read-more">Read more <i class="ti-angle-double-right"></i></a>
                        </div>
                        </div>
                        <div class="blog-card">
                            <div class="img-holder">
                                <img src="./Mega Vision Organisation_files/blog3.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                            </div>
                            <div class="content-holder">
                                <h4 class="title">Porro Quisqua</h4>
                                <p class="post-details">
                                    <a href="http://localhost/mvo/#">By: Admin</a>
                                    <a href="http://localhost/mvo/#"><i class="ti-heart text-danger"></i> 431</a>
                                    <a href="http://localhost/mvo/#"><i class="ti-comment"></i> 312</a>
                                </p>
                                
                                <p> consectetur adipisicing elit. Impedit excepturi laborum enim, vitae ipsam atque eum, ad iusto consequuntur voluptas, esse doloribus. Perferendis porro quisquam vitae exercitationem aliquid, minus eos laborum repudiandae, cumque debitis iusto omnis praesentium? Laborum placeat sit adipisci illum tempore maxime, esse qui quae? Molestias excepturi corporis similique doloribus. Esse vitae earum architecto nulla non dolores illum at perspiciatis quod, et deleniti cupiditate reiciendis harum facere, delectus eum commodi soluta distinctio sit repudiandae possimus sunt. Ipsum, rem.</p>
                                <a href="http://localhost/mvo/#" class="read-more">Read more <i class="ti-angle-double-right"></i></a>
                            </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="section contact" id="contact">
                    <div id="" class="map" style="height: 700px;"><iframe src="./Mega Vision Organisation_files/embed.html" width="1369" height="700" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="contact-form-card">
                                    <h4 class="contact-title">Send a message</h4>
                                    <form action="http://localhost/mvo/sendusingphpmailer.php" method="POST">
                                        <div class="form-group">
                                            <input class="form-control" name="name" id="name" type="text" placeholder="Name *" required="">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="email" id="email" type="email" placeholder="Email *" required="">
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" id="message" name="message" placeholder="Message *" rows="7" required=""></textarea>
                                        </div><br>
                                        <div class="form-group ">
                                            <button type="submit" class="form-control btn btn-primary">Send Message</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="contact-info-card">
                                    <h4 class="contact-title">Get in touch</h4>
                                    <div class="row mb-2">
                                        <div class="col-1 pt-1 mr-1">
                                            <i class="ti-mobile icon-md"></i>
                                        </div>
                                        <div class="col-10 ">
                                            <h6 class="d-inline">Phone : <br>  <span class="text-muted">+(250) 788 627 955</span></h6>
                                        </div>
                                    </div><br><br>
                                    <div class="row mb-2">
                                        <div class="col-1 pt-1 mr-1">
                                            <i class="ti-map-alt icon-md"></i>
                                        </div>
                                        <div class="col-10">
                                            <h6 class="d-inline">Address :<br> <span class="text-muted">KN 54ST, Kanombe, Kigali-Rwanda.</span></h6>
                                        </div>
                                    </div><br><br>
                                    <div class="row mb-2">
                                        <div class="col-1 pt-1 mr-1">
                                            <i class="ti-envelope icon-md"></i>
                                        </div>
                                        <div class="col-10">
                                            <h6 class="d-inline">Email :<br> <span class="text-muted">megavisionorganisation@gmail.com</span></h6>
                                        </div>
                                    </div><br>
                                    <center>
                                    <ul class="social-icons pt-4">
                                        <li class="social-item"><a class="social-link text-dark" href="https://web.facebook.com/profile.php?id=100083653026701"><i class="ti-facebook" aria-hidden="true"></i></a></li>
                                        <li class="social-item"><a class="social-link text-dark" href="https://twitter.com/MegaVisionOrga1"><i class="ti-twitter" aria-hidden="true"></i></a></li>
                                        <li class="social-item"><a class="social-link text-dark" href="https://www.instagram.com/megavisionorganisation/"><i class="ti-instagram" aria-hidden="true"></i></a></li>
                                    </ul></center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer py-3">
                    <div class="container">
                        <center> <p class="small mb-0 text-light">
                            © <script>document.write(new Date().getFullYear())</script>2023 Mega Vision Organisation Based In <a href="http://devcrud.com/" target="_blank"><span class="text-danger" title="Bootstrap 4 Themes and Dashboards">Rwanda</span></a>
                        </p></center>
                    </div>
                </footer>
                
                <script src="./Mega Vision Organisation_files/jquery-3.4.1.js.download"></script>
                <script src="./Mega Vision Organisation_files/bootstrap.bundle.js.download"></script>
                
                <script src="./Mega Vision Organisation_files/bootstrap.affix.js.download"></script>
                
                <script src="./Mega Vision Organisation_files/isotope.pkgd.js.download"></script>
               
                <script async="" defer="" src="./Mega Vision Organisation_files/js"></script>
                
                <script src="./Mega Vision Organisation_files/johndoe.js.download"></script>
            
        <div class="summary-popup"></div><div class="summary-box-writer"></div><div id="simplified_ai_menu_shadow_wrapper"></div></body></html>
