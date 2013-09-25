<?php $relpath = "../../"; ?>
<?php $pagetype = "clients"; ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <!-- BEGIN HEAD -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Client Case Studies | OIM</title>
        <meta name="description" content="OIM has achieved performance management success in various industries such as manufacturing. Read our case studies of our client successes">
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
                <div class='breadcrumb'><i class="icon-map-marker icon-large red"></i> &nbsp;YOU ARE HERE: <a href="<?php echo $relpath; ?>clients/index.php">Clients</a> / <span class='red'>Case Studies</span> / <span class='red'>Khumani</span></div>
                <h1>Client Case Studies</h1>
                <div class='copy'>
                    <p><img src="<?php echo $relpath; ?>img/clients/khumani.gif" /><br/><br/></p>
                    <p>
                        <strong>Industry:</strong> Mining<br/>
                        <strong>OIM offering:</strong> Operations management, culture change, supervisory development and employee engagement
                    </p>
 
                    <p>
                        <strong>About the partnership</strong><br/>
                        OIM has been working with the Assmang’s Group iron-ore mine in the Northern Cape, Khumani, since about May 2011, focusing on operational optimisation, culture change and supervisory skills development. At last count this multidisciplinary intervention resulted in improved plant revenue of about R480 million over seven months. The supervisory programme showed an overall productivity improvement of 10-15%, while supervisory competencies in general improved by 10% on average, and planning and organising competencies by 30% over a period of four months.
                        <br/><br/>Following these results OIM has been asked to run similar interventions at Khumani’s sister mine near Black Rock, which it has been doing since December 2012. As part of our partnership OIM has also its expertise to assist with smaller interventions such as employee relations and diversity awareness.
                    </p>
                    
                    <p>
                        <strong>The client view</strong><br/>
                        “I have worked with OIM at three different companies in the past. This is a result of employees buying into the products and services, and implementing them and accepting responsibility for the outcomes. The fact that we continuously make use of OIM’s services is testimony to the outcomes achieved.”
                        <br/><span class="right">Pierre Becker, senior general manager at the Assmang Group</span>
                     </p>   
                    
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
