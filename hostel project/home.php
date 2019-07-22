<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $title ?></title>
<!--

Template 2089 Meteor

http://www.tooplate.com/view/2089-meteor

-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="Css/bootstrap.min.css">
        <link rel="stylesheet" href="Css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="Css/fontAwesome.css">
        <link rel="stylesheet" href="Css/hero-slider.css">
        <link rel="stylesheet" href="Css/tooplate-style.css">
        <style>
          #loginbn{
             margin-top: 20px;
             background-image: url(img/blog-bg.png);            
             border:1px;
             font-family: Poppins-Medium;
             font-size: 16px;
             color: #fff;
             line-height: 1.2;
             text-transform: uppercase;
            }
          #loginbn:hover{
            background-color:#2c9664;

          }
        </style>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <script src="Js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>
    <div class="header">
        <div class="container">
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand scroll-top">
                        <div class="logo"></div>
                    </a>
                </div>
                <!--/.navbar-header-->
                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php" >Home</a></li>
                        <li><a href="our blog post.php">hostel</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="contact us.php" >Contact Us</a></li>
                        <li><input type="button" value="LOGIN" id="loginbn" class="btn" onclick="location.replace('Login_v3/login.php');"></li>
                    </ul>
                </div>
                <!--/.navbar-collapse-->
            </nav>
            <!--/.navbar-->
        </div>
        <!--/.container-->
    </div>
    <!--/.header-->


    <section class="cd-hero">
        <ul class="cd-hero-slider autoplay">  
        <!-- 
            <ul class="cd-hero-slider autoplay"> for slider auto play 
            <ul class="cd-hero-slider"> for disabled auto play
        -->
            <li class="selected first-slide">
                <div class="cd-full-width">
                    <div class="tm-slide-content-div slide-caption">
                        <span>Some views </span>
                        <h2>student hostel</h2>
                        <p>there are suitable hostel in this website for Students and Expatriates</p>
                        <div class="primary-button">
                            <a href="#content_area" class="scroll-link" data-id="about">Discover More</a>
                        </div>                           
                    </div>                   
                </div> <!-- .cd-full-width -->
            </li>

            <li class="second-slide">
                <div class="cd-full-width">
                    <div class="tm-slide-content-div slide-caption">
                        <span>We Are Perfect Staffs</span>
                        <h2>Our Team Members</h2>
                        <p>Donec dolor ipsum, laoreet nec metus non, tempus elementum massa. Donec non elit rhoncus, vestibulum enim sed, rutrum arcu.</p>
                        <div class="primary-button">
                            <a href="#">Read More</a>
                        </div>                        
                    </div>                     
                </div> <!-- .cd-full-width -->
            </li>

            <li class="third-slide">
                <div class="cd-full-width">
                    <div class="tm-slide-content-div slide-caption">
                        <span>Design is a hobby</span>
                        <h2>Responsive Layout</h2>
                        <p>Integer ut dolor eget magna congue gravida ut at arcu. Vivamus maximus neque quis luctus tempus. Vestibulum consequat.</p>
                        <div class="primary-button">
                            <a href="#">View Details</a>
                        </div>                           
                    </div>                         
                </div> <!-- .cd-full-width -->
            </li>
        </ul> <!-- .cd-hero-slider -->

        <div class="cd-slider-nav">
            <nav>
                <span class="cd-marker item-1"></span>
                
                <ul>
                    <li class="selected"><a href="#0"></a></li>
                    <li><a href="#0"></a></li>
                    <li><a href="#0"></a></li>                        
                </ul>
            </nav> 
        </div> <!-- .cd-slider-nav -->
    </section> <!-- .cd-hero -->

    <div id="what-we-do">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="left-text"align="center">
                        <h4>New offers just arrived,<br>Get it now and take profit.</h4>
                        <p>Gochujang pitchfork post-ironic hammock kombucha fanny pack cronut. Raw denim chicharrones semiotics af truffaut pinterest. Distillery letterpress authentic adaptogen. Meditation schlitz humblebrag photo booth celiac cliche chartreuse.<br><br>Pinterest 90's wolf celiac dreamcatcher listicle deep v semiotics. Intelligentsia literally meggings trust fund put a bird on it. Shoreditch crucifix artisan pug shaman twee. Health goth bicycle rights retro iPhone.</p>
                        <ul>
                            <li>
                                <div class="white-button">
                                    <a href="#" class="scroll-link" data-id="portfolio">Discover More</a>
                                </div>
                            </li>
                            <li>
                                <div class="primary-button">
                                    <a href="#">Purchase Now</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

            <div id="content_area">
                <?php echo $content; ?>
            </div>
   
    
    
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="copyright-text">
                        <p>Copyright &copy; 2017 Company Name 
                        
                        - Design: Tooplate</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="social-icons">
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-rss"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="Js/vendor/jquery-1.11.2.min.js"></script>')</script>

    <script src="Js/vendor/bootstrap.min.js"></script>

    <script src="js/plugins.js"></script>
    <script src="Js/main.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script> 
    <script>
      
    </script>
</body>
</html>