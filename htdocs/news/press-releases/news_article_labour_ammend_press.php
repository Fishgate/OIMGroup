<?php $relpath = "../../"; ?>
<?php $pagetype = "news_mini"; ?>

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
                            <header class="news-head">Labour Relations Amendment Bill: South Africa's labour landscape needs to change</header>
                            <!--<img class="response-img" src="http://www.placehold.it/500x250" alt="News article" />-->
                            <p>“South Africa’s labour relations is at a defining moment in our country’s history. Over the past few years, unprotected strike action has escalated into an uncontrolled, violent and unlawful landscape, led by a mob mentality in the absence of formal and recognised leaders. This is the result of major social frustration. Unfortunately, it is the workplace that has become the warzone, with grave consequences for employers.  It is also a result of complacency which has set in with and between businesses and labour leaders, as well as legislation which has not adapted to the changing circumstances.”</p>
                            <p>This is the view of Chris Jacobs, Conflict Resolution Expert at OIM, a leading business performance specialist.  Currently, Parliament’s labour committee is meeting to discuss the controversial Labour Relations Amendment Bill, and whatever the outcome, it is expected that either business or labour will not be satisfied.</p>

<p><strong>I suggest an interview with Chris Jacobs, who can either speak before or after the results of the parliamentary committee meeting are made public, on the following topics:</strong></p>

<ul class="bulleted">
    <li>Why South Africa’s labour relations landscape needs to change drastically</li>
    <li>What employers need to do in the context of the new Bill being approved or rejected</li>
    <li>Why the current LRA (Labour Relations Act) is outdated</li>
    <li>Why change needs to happen at a union, employee and employer level</li>
    <li>What Employee Relations strategies companies need to put in place to deal with a changing labour relations landscape</li>
</ul>
<p>Please let me know if you would like to speak to Chris Jacobs today, or tomorrow, and I will be happy to arrange.</p>
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
