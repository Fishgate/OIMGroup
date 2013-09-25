<?php $relpath = "../"; ?>
<?php $pagetype = "careers"; ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <!-- BEGIN HEAD -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Careers Opportunities & Jobs Available at OIM</title>
        <meta name="description" content="OIM offers career opportunities with proven experience and relevant academic qualifications in performance, operations, leadership and talent management">
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
                <div class='breadcrumb'><i class="icon-map-marker icon-large red"></i> &nbsp;YOU ARE HERE: <span class='red'>Careers</span></div>
                <h1>Careers at OIM</h1>
                <div class='copy'>
                    <p>OIM prides itself in its ability to deliver results and has a strong commitment to service delivery. As such, we place a high premium on the quality of our consultants and team members.</p>

                    <p>We offer career opportunities for people with proven experience and relevant academic qualifications in the areas of:
                    <ul>
                        <li>Organisational performance improvement</li>
                        <li>Human resources / employee relations / organisational development / learning & development</li>
                        <li>Operations management</li>
                        <li>Leadership development and talent management</li>
                    </ul>
                    </p>

                    <p>If you fit this bill and have a willingness to travel quite extensively you are welcome to contact us! Also
                    keep an eye on our <a href='http://za.linkedin.com/company/oim-international-pty-ltd?trk=ppro_cprof' target='_blank'>LinkedIN page</a> where we post most of our vacancies.</p>

                    <p>For more information, or to submit your CV, please mail Suzanne van Zyl at <a href='mailto:svanzyl@oimgroup.com'>svanzyl@oimgroup.com</a>
                    or call her on +27 21 913 8814/5.</p>
                </div>
            </div>
            <div id='sidebar' class='left'>
                <?php 
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
