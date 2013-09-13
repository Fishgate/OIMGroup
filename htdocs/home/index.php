<?php require_once 'config.php'; ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <!-- BEGIN HEAD -->
        <?php include '../includes/styles.php' ?>
        <!-- END HEAD -->
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- BEGIN HEADER -->
        <header id='header'>
            <?php include '../includes/header.php' ?>
        </header>
        <!-- END HEADER -->

        <!-- BEGIN BODY -->
        <div id='contentwrap' class='clearfix'>
            <!-- =====================================================
                                BEGIN INTRO COPY
            ==========================================================-->
            <center>
                <h1>Business Performance Specialist in core areas of</h1>
                <h2 class="h2-custom"><a href="#">PEOPLE MANAGEMENT</a></h2>
                <h2 class="h2-custom"><a href="#">ORGANISATIONAL PERFORMANCE</a></h2>
                <h2 class="h2-custom"><a href="#">OPERATIONAL OPTIMISATION</a></h2>
                
                <p id="intro-copy" class="dotted-top-bottom">Over the years OIM has developed a unique, integrated approach to business performance management and strategy execution in these core areas.<br /> With a proven track record of working with Blue Chip companies both locally and abroad, our multidisciplinary team eliminates the need to call in<br />various business consultants.</p>
            </center>
            <!-- END INTRO COPY -->
            
            <!-- =====================================================
                                BEGIN 3 DIV OVERVIEW
            ==========================================================-->
            <div class="clearfix overviews-holder">
                <div class="left overviews">
                    <img src="../img/methodology_mini.jpg" alt="Our Methodology" />
                    <div class="service-copy">
                        <center>
                            <h2>Our Methodology</h2>
                        </center>
                        <p>Various methodologies are used to ensure the successful implementation of projects, including SDLC and Agile. We also have extensive experience in business process management technologies such as workflow and electronic content management(ECM).</p>
                        <a class="dotted-top-bottom" href="#">Methodology &amp; Services</a>
                    </div>
                </div>
                <div class="left overviews overview-mid">
                    <img src="../img/about_mini.jpg" alt="About OIM" />
                    <div class="service-copy">
                        <center>
                            <h2>About OIM</h2>
                        </center>
                        <p>With over 25 years' experience in business improvement, Operational Improvement Management (OIM) advises several South African Blue-Chip companies and manages performance improvement assignments in Europe, Australia and USA and other African countries.</p>
                        <a class="dotted-top-bottom" href="#">Read more about OIM</a>
                    </div>
                </div>
                <div class="left overviews">
                    <img src="../img/testimonials_mini.jpg" alt="Testimonials" />
                    <div class="service-copy">
                        <center>
                            <h2>Client Testimonials</h2>
                        </center>
                        <p>"The OIM team has shown the ability to understand our requirements in this regard and delivered an effective framework for our ongoing future use. They are a valued 'member' of our strategy review team - their role is highly respected and much appreciated."</p>
                        <a class="dotted-top-bottom" href="#">View OIM's Clients</a>
                    </div>
                </div>
            </div>
            <!-- END 3 DIV OVERVIEW -->
            
            <!-- =====================================================
                                CLIENT SCROLLER
            ==========================================================-->
            <h2>Clients</h2>
            <ul id="scroller">
                <li><img src="../img/1.jpg" /></li>
                <li><img src="../img/2.jpg" /></li>
                <li><img src="../img/3.jpg" /></li>
            </ul>
            <!-- END CLIENT SCROLLER -->
        </div>
        <!-- END BODY -->
        
        <!-- BEGIN FOOTER -->
        <footer>
            <?php include '../includes/footer.php' ?>
        </footer>
        <!-- END FOOTER -->
    </body>
</html>
