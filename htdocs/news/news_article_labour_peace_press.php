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
                <div class='breadcrumb'><i class="icon-map-marker icon-large red"></i> &nbsp;YOU ARE HERE: <a href='index.php'>News</a> / <a href='news_cat_press.php'>Press Releases</a> / <span class='red'>Missed opportunity to promote labour peace and stability</span></div>
                <h1>Missed opportunity to promote labour peace and stability</h1>
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
                            <header class="news-head">Yet another tragedy of a missed opportunity<br />to promote labour peace and stability<br />in South Africa</header>
                            <!--<img class="response-img" src="http://www.placehold.it/500x250" alt="News article" />-->
                            <em><b>By <span class="author">Chris Jacobs</span>, Conflict Resolution Expert at OIM</b></em>

                            <p>South Africa today again missed out on another opportunity to send out the right signals about labour peace and stability and creating an investor-friendly climate. This happened when government MPs, in the portfolio committee on labour, voted against a clause in the proposed Labour Relations Amendment Bill on strike balloting.</p>
                            <p>The clause, among other things, was intended to promote stability in the workplace and further democratize the workplace in the sense of giving trade union members a final say in whether they want to strike or not.  This would have provided them with an opportunity to decide if they want to forsake income in lieu of a possible better dispensation or not, through a democratic process.  If this clause in the Amendment Bill is scrapped, the current labour relations landscape will not change.  Intimidation and mob order rules, as is the trend with ongoing strikes in the mining and manufacturing sector, will continue.</p>
                            <p>If nothing else, we have learned in the period leading up to August 2012, that the opportunities for intimidation are rife and that it cannot be controlled by security services.  A trend in the 1980s, this leaves it to the employer to try and manage, but often this happens too late, which means the workplace becomes the battleground for unsettled differences, as well as a place where the political aspirations of the scrupulous plays out.</p>
                            <p>Solutions that are Band-Aid actions such as peacekeeping forces on mines will not address the underlying causes. If government does not address the socio-economic problems facing this country, we shall have continued cycles of labour upheavals.  This is proved by the fact that SA has more protest situations around social conditions than strike actions. The problem however is that this social upheaval spreads to the workplace.  This is often called a labour problem, when it fact it is a socio-economic problem.</p>
                            <!--<div class="left news-readmore"><i class="icon-angle-right icon-large"></i>&nbsp;<a href="#">Read More</a></div>-->
                            <div class="right">Posted in <a href="#">Press Releases</a></div>
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
