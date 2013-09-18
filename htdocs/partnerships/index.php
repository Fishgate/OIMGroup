<?php require_once '../config.php'; ?>

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
                <div class='breadcrumb'><i class="icon-map-marker icon-large red"></i> &nbsp;YOU ARE HERE: <span class='red'>Partnerships</span></div>
                <h1>Partnerships</h1>
                <div class='copy'>
                    <img src="../img/partnerships/umbono.gif" />
                    <p>OIM Umbono Mining Solutions is a joint venture between OIM and Umbono Capital, combining the unique skills and experience of the two companies to unlock operational efficiency in the mining industry.</p>

                    <p>Visit <a href='http://www.oimumbono.com' target='_blank'>www.oimumbono.com</a> and <a href='http://www.umbono.com' target='_blank'>www.umbono.com</a> for more information.</p>
                    
                    <hr/>
                    
                    <p>In offering our leadership assessment and development interventions we have teamed up with several leading international talent management houses.</p>
                    
                    <hr/>
                    
                    <img src="../img/partnerships/saville.gif" />
                    <p>Saville Consulting develops rigorous and work-relevant assessment tools that measure the critical fit between individuals, job requirements and workplace culture.</p> 

                    <p>For more information on this leader in its field, visit <a href='http://www.savilleconsulting.co.za' target='_blank'>www.savilleconsulting.co.za</a>.</p>
                    
                    <hr/>
                    
                    <img src="../img/partnerships/shl.gif" />
                    <p>Shl, a global leader in talent measurement, offers employment testing tools and employee development assessment services.</p>

                    <p>Visit <a href='http://www.shl.com' target='_blank'>www.shl.com</a> for information on their extensive solutions and expertise.</p>
                    
                    <p>Everyone who has ever worked in a team-driven environment understands the importance of solid relations and work methods to get things done.</p>
                    
                    <hr/>
                    
                    <img src="../img/partnerships/insights.gif" />
                    <p>With Insight’s international track record spanning 20 years, we use the Insights® methodology to improve team effectiveness at our clients. It helps people to learn about themselves and others in a practical, results-driven way using colours and fun exercises.</p>

                    <p>Read more about this methodology and case studies at <a href='http://www.insights.com' target='_blank'>www.insights.com</a>.</p>
                    
                    <hr/>
                    
                    <img src="../img/partnerships/pure.gif" />
                    <p>As one of South Africa’s leaders on online surveys for customers, employees and market research, we have partnered with Pure Survey to provide affordable, innovative and effective stakeholder perception surveys. Surveys are customised for each client’s unique needs and the main goal is useful reporting and data analysis that you, as the customer, require to effectively measure and manage your environment.</p>

                    <p>Visit <a href='http://www.puresurvey.co.za' target='_blank'>www.puresurvey.co.za</a> for more information.</p>
                    
                </div>
            </div>
            <div id='sidebar' class='left'>
                <?php 
                include "../includes/sidebar/widget-contact-us.php"; 
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
