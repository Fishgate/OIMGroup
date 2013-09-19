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
        <title>Performance Management | Contact Us| OIM</title>
        <meta name="description" content="Contact us on +27 (0)21 913 8814. OIM is also available via email to help set up your business strategy for business improvement and preformance management">
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
                <div class='breadcrumb'><i class="icon-map-marker icon-large red"></i> &nbsp;YOU ARE HERE: <span class='red'>Contact Us</span></div>
                <h1>Contact Us</h1>
                <div class='copy'>
                    <div class="contact-details-container clearfix">
                        <div>
                            <h2>Contact Details</h2>
                            <p>
                                Tel: +27 21 913 8814/5<br />
                                Email: info@oimgroup.com<br /><br />
                                Speak to our managing director,
                                <a href="mailto:minnaar@oimgroup.com">Tjaart Minnaar</a>
                            </p>

                        </div>

                        <div>
                            <h2>Street Address</h2>
                            <p>
                                OIM (Pty) Ltd<br />
                                The Vineyard Square South<br />
                                The Vineyard Office Park<br />
                                99 Jip de Jager<br />
                                Welgemoed<br />
                                7530
                            </p>
                        </div>

                        <div>
                            <h2>Postal Address</h2>
                            <p>
                                OIM (Pty) Ltd<br />
                                PO Box 6286<br />
                                Welgemoed<br />
                                7538
                            </p>
                        </div>
                    </div>
                    
                    <div class="contact-map-container">
                        <div class="map-container-header">
                            <h2>Map</h2>
                            <div>
                                <i class="icon-download-alt icon-2x"></i>
                                <a href="<?php echo $relpath; ?>downloads/pdf/directions.pdf" target='_blank'>Download Map</a>
                            </div>
                        </div>
                        <a target="_blank" href="https://maps.google.com/maps?q=OIM+International+(Pty)+Ltd,+Cape+Town,+South+Africa&hl=en&ll=-33.855181,18.626032&spn=0.010995,0.019484&sll=37.0625,-95.677068&sspn=46.092115,79.804688&oq=OIM+International+(Pty)+Ltd&t=m&z=16&iwloc=A"><img src="<?php echo $relpath; ?>img/contact-map.jpg" alt="OIM International Map" /></a>
                    </div>
                    
                    <div class="contact-information-container">
                        <h2>Company Information</h2>
                        <p>Registration Number: 1985/005524/07</p>
                        <p>Vat Number: 446 010 7230</p>                            
                    </div>
                </div>
            </div>
            <div id='sidebar' class='left'>
                <?php 
                    include $relpath.'includes/sidebar/widget-enquiries.php'; 
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
