<?php require_once '../config.php'; ?>

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
                <div class='breadcrumb'><i class="icon-map-marker icon-large red"></i> &nbsp;YOU ARE HERE: <a href='#'>News</a> / <span class='red'>Category Name</span></div>
                <h1>Category Name</h1>
                <!--==================================== NEWS ARTICLE =====-->
                <div class="news-holder dotted-bottom clearfix">
                    <div class="left news-date"><span class="day">09</span><span class="month">Sep</span></div>
                    <div class="left news-article">
                        <article class="clearfix">
                            <header class="news-head">Heading</header>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at iaculis sapien, et mollis quam. Duis lobortis, risus ac iaculis tincidunt, ipsum elit aliquet felis, nec adipiscing lacus enim quis mi. In sit amet sem et augue elementum cursus congue id lorem. Sed vehicula a dolor in mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a eros sit amet nunc sodales pellentesque at at massa. Etiam sed est scelerisque, feugiat ipsum ac, venenatis mi.</p>
                            <div class="left news-readmore"><i class="icon-angle-right icon-large"></i>&nbsp;<a href="#">Read More</a></div>
                            <div class="right">Posted in <a href="#">Coverage</a></div>
                        </article>
                    </div>
                </div>
                <!--==================================== NEWS ARTICLE =====-->
                <div class="news-holder dotted-bottom clearfix">
                    <div class="left news-date"><span class="day">17</span><span class="month">Sep</span></div>
                    <div class="left news-article">
                        <article class="clearfix">
                            <header class="news-head">Heading</header>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at iaculis sapien, et mollis quam. Duis lobortis, risus ac iaculis tincidunt, ipsum elit aliquet felis, nec adipiscing lacus enim quis mi. In sit amet sem et augue elementum cursus congue id lorem. Sed vehicula a dolor in mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a eros sit amet nunc sodales pellentesque at at massa. Etiam sed est scelerisque, feugiat ipsum ac, venenatis mi.</p>
                            <div class="left news-readmore"><i class="icon-angle-right icon-large"></i>&nbsp;<a href="#">Read More</a></div>
                            <div class="right">Posted in <a href="#">Coverage</a></div>
                        </article>
                    </div>
                </div>
            </div>
            <div id='sidebar' class='left'>
                <?php 
                include "../includes/sidebar/widget-categories.php"; 
                include "../includes/sidebar/widget-archive.php";
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
