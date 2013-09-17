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
            <div id='body' class='left'>
                <div class='breadcrumb'><i class="icon-map-marker icon-large red"></i> &nbsp;YOU ARE HERE: <a href="index.php">Clients</a> <span class='red'>/ Case Studies / Afripak</span></div>
                <h1>Clients</h1>
                <div class='copy'>
                    <p>OIM has a proven track record in many countries, across several continents and industries.</p>

                    <p>We have built long-term partnerships with many of our clients who trust us implicitly to help create sustainable solutions and, as a result, have referred business associates to us.</p>

                    <p>We also take pride in how several of our clients have consistently excelled in the prestigious Deloitte Best Company to Work For Survey. PPC Cement, for example, was the winner in the category best manufacturing company for five years running and was named top South African employer in 2005. Both Robor (2011, 2010 & 2009) and Plascon (2008) scooped the best manufacturing award, while Barloworld Logistics twice came out tops in the category best logistics, shipping and transport.</p>
                    
                    <h2>Industries and Countries</h2>
                    
                    <p>We have completed assignments in countries such as Australia, Belgium, Botswana, France, Germany, the Netherlands, Spain, the UK, America, Namibia, Malawi, Mauritius, Nigeria and Zimbabwe.</p>

                    <p>These assignments covered a wide spectrum of industries, including:
                    <ul>
                    <li>Construction</li>
                    <li>Education</li>
                    <li>Engineering</li>
                    <li>Food</li>
                    <li>IT and telecommunication</li>
                    <li>Industrial</li>
                    <li>Manufacturing</li>
                    <li>Mining</li>
                    <li>Public sector (regional government)</li>
                    <li>Retail</li>
                    <li>Financial services</li>
                    <li>Tobacco, wine & spirits</li>
                    </ul>
                    </p>

                    <p>Our Client list include:</p>
                    <div class="clients-all-holder">
                        <img src="../img/oim_clients.jpg" alt="OIM Clients" />
                    </div>
                </div>
            </div>
            <div id='sidebar' class='left'>
                <?php 
                include "../includes/sidebar/widget-client-case-studies.php"; 
                ?>
            </div>
        </div>
        <!-- END BODY -->
        
        <!-- BEGIN FOOTER -->
        <footer>
            <?php include '../includes/footer.php' ?>
        </footer>
        <!-- END FOOTER -->
    </body>
</html>
