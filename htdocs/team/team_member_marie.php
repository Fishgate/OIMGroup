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
                <div class='breadcrumb'><i class="icon-map-marker icon-large red"></i> &nbsp;YOU ARE HERE: <a href='index.php'>Team</a> / <span class='red'>Mari&eacute; Burger</span></div>
                <h1>Our Leadership Team</h1>
                <div class='copy'>
                    <img class="response-img" src="http://placehold.it/500x200" />
                    <span class="member-name">Mari&eacute; Burger</span>
                    <p>Financial director</p>
                    <p>As a chartered accountant and financial director of OIM, Marié has played a crucial rule in the restructuring and centralisation of the finance function, setting up new business ventures and negotiating shareholding contracts. </p>
                    
                    <h2>Work Experience</h2>
                    <p>After completing her studies, Marié worked as a trainee accountant at prestigious auditing firm PricewaterhouseCoopers for three years. In March 2009 she was appointed assistant manager at the company, dealing with major clients such as Remgro, Shoprite and Agrico Machinery.</p>
                    
                    <h2>At OIM</h2>
                    <p>Mari&eacute; joined OIM in January 2010 as financial manager and stepped into the position of financial director in November the same year. Since her appointment she has made a marked impact and currently plays a key role in new-business development, such as the joint venture OIM Umbono Mining Solutions and the one-company initiative early in 2013. </p>
                    
                    <h2>Qualifications</h2>
                    <p>
                    <ul>
                        <li>Hons B Accounting – Stellenbosch University (2005)</li>
                        <li>Postgraduate Diploma in Auditing (APT) – University of Cape Town (2007)</li>
                        <li>Registered with the South African Institute of Chartered Accountants</li>
                    </ul>
                    </p>
                    
                    <h2>On A Personal Note</h2>
                    <p>Mari&eacute; gives expression to her creative side by painting portraits and landscapes, a hobby she has practised since her teenage years. She also enjoys mountain biking with her husband and experimenting in the kitchen.</p>
                </div>
            </div>
            <div id='sidebar' class='left'>
                <?php  
                include "../includes/sidebar/widget-other-team-members.php"; 
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
