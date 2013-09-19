<?php $relpath = "../../../"; ?>
<?php $pagetype = "team_dynamics"; ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <!-- BEGIN HEAD -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Team Dynamics - Team Performance | OIM</title>
        <meta name="description" content="OIM helps optimise team dyamics and performance using a well-known methodology to help team members understand one another's strengths">
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
            <div id='body' class='left'>
                <div class='breadcrumb'><i class="icon-map-marker icon-large red"></i> &nbsp;YOU ARE HERE: <span class='red'>Products & Services</span> / <span class='red'>People Management</span> / <span class='red'>Leadership and Team Interventions</span></div>
                <h1>Team Dynamics</h1>
                <div class='caption'><span>Optimising team performance</span></div>
                <div class='copy'>
                    <p>With the vast difference in personal preferences and work styles, we understand that team dynamics can be a challenge and negatively affect business performance.</p> 

                    <p>OIM helps team members to better understand one another’s strengths, how the behavioural strengths in the team complement each other and how to adapt to various personal preferences.</p> 

                    <p>The result is a collective focus on and common understanding of team goals.</p>

                    <h2>Our offering</h2>
                    <p>OIM uses the well-known Insights® methodology to facilitate learning in an entertaining way. This offering includes:
                        <ul>
                            <li><strong>Online assessments</strong> to determine each team member’s natural behavioural preferences, strengths and development areas.</li>
                            <li><strong>Individual sessions</strong> to provide feedback on the reports that have been generated.</li>
                            <li><strong>Facilitated team sessions</strong> to deepen understanding, practise communication skills, gain a collective focus on team scorecards and improve team performance.</li> 
                        </ul>
                    </p>	

                    <h2>The OIM difference</h2>
                    <p>
                        <ul>
                            <li>OIM’s leadership talent team comprises registered industrial psychologists and organisational development practitioners with years of experience in talent management, leadership development and team dynamics.</li>
                            <li>We have successfully conducted team interventions in a range of industries, including retail, finance, manufacturing, fast-moving consumer goods and mining.</li>
                            <li>To optimise results, we prefer to conduct team interventions in the context of your business strategy and other organisational performance improvement initiatives.</li>
                            <li>Our team dynamics offering can be seamlessly integrated with other aspects of OIM’s comprehensive performance methodology.</li>
                        </ul>
                    </p>
                </div>
            </div>
            <div id='sidebar' class='left'>
                <?php 
                include $relpath.'includes/sidebar/widget-az-product-listing.php'; 
                include $relpath.'includes/sidebar/widget-download-pdf-temp1.php'; 
                include $relpath.'includes/sidebar/widget-contact-us.php'; 
                ?>
            </div>
        </div>
        <!-- END BODY -->
        
        <!-- BEGIN FOOTER -->
        <footer>
            <?php include $relpath.'includes/footer.php' ?>
        </footer>
        <!-- END FOOTER -->
    </body>
</html>
