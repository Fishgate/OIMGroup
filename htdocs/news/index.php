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
                <div class='breadcrumb'><i class="icon-map-marker icon-large red"></i> &nbsp;YOU ARE HERE: <a href='#'>News</a></div>
                <h1>News</h1>
                <!--==================================== NEWS ARTICLE =====-->
                <div class="news-holder dotted-bottom clearfix">
                    <div class="left news-date"><span class="day">02</span><span class="month">Aug</span></div>
                    <div class="left news-article">
                        <article class="clearfix">
                            <header class="news-head">The future of Labour Relations in SA</header>
                            <p>02 August 2013: South Africa’s labour relations is at a defining moment in our country’s history. Over the past few years, unprotected strike action has escalated into an uncontrolled, violent and unlawful landscape, led by a mob mentality in the absence of formal and recognised leaders.</p>
                            <div class="left news-readmore"><i class="icon-angle-right icon-large"></i>&nbsp;<a href="news_article_labour_press.php">Read More</a></div>
                            <div class="right">Posted in <a href="news_cat_press.php">Press Releases</a></div>
                        </article>
                    </div>
                </div>
                <!--==================================== NEWS ARTICLE =====-->
                <div class="news-holder dotted-bottom clearfix">
                    <div class="left news-date"><span class="day">01</span><span class="month">Jul</span></div>
                    <div class="left news-article">
                        <article class="clearfix">
                            <header class="news-head">SA cannot afford another mining<br />strike scenario</header>
                            <p>Last week wage discussions in the gold industry took an interesting turn with the Chamber referring the matter to the CCMA with regards to the trade union, AMCU, and thereby placing the negotiations on a different level with mediators stepping in to break the impasse between the employers and AMCU.</p>
                            <div class="left news-readmore"><i class="icon-angle-right icon-large"></i>&nbsp;<a href="news_article_mining_strike_press.php">Read More</a></div>
                            <div class="right">Posted in <a href="news_cat_press.php">Coverage</a></div>
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
