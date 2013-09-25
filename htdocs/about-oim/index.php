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
        <title>Business Performance Management | About OIM</title>
        <meta name="description" content="Operational Improvement Management (OIM) are business performance specialists with a unique approach to business performance management and strategy">
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
                <div class='breadcrumb'><i class="icon-map-marker icon-large red"></i> &nbsp;YOU ARE HERE: <span class='red'>About OIM</span></div>
                <h1>Overview</h1>
                <div class='copy'>
                    <p>Business performance specialists Operational Improvement Management (OIM) advises several South African blue-chip companies and has managed assignments in Europe, Australia, America and other African countries.</p>

                    <p>With a proven track record dating back to 1985, we specialise in the key areas of people management, organisational improvement and operations management.</p> 

                    <p>Over the years OIM has developed a unique, integrated approach to business performance management and strategy execution in these areas. We believe our model focuses on the main elements of a successful organisation and provides a framework for: 
                        <ul>
                            <li>Strategy definition</li>
                            <li>Business architecture and alignment</li>
                            <li>Effective leadership and talent management</li>
                            <li>Employee relations and stakeholder engagement</li> 
                            <li>Operations management, optimisation and continuous improvement</li> 
                            <li>Performance measurement and improvement</li>
                        </ul>
                    </p>
                    
                    <p>Our multidisciplinary team offers seamless implementation of these elements, obviating the need for calling in various business consultants with incompatible methodologies and confusing terminologies.</p> 

                    <p>But don’t take our word for it – <a href="<?php echo $relpath ?>clients">read what our clients have to say</a>.</p>

                    
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
