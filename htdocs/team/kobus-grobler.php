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
        <title>Leadership Team - Kobus Grobler | OIM</title>
        <meta name="description" content="Kobus Grobler is a director at OIM and has 24 years’ experience in business and organisational development, both locally and abroad">
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
                <div class='breadcrumb'><i class="icon-map-marker icon-large red"></i> &nbsp;YOU ARE HERE: <a href='index.php'>Team</a> / <span class='red'>Kobus Grobler</span></div>
                <h1>Our Leadership Team</h1>
                <div class='copy'>
                    <img src="<?php echo $relpath; ?>/img/team/kobus_large.jpg" />
                    <p><span class="member-name">Kobus Grobler</span></p>
                    <p>Director</p>
                    <p>Director Kobus Grobler has 24 years’ experience in business and organisational development, both locally and abroad. He has consulted widely in sectors such as broadcasting, mining, petroleum, production, the food and aviation industries and for non-profit organisations.</p>
                    
                    <h2>Work Experience</h2>
                    <p>Before joining OIM, Kobus was human resources manager at Sasol for two years where he implemented the OIM methodology. He was responsible for industrial relations, the analysis of training needs, the development and implementation of various training programmes, personnel development and effective workforce utilisation.</p>
                    
                    <h2>At OIM</h2>
                    <p>After working with its methodology, Kobus joined OIM in 1989 and became a director in 1991. He also served as the group’s managing and operational directors for extended periods. Over the years he has played a major role in OIM’s product development, the establishment of the value chain offering, conflict resolution projects and international business development. Kobus ran several business development assignments in India, China, Australia, Hong Kong, Japan, Singapore, Germany, Holland, Ghana, Nigeria, Cameroon and Mauritius. He has also presented several papers at international conferences on topics such as entrepreneurship and business leadership, operational excellence, mindset change and creating a conducive culture for business optimisation</p>
                    
                    <h2>Qualifications</h2>
                    <p>
                    <ul>
                        <li>BSocSc Honours (Psychology and Social Work) – University of the Free State (1984)</li>
                    </ul>
                    </p>
                    
                    <h2>On A Personal Note</h2>
                    <p>Over weekends chances are that you’ll catch Kobus doing one of four activities: scuba diving, fishing, cooking or supporting “his team”, the Cheetahs.</p>
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
