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
                <div class='breadcrumb'><i class="icon-map-marker icon-large red"></i> &nbsp;YOU ARE HERE: <span class="red">News</span> / <span class='red'>Press Releases</span></div>
                <h1>Media Pitch</h1>
                <!--==================================== NEWS ARTICLE =====-->
                <div class="news-holder dotted-bottom clearfix">
                    <div class="left news-date">
                        <span class="day">01</span><span class="month">Jul</span>
                    </div>
                    <div class="sharing">
                        <a href="#">
                            <i class="icon-thumbs-up icon-2x"></i>
                        </a>
                        <br />
                        <a href="#">
                            <i class="icon-envelope icon-2x"></i>
                        </a>
                        <br />
                        <a href="#">
                            <i class="icon-print icon-2x"></i>
                        </a>
                        <br />
                        <a href="#">
                            <i class="icon-download-alt icon-2x"></i>
                        </a>
                    </div>
                    <div class="left news-article">
                        <article class="clearfix">
                            <header class="news-head">Stakeholders urged to be cautious during gold sector dispute, as SA cannot afford another mining strike scenario</header>
                            <!--<img class="response-img" src="http://www.placehold.it/500x250" alt="News article" />-->
                            <p>Last week wage discussions in the gold industry took an interesting turn with the Chamber referring the matter to the CCMA with regards to the trade union, AMCU, and thereby placing the negotiations on a different level with mediators stepping in to break the impasse between the employers and AMCU. The talks between the Chamber and 3 other unions has already gone this way but referred to the CCMA by the Unions. AMCU is calling for a 150% rise for entry-level miners.</p>
                            <p>Chris Jacobs from OIM says that while the mining sector has been fraught with conflict, violence and work stoppages over the last year, stakeholders involved in the wage disputes are urged to take caution to not let it escalate into strike action, as SA cannot afford another strike scenario in the mining industry.</p>
                            <p>The dispute comes in the wake of the recently released unemployment figures by Statistics SA, which shows that the country’s jobless rate has risen to 25.6%, the highest since last year.</p>
                            <p>Jacobs says strikes are a complete lose-lose situation for both employees and employers, as businesses lose income and often teeter on the edge of closure while staff face the possibility of retrenchments and lower wage increases than originally offered. He says that strikes, especially unprotected and unlawful ones, are simply a cost no party involved can afford. He explains that successful wage negation is a process that should result in both employer and employee benefitting but is a feat largely determined by the maturity of the relationship between the involved parties – management, employees and unions.</p>
                            <p><strong>I’d like to suggest an interview with Jacobs, who can speak on the following:</strong></p>
                            <ul class="bulleted">
                                <li>The context of the current wage dispute in the gold mining sector</li>
                                <li>The danger of wage negotiations escalating into strikes</li>
                                <li>Why SA can’t afford more work stoppages in the mining sector</li>
                                <li>The factors needed for successful wage negotiation (for both employers and employees)</li>
                                <li>The purpose of constructive engagement sessions during wage disputes</li>
                            </ul>
                            <!--<div class="left news-readmore"><i class="icon-angle-right icon-large"></i>&nbsp;<a href="#">Read More</a></div>-->
                            <div class="right">Posted in <a href="index.php">Press Releases</a></div>
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
