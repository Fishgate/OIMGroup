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
                <div class='breadcrumb'><i class="icon-map-marker icon-large red"></i> &nbsp;YOU ARE HERE: <a href="../index.php">Clients</a> <span class='red'>/ Case Studies / Afripak</span></div>
                <h1>Client Case Studies</h1>
                <div class='copy'>
                    <img src="http://www.placehold.it/150x200" alt="Client Logo" />
                    <p>
                        <b>Industry:</b> Manufacturing<br />
                        <b>OIM offering:</b> Strategic planning and employee engagement methodology (INVOCOMS)
                    </p>
                    
                    <h3>The partnership</h3>
                    <p>COPY</p>
                        
                    <h3>The client view</h3>
                    <p>COPY</p>
                    
                    <p>
                        Eugene Beneke<br />
                        CEO: Iliad
                    </p>
                </div>
            </div>
            <div id='sidebar' class='left'>
                <?php 
                include "../includes/sidebar/widget-client-case-studies.php"; 
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
