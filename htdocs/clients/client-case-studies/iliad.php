<?php $relpath = "../../"; ?>

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
                <div class='breadcrumb'><i class="icon-map-marker icon-large red"></i> &nbsp;YOU ARE HERE: <a href="index.php">Clients</a> <span class='red'>/ Case Studies / Lliad</span></div>
                <h1>Client Case Studies</h1>
                <div class='copy'>
                    <p><img src="<?php echo $relpath; ?>/img/clients/lliad.gif" /></p>
                    <p>
                        <strong>Industry:</strong> Industrial<br/>
                        <strong>OIM offering:</strong> Strategic planning
                    </p>

                    <p>
                        <strong>About the partnership</strong><br/>
                        OIM has facilitated the annual strategic planning process at Iliad for several years. We’ve helped Iliad with everything from research and scorecard development to the design of implementation tools and the establishment of regular reviews to ensure plans remain current. At this stage there is a solid framework with enough user-friendly templates and staff knowledge so Iliad can run the annual and ongoing reviews internally, with minimal support from OIM. We like to think that we helped Iliad establish a strategic thinking and planning capacity – which is exactly the focus of our strategic planning intervention.
                    </p>
                        
                    <p>
                        <strong>The client view</strong><br/>
                        “The annual strategy review is a key element of Iliad's corporate calendar. This process needs to address the relevant issues in a structured way, delivering a meaningful set of outcomes essential to the wellbeing of the business. The OIM team has shown the ability to understand our requirements in this regard and delivered an effective framework for our ongoing future use. They are a valued 'member' of our strategy review team - their role is highly respected and much appreciated.”
                    </p>
                    
                    <p class="right">Eugene Beneke, CEO: Iliad</p>
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
