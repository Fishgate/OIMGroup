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
                <h1>Cape Argus Workplace</h1>
                <!--==================================== NEWS ARTICLE =====-->
                <div class="news-holder dotted-bottom clearfix">
                    <div class="left news-date">
                        <span class="day">01</span><span class="month">May</span>
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
                            <header class="news-head">Editorial submission: Rido Rambau (OIM)</header>
                            <!--<img class="response-img" src="http://www.placehold.it/500x250" alt="News article" />-->
                            <p><b>1. What does your job entail?</b><br />
                                My job is all about problem solving and ultimately adding value to a client’s business. On a day-to-day basis I engage with clients to identify operational improvement opportunities for revenue upliftment and cost reduction. I also research methods to improve existing processes and procedures.  Furthermore, I manage operational change initiatives, analyse data, assess risks and conduct root-cause analyses to find solutions for the operational improvement opportunities that were identified.</p>
                            <p><b>2. What is your background?</b><br />
                            I have worked in the metals production industry for the past five years as a chemical engineer. After completing my degree in Chemical Engineering, I joined Manganese Metal Company, the largest producer of electrolytic manganese metal in the world, as an improvement engineer. 
                            For the past three years I worked as an improvement specialist for both the Waste Management Department and the Solution Preparation Department. I worked on projects such as installing a bulk lime silo to improve ergonomics and safety associated with material handling, process simulations using the IDEAS program, and completed waste water re-use/recycling projects.
                            I joined OIM in 2013 as a consultant focusing on the well-known Six Sigma process optimisation methodology and conducting on-the-floor operational coaching at clients.</p>

                            <p><b>3. Describe a typical day as an operations solutions consultant.</b><br />
                            Conduct strategic planning with the OIM team based on meeting outcomes
                            Observe client activities  (client operational practices by spending time on the workfloor with line managers) 
                            Identify issues and collect data
                            Conduct root-cause analyses and brainstorm solutions with client teams to find solution to the causes 
                            Coordinate the  implementation of solutions for clients</p>

                            <p><b>4. What are the biggest challenges that you face at work?</b><br />
                            The adjustment to being heavily solution oriented and delivering at the speed of light has been a challenge for me, but I am making good progress. Working away from home and travelling to the client on a weekly basis can be strenuous as it takes away from your after work activities (gym, sport, etc.). I used to play hockey afterhours and still hope to find a social team that I can train with in Bethal.</p>

                            <p><b>5. What are your major rewards?</b><br />
                            The experience I'm gaining through the work I do for OIM. Every day spent at work is empowering.</p>

                            <p><b>6. What do you need to succeed as an operations solutions consultant?</b><br />
                            You will need to enjoy team work and problem solving;
                            Candidates should be able to adapt quickly to change, as project deliverables must always meet the client’s needs and will differ from project to project
                            You need to be well rounded in your communication skills, with the ability to listen and ask questions until you grasp the issues impacting on business efficiency. Then only can you analyse and interpret the challenges to come up with meaningful solutions.</p>

                            <p><b>7. What are the minimum educational requirements for the job?</b><br />
                            A tertiary level qualification is required as it enables one to think in a structured and scientific way. A post graduate degree is favoured, but not absolutely necessary. I am currently busy with my Masters in Technology Management and most of my colleagues in the operations solutions team hold postgraduate degrees. The fields of study vary and depend on the specific area of operational efficiency that one works in. The OIM team consists of consultants with Masters degrees in Chemical, Industrial and Mechanical Engineering while others hold advanced Business Management qualifications and degrees in Physics.</p>

                            <p><b>8. What is the minimum salary an operations solutions consultant can expect to earn?</b><br />
                            R250K – R350K</p>
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
