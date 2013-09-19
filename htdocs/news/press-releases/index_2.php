<?php $relpath = "../../"; ?>
<?php $pagetype = "news"; ?>

<?php include $relpath.'config.php'; ?>

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
                <div class='breadcrumb'><i class="icon-map-marker icon-large red"></i> &nbsp;YOU ARE HERE: <span class="red">News</span> / <span class='red'>Press Releases</span></div>
                <h1>Press Releases</h1>
                <!--==================================== NEWS ARTICLE =====-->
                <div class="news-holder dotted-bottom clearfix">
                    <div class="left news-date"><span class="day">15</span><span class="month">Apr</span></div>
                    <div class="left news-article">
                        <article class="clearfix">
                            <header class="news-head">New appointment Jaco van der Merwe</header>
                            <p>Kevin Setzkorn has recently been appointed as Operation Solutions Consultant at OIM, one of South Africa’s leading business performance specialists. Setzkorn will be consulting on supervisory development projects at the company as well as providing on-the-floor coaching to supervisors.</p>
                            <div class="left news-readmore"><i class="icon-angle-right icon-large"></i>&nbsp;<a href="news_article_jaco_vdmerwe_press.php">Read More</a></div>
                            <div class="right">Posted in <a href="index.php">Press Releases</a></div>
                        </article>
                    </div>
                </div>
                <!--==================================== NEWS ARTICLE =====-->
                <div class="news-holder dotted-bottom clearfix">
                    <div class="left news-date"><span class="day">15</span><span class="month">Apr</span></div>
                    <div class="left news-article">
                        <article class="clearfix">
                            <header class="news-head">New appointment Kevin Setzkorn</header>
                            <p>Kevin Setzkorn has recently been appointed as Operation Solutions Consultant at OIM, one of South Africa’s leading business performance specialists. Setzkorn will be consulting on supervisory development projects at the company as well as providing on-the-floor coaching to supervisors.</p>
                            <div class="left news-readmore"><i class="icon-angle-right icon-large"></i>&nbsp;<a href="news_article_kevin_setzkorn_press.php">Read More</a></div>
                            <div class="right">Posted in <a href="index.php">Press Releases</a></div>
                        </article>
                    </div>
                </div>
                <!--==================================== NEWS ARTICLE =====-->
                <div class="news-holder dotted-bottom clearfix">
                    <div class="left news-date"><span class="day">01</span><span class="month">Mar</span></div>
                    <div class="left news-article">
                        <article class="clearfix">
                            <header class="news-head">DR. Mamphela Ramphele's shared value in business: Is it possible in SA?</header>
                            <p>We are at a defining moment in our country’s history. The tragic violence brought on by Marikana, the multitude of service boycotts, countless reports of corruption, ineffective policy execution and high inequality levels in South Africa, are indicators that the country has broadly-based value creation issues.</p>
                            <div class="left news-readmore"><i class="icon-angle-right icon-large"></i>&nbsp;<a href="news_article_mamphela_ramphele_press.php">Read More</a></div>
                            <div class="right">Posted in <a href="index.php">Press Releases</a></div>
                        </article>
                    </div>
                </div>
                <!--==================================== NEWS ARTICLE =====-->
                <div class="news-holder dotted-bottom clearfix">
                    <div class="left news-date"><span class="day">01</span><span class="month">Mar</span></div>
                    <div class="left news-article">
                        <article class="clearfix">
                            <header class="news-head">Government's planned R827 billion infrastructure spend</header>
                            <p>In his 2013 budget address, Minister of Finance, Pravin Gordhan, unveiled plans to finance R827 billion worth of infrastructure projects over the next three years - a significant increase from the R642 billion spent over the last three years. However, if Government is to reach these targets, the issue of upskilling junior and middle management in their roles needs to be adequately addressed, as they are vital cogs in South Africa’s ‘wheel of productivity.’</p>
                            <div class="left news-readmore"><i class="icon-angle-right icon-large"></i>&nbsp;<a href="news_article_infrastructure_spend_press.php">Read More</a></div>
                            <div class="right">Posted in <a href="index.php">Press Releases</a></div>
                        </article>
                    </div>
                </div>
                
                <div class="clearfix">
                    <ul class="right paginate">
                        <li><a href="index.php">1</a></li>
                        <li>2</li>
                    </ul>
                </div>
            </div>
            <div id='sidebar' class='left'>
                <?php 
                include $relpath.'includes/sidebar/widget-categories.php'; 
                include $relpath.'includes/sidebar/widget-archive.php';
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
