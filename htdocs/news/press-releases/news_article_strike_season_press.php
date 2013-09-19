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
                        <span class="day">03</span><span class="month">Jul</span>
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
                            <header class="news-head">Strike season: Promoting a peaceful wage negotiation</header>
                            <!--<img class="response-img" src="http://www.placehold.it/500x250" alt="News article" />-->
                            <p>Mildred Oliphant recently appealed to business and labour to conduct wage negotiation in a peaceful manner as “strike season” looms. Many companies in mining and manufacturing are traditionally set to conduct collective wage negotiations during the second half of the year, starting in June. Oliphant said that companies must respect the labour laws of the country, as well as their policies regarding wage negotiations and that business must refrain from negotiating with workers' groups outside the centralised collective bargaining agreements.</p>
                            <p>According to Chris Jacobs, conflict resolution expert at OIM, a leading business performance specialist company in South Africa, South African employers are obligated to ensure that wage negotiations during “strike season” do not escalate into violent situations.  He argues that although an outcome that everyone is satisfied with is difficult to reach, there should be relative buy-in from all parties, so that everyone has a stake in the negotiation process and its outcome.</p>
                            <p><strong>We suggest an interview with Jacobs, who can speak about the following:</strong></p>
 
                            <ul class="bulleted">
                                <li>Why SA cannot afford another violent strike season, especially in light of the recent proposed changes through the Labour Relations Amendment Bill</li>
                                <li>What companies under financial pressure can do to minimize the effects that wage negotiations have on productivity in the business</li>
                                <li>Short and long term solutions should a company be faced with a strike scenario in the event of an unsuccessful wage negotiation</li>
                                <li>What employers can do to promote a peaceful wage negotiation process</li>
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
