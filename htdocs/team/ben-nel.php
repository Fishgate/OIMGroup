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
        <title>Leadership Team - Ben Nel | OIM</title>
        <meta name="description" content="Ben Nel is a director at OIM and has a consulting career spanning 21 years and expertise in production management optimisation and  process analysis">
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
                <div class='breadcrumb'><i class="icon-map-marker icon-large red"></i> &nbsp;YOU ARE HERE: <a href='index.php'>Team</a> / <span class='red'>Ben Nel</span></div>
                <h1>Our Leadership Team</h1>
                <div class='copy'>
                    <img src="<?php echo $relpath; ?>/img/team/ben_large.jpg" />
                    <p><span class="member-name">Ben Nel</span></p>
                    <p>Director</p>
                    <p>With a consulting career spanning 21 years, Ben Nel can lay claim to extensive expertise in production management optimisation, process analysis and improvement, process re-engineering and call centre optimisation in most industries.</p>
                    
                    <h2>Work Experience</h2>
                    <p>Ben has served in senior management positions at various consulting firms over the years. This includes being partner at Rethink Management Consulting where his list of leading clients included Woolworths Financial Services, Allan Gray, Glacier Financial Services, Metropolitan Life, Brandhouse, Old Mutual Client Services and Employee Benefits, Liberty Corporate Benefits, Clicks and Truworths. He also worked as consultant at Alexander Proudfoot for three years, where his projects included a business improvement and call centre implementation in Melbourne, Australia. Prior to this he had been a business analyst at Sanlam’s Process Analysis and Improvement Department for four years.</p>
                    
                    <h2>At OIM</h2>
                    <p>As a director of OIM, Ben currently serves on the board. He is also a founder of the Operations Solutions division that was established in July 2010, oversees all the operations management interventions.</p>
                    
                    <h2>Qualifications</h2>
                    <p>
                    <ul>
                        <li>BComm Honours in Business Management – Stellenbosch University (1997)</li>
                    </ul>
                    </p>
                    
                    <h2>On A Personal Note</h2>
                    <p>An avid mountain biker, Ben spends much of his free time on the outdoor trails around Stellenbosch, Tokai, Grabouw and Durbanville, and also likes to challenge his children to a game of PlayStation Move. He recently attempted skateboarding, but won’t’ be doing that again anytime soon . . .</p>
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
