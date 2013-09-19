<?php $relpath = "../../"; ?>

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
                <div class='breadcrumb'><i class="icon-map-marker icon-large red"></i> &nbsp;YOU ARE HERE: <a href='../'>News</a> / <span class='red'>Clips</span></div>
                <h1>Clips</h1>
                <!--==================================== NEWS ARTICLE =====-->
                <div class="news-holder dotted-bottom clearfix">
                    <div class="left news-date"><span class="day">03</span><span class="month">Jul</span></div>
                    <div class="left news-article">
                        <article class="clearfix">
                            <header class="news-head">Framework agreement for the mining sector</header>
                            <p>Government leaders, led by Deputy President Kgalema Motlenath, today met with mining houses and trade unions in Pretoria to discuss and sign a framework agreement for the mining sector.</p>
                            <div class="left news-readmore"><i class="icon-angle-right icon-large"></i>&nbsp;<a href="clip_framework_agreement.php">Read More</a></div>
                            <div class="right">Posted in <a href="index.php">Clips</a></div>
                        </article>
                    </div>
                </div>
                <!--==================================== NEWS ARTICLE =====-->
                <div class="news-holder dotted-bottom clearfix">
                    <div class="left news-date"><span class="day">25</span><span class="month">Jun</span></div>
                    <div class="left news-article">
                        <article class="clearfix">
                            <header class="news-head">Labour Relations Amendment Bill</header>
                            <p>Discussion about the labour relations amendment bill and the contentious issues that it is currently undergoing</p>
                            <div class="left news-readmore"><i class="icon-angle-right icon-large"></i>&nbsp;<a href="clip_amendment_bill.php">Read More</a></div>
                            <div class="right">Posted in <a href="index.php">Clips</a></div>
                        </article>
                    </div>
                </div>
                <!--==================================== NEWS ARTICLE =====-->
                <div class="news-holder dotted-bottom clearfix">
                    <div class="left news-date"><span class="day">11</span><span class="month">Jun</span></div>
                    <div class="left news-article">
                        <article class="clearfix">
                            <header class="news-head">Strike ballot out of Labour Bill</header>
                            <p>Government is set on allowing strikes to take place without a ballot. Mentions: COSATU, Labour Relations Amendment Bill, Parliament's Labour Committee</p>
                            <div class="left news-readmore"><i class="icon-angle-right icon-large"></i>&nbsp;<a href="clip_labour_bill.php">Read More</a></div>
                            <div class="right">Posted in <a href="index.php">Clips</a></div>
                        </article>
                    </div>
                </div>
                <!--==================================== NEWS ARTICLE =====-->
                <div class="news-holder dotted-bottom clearfix">
                    <div class="left news-date"><span class="day">04</span><span class="month">Mar</span></div>
                    <div class="left news-article">
                        <article class="clearfix">
                            <header class="news-head">Amplats reaches agreement with Amcu</header>
                            <p>Anglo Platinum has reached an agreement with the Association of Mineworkers and Construction Union.</p>
                            <div class="left news-readmore"><i class="icon-angle-right icon-large"></i>&nbsp;<a href="clip_amplats.php">Read More</a></div>
                            <div class="right">Posted in <a href="index.php">Clips</a></div>
                        </article>
                    </div>
                </div>
                <!--==================================== NEWS ARTICLE =====-->
                <div class="news-holder dotted-bottom clearfix">
                    <div class="left news-date"><span class="day">15</span><span class="month">Jan</span></div>
                    <div class="left news-article">
                        <article class="clearfix">
                            <header class="news-head">Anglo America Platinum strikes and wage dispute - Update</header>
                            <p>The mineworkers union, AMCU, has threatened to embark on strike action if Anglo America Platinum goes ahead with plans to shutdown four shafts in the Rustenburg region</p>
                            <div class="left news-readmore"><i class="icon-angle-right icon-large"></i>&nbsp;<a href="clip_anglo_america.php">Read More</a></div>
                            <div class="right">Posted in <a href="index.php">Clips</a></div>
                        </article>
                    </div>
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
