<?php $relpath = "../"; ?>
<?php $pagetype = ""; ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <!-- BEGIN HEAD -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Business Management & Process Improvement Consultants | OIM</title>
        <meta name="description" content="OIM International are leading business performance consultants in South Africa helping companies with human resource, organisation & operational improvement management">
        <meta name="viewport" content="width=device-width">

        <?php include $relpath.'includes/styles.php' ?>
        <!-- END HEAD -->
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- BEGIN HEADER -->
        <header id='header'>
            <?php include $relpath.'includes/header.php' ?>
        </header>
        <!-- END HEADER -->

        <!-- BEGIN BODY -->
        <div id='contentwrap' class='clearfix'>
            <!-- =====================================================
                                BEGIN INTRO COPY
            ==========================================================-->
            <center>
                <h1>Business Performance Specialist in core areas of</h1>
                <h2 class="h2-custom">PEOPLE MANAGEMENT</h2>
                <h2 class="h2-custom">ORGANISATIONAL PERFORMANCE</h2>
                <h2 class="h2-custom">OPERATIONAL OPTIMISATION</h2>
                
                <p id="intro-copy" class="dotted-top-bottom">
                    Over the years OIM has developed a unique, integrated approach to business performance management<br/> and strategy execution in these core areas. With a solid track record of working with Blue Chip companies both locally and abroad,<br/> our multidisciplinary team eliminates the need to call in various business consultants.
                
                    <br/><br/>Furthermore, our proven methodologies and way of working ensure that we can play an integral part<br/> in the continuous evolvement, progress and success of your business.
                </p>
                
            </center>
            <!-- END INTRO COPY -->
            
            <!-- =====================================================
                                BEGIN 3 DIV OVERVIEW
            ==========================================================-->
            <div class="clearfix overviews-holder">
                <div class="left overviews">
                    <img src="<?php echo $relpath; ?>img/methodology_mini.jpg" alt="Our Methodology" />
                    <div class="service-copy">
                        <center>
                            <h2>Our Methodology</h2>
                        </center>
                        <p>We use various methodologies to ensure the successful implementation of projects, including SDLC and Agile software, and have extensive experience in business process management technologies such as workflow and electronic content management (ECM).</p>
                        <a class="dotted-top-bottom" href="<?php echo $relpath; ?>about-oim/our-methodology.php">Methodology &amp; Services</a>
                    </div>
                </div>
                <div class="left overviews overview-mid">
                    <img src="<?php echo $relpath; ?>img/about_mini.jpg" alt="About OIM" />
                    <div class="service-copy">
                        <center>
                            <h2>About OIM</h2>
                        </center>
                        <p>With over 25 years' experience, Operational Improvement Management (OIM) advises several South African Blue-Chip companies and manages performance improvement assignments in Europe, Australia, America as well as other African countries.</p>
                        <a class="dotted-top-bottom" href="<?php echo $relpath; ?>about-oim">Read more about OIM</a>
                    </div>
                </div>
                <div class="left overviews">
                    <img src="<?php echo $relpath; ?>img/testimonials_mini.jpg" alt="Testimonials" />
                    <div class="service-copy">
                        <center>
                            <h2>Client Testimonials</h2>
                        </center>
                        <p>We have built long-term partnerships with many of our clients who trust us without reservation to help create sustainable solutions. "The OIM team has shown the ability to understand our requirements and delivered an effective framework for our on-going success. They are a valued 'member' of our strategy review team and their role is highly respected." Eugene Beneke, CEO: Iliad</p>
                        <a class="dotted-top-bottom" href="<?php echo $relpath; ?>clients">View OIM's clients</a>
                    </div>
                </div>
            </div>
            <!-- END 3 DIV OVERVIEW -->
            
            <!-- =====================================================
                                CLIENT SCROLLER
            ==========================================================-->
            <h2>Clients</h2>
            <ul id="scroller">
                <li><img src="../img/logos/allan_gray.gif" /></li>
                <li><img src="../img/logos/metropolitan.gif" /></li>
                <li><img src="../img/logos/momentum.gif" /></li>
                <li><img src="../img/logos/standard_bank.gif" /></li>
                <li><img src="../img/logos/woolworths.gif" /></li>
            </ul>
            <!-- END CLIENT SCROLLER -->
        </div>
        <!-- END BODY -->
        
        <!-- BEGIN FOOTER -->
        <footer>
            <?php include $relpath.'includes/footer.php' ?>
        </footer>
        <!-- END FOOTER -->
    </body>
</html>
