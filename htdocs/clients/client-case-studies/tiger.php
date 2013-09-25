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
                <div class='breadcrumb'><i class="icon-map-marker icon-large red"></i> &nbsp;YOU ARE HERE: <a href="<?php echo $relpath; ?>clients/index.php">Clients</a> / <span class='red'>Case Studies</span> / <span class='red'>Tiger Brands</span></div>
                <h1>Client Case Studies</h1>
                <div class='copy'>
                    <p><img src="<?php echo $relpath; ?>img/clients/tiger.gif" /><br/><br/></p>
                    <p>
                        <strong>Industry:</strong> Fast-moving consumer goods (FMCG)<br/>
                        <strong>OIM offering:</strong> Performance improvement methodology, employee engagement (INVOCOMS), employee relations
                    </p>
 
                    <p>
                        <strong>About the partnership</strong><br/>
                        Our relationship with Tiger Brands dates back to 1995 with the implementation of OIM’s employee engagement methodology at the former Langeberg Foods, which later became part of the company’s culinary division. Given the success of this methodology, it was rolled out to the manufacturing function with a reach of about 65 factories. The roll-out focused on our methodology being the basis of their performance management culture and people management practices. Over the past few years OIM has been involved in the training of new leaders, implementing the methodology at new premises, running refresher courses and conducting quality assurance. With the wave of violent strikes that hit the country from 2010 onwards, the company has also used our employee relations (ER) approach to establish a sound ER strategy and stabilise management-union relations.
                    </p>
                    
                    <p>
                        <strong>The client view</strong><br/>
                        “I have been working with OIM since 2000. They are a professional bunch of individuals with an exceptional knowledge of the Labour Relations Act, as well as conflict resolution skills. I can comment and vouch for their ability to be impartial and to give sober advice on any industrial relations situation. Their expertise in organisational improvement techniques is well developed.”
                        <br/><span class="right">Fred Dollie, Supply Chain Executive: Tiger Brands</span>
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
