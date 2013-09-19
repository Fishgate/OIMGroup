<?php $relpath = "../../"; ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <!-- BEGIN HEAD -->
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
                <div class='breadcrumb'><i class="icon-map-marker icon-large red"></i> &nbsp;YOU ARE HERE: <a href="<?php echo $relpath; ?>clients/index.php">Clients</a> <span class='red'>/ Case Studies / Premier Foods</span></div>
                <h1>Client Case Studies</h1>
                <div class='copy'>
                    <p><img src="<?php echo $relpath; ?>img/clients/premier.gif" /><br/><br/></p>
                    <p>
                        <strong>Industry:</strong> Fast-moving consumer goods<br/>
                        <strong>OIM offering:</strong> Comprehensive performance improvement methodology, strategic planning, scorecards, change communication, talent management
                    </p>

                    <p>
                        <strong>About the partnership</strong><br/>
                        Premier has been using OIM’s performance improvement methodology since 2003 with a renewed focus on our involvement since late 2010. Our integrated business model, which addresses the main elements required for performance management and strategy implementation, is used as the basis for Premier’s management and leadership practices while our employee engagement methodology (INVOCOMS) has been widely implemented throughout the business. Over the past few years OIM has also assisted Premier with strategic planning and scorecard development, a reward strategy, change communication and a framework for talent management.
                    </p>
                        
                    <p>
                        <strong>The client view</strong><br/>
                        “I have used OIM in five different companies over the past 20 years. Not only does the methodology work in any industry, but the OIM consultants are competent and takes a real interest in your business to ensure sustainable results.”
                    </p>
                    
                    <p class="right">Tjaart Kruger, CEO: Premier Foods</p>
                </div>
            </div>
            <div id='sidebar' class='left'>
                <?php 
                include $relpath.'includes/sidebar/widget-client-case-studies.php';
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
