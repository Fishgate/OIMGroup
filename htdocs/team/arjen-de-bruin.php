<?php $relpath = "../"; ?>
<?php $pagetype = "team_mini"; ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <!-- BEGIN HEAD -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Leadership Team - Arjen De Bruin | OIM</title>
        <meta name="description" content="Arjen De Bruin is the MD of Operations Solutions at OIM and has 21 years' experience in process redesign, production management and process automation">
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
                <div class='breadcrumb'><i class="icon-map-marker icon-large red"></i> &nbsp;YOU ARE HERE: <a href='index.php'>Team</a> / <span class='red'>Arjen de Bruin</span></div>
                <h1>Our Leadership Team</h1>
                <div class='copy'>
                    <img src="<?php echo $relpath; ?>img/team/arjen_large.jpg" />
                    <p><span class="member-name">Arjen de Bruin</span></p>
                    <p>MD: Operations Solutions</p>
                    
                    <p>Arjen de Bruin boasts 21 years’ consulting experience in process redesign, production management and process automation. He has successfully led business improvement projects for several leading South African companies in industries such as financial services, manufacturing, retail and debt collection as well as the public sector. During this time he gained extensive experience in productivity improvement, process re-engineering, business specifications for electronic content management (ECM) technologies, call-centre optimisation and improvement methodologies such as Lean.</p>
                    
                    <h2>Work Experience</h2>
                    <p>Before joining OIM, Arjen served as Cape regional director of management consultancy firm Rethink, focusing on business improvement and process automation. Prior to this he held the position of installation specialist at global operational improvement firm Alexander Proudfoot Consulting and worked as process analyst for Sanlam Insurance.</p>
                    
                    <h2>At OIM</h2>
                    <p>Arjen currently runs OIM’s Operations Solution division which specialises in business process and system optimisation. He heads up a team of about 25 seasoned consultants who have proven expertise in a range of operational effectiveness and continuous improvement solutions. Arjen was also instrumental in establishing the joint venture, <a href="http://www.oimumbono.com" target="_blank" >OIM Umbono Mining Solutions</a> to unlock operational efficiency in the mining industry.</p>
                    
                    <h2>Qualifications</h2>
                    <p>
                    <ul>
                        <li>BA Industrial Psychology – Stellenbosch University (1988)</li>
                        <li>Practical Project Management – University of South Africa (1997)</li>
                    </ul>
                    </p>
                    
                    <h2>On A Personal Note</h2>
                    <p>Between playing hide and seek with young son, Luke Nathan, Arjen enjoys watching all kinds of sport and is an avid Dutch soccer supporter. For relaxation he enjoys reading history books and loves travelling, especially to his favourite destination, New York.</p>
                </div>
            </div>
            <div id='sidebar' class='left'>
                <?php  
                include $relpath.'includes/sidebar/widget-other-team-members.php'; 
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
