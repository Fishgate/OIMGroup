<?php $relpath = "../"; ?>
<?php $pagetype = "about"; ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <!-- BEGIN HEAD -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Management Consulting | B-BBEE Certificate | OIM</title>
        <meta name="description" content="OIM provide management consulting and are a level two contributor to broad-based black economic empowerment (BBEEE) in South Africa">
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
                <div class='breadcrumb'><i class="icon-map-marker icon-large red"></i> &nbsp;YOU ARE HERE: <a href='index.php'>About OIM</a> / <span class='red'>BEE</span></div>
                <h1>BEE</h1>
                <div class='copy'>
                    <p>OIM is a level two BBBEE contributor</p>
                    
                    <p><a href='<?php echo $relpath; ?>downloads/pdf/bee.pdf' target='_blank'>Click here</a> to download our latest accreditation certificate.</p>
                    
                    <div class="widget"><div class="sidebar-content-holder"><a href='<?php echo $relpath; ?>downloads/pdf/bee.pdf' target='_blank'><img src="<?php echo $relpath; ?>img/pdf-thumbs/bee.jpg" border='0'/></a></div></div>
                </div>
            </div>
            <div id='sidebar' class='left'>
                <?php 
                include $relpath.'includes/sidebar/widget-more-about-oim.php'; 
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
