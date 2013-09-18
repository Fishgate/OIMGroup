<?php $relpath = "../"; ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <!-- BEGIN HEAD -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Leadership Team - Frank Hickman | OIM</title>
        <meta name="description" content="Frank Hickman, the MD of Performance Improvement at OIM has 22 years' consulting and project management experience in various industries">
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
                <div class='breadcrumb'><i class="icon-map-marker icon-large red"></i> &nbsp;YOU ARE HERE: <a href='index.php'>Team</a> / <span class='red'>Frank Hickman</span></div>
                <h1>Our Leadership Team</h1>
                <div class='copy'>
                    <img src="<?php echo $relpath; ?>/img/team/frank_large.jpg" />
                    <p><span class="member-name">Frank Hickman</span></p>
                    <p>MD: Performance Improvement</p>
                    <p>Frank Hickman has 22 years’ consulting and project management experience in various industries. He specialises in process design and productivity improvement but has also worked extensively in areas such as employee relations, performance improvement and conflict resolution.</p>
                   
                    <h2>Work Experience</h2>
                    <p>After graduating, Frank joined the National Training Institute as a performance improvement consultant in the motor, food, textile and transport industries. Focusing on people management, he did everything from facilitating strategic sessions to implementing change processes. In 1992 he joined the Simba Group as group organisational development manager.</p>
                    
                    <h2>At OIM</h2>
                    <p>Frank joined OIM as a consultant in 1996 and was appointed director and shareholder three years later. In July 2013, after internal restructuring process to merge the lines of business into one company, Frank was elected managing director of the Performance Improvement division within the company. Among his successes at OIM are the comprehensive seven-year business improvement project for Anglo Platinum and a workplace improvement project for consumer foods giant Tiger Brands.</p>
                    
                    <h2>Qualifications</h2>
                    <p>
                    <ul>
                        <li>BEcon – Stellenbosch University (1987)</li>
                    </ul>
                    </p>
                    
                    <h2>On A Personal Note</h2>
                    <p>A keen traveller, Frank has visited countries such as England, France, Greece, Italy, Mexico, Portugal and Spain. He also dabbles in the stock market but when he really wants to kick back he dips into a novel by Pulitzer prizewinner James A Michener.</p>
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
