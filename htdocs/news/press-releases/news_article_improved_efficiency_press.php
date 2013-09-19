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
                <h1>Press Releases</h1>
                <!--==================================== NEWS ARTICLE =====-->
                <div class="news-holder dotted-bottom clearfix">
                    <div class="left news-date">
                        <span class="day">25</span><span class="month">Jun</span>
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
                            <header class="news-head">Improved production efficiency needed in SA mining and manufacturing</header>
                            <!--<img class="response-img" src="http://www.placehold.it/500x250" alt="News article" />-->
                            <p>Recent results published by Statistics SA in June show manufacturing production rose by 7% year-on-year in April, from a 2.2% year-on-year decline in March. While this is positive news, South African production capacity in the mining and manufacturing sectors is being compromised by outdated processes and technology as well as ineffective workforce management. This means that the workforce’s production output is not as optimal as it could be, impacting on the overall performance of the business.</p>
                            <p>This is the view Arjen de Bruin, MD of Operation Solutions at OIM, a leading business performance specialist in South Africa. De Bruin cautions both the mining and manufacturing sector not overlook the challenges and weaknesses currently facing these areas in the wake of the recently released results. The results show that manufacturing improved in April in the motor, vehicle, iron and steel, petroleum, chemical, rubber and plastic industries.</p> 
                            <p>“The recent results, although positive, also show that five out of 10 manufacturing divisions reported negative growth rates for this period.  Production efficiency, that is, the turnaround time of the task, is negatively affected when there are technological constraints at play. Often the technology in use may be sophisticated; but outdated standards and the utilisation thereof equates to the workforce producing far less than what their capacity allows. If downtime, for example, is not controlled, the cost per unit of production can skyrocket.”</p>
                            <p>De Bruin says that the sector has been under pressure economically, especially in light of the fact that economic expansion in the country slowed to an annualised 0.9% in the first three months of the year, slower than the 2.1% pace in the fourth quarter, and in light of the fact that the Reserve Bank reduced its forecast for growth this year to 2.4% from 2.7% in May.</p> 
                            <p>“As the growth rate will be the slowest pace experience since the recession in 2009 and the manufacturing sector accounts for about 15% of the economy, it is imperative that the manufacturing sector ensures that production is optimal and at its most efficient by fast-racking the importance of processes, as well as the capabilities of its labour force,” says De Bruin.</p> 
                            <p>Recently the University of Johannesburg released the results from its 2012 Supply Chain Skills Gap Survey, saying that there is a severe absence of supply chain skills in South Africa.  The survey said that employers indicated that although operational positions were relatively easy to fill, about 65% said it was difficult to fill tactical level positions.</p> 
                            <p>In line with these findings, De Bruin says that supervisors are often ineffective when dealing with the workforce, which compounds the issue of poor production efficiency. He says that supervisors need to ensure that 80% of their time is spent maximising production output each day, rather than spending most of their time trying to fill the gap created by a skills deficit in their team.</p>
                            <p>“We find that supervisors, as responsible for managing all processes, removing obstacles and assessing overall workforce productivity, spend most of their time trying to fill the gap created by a skills deficit in his team. Supervisors at both mining and manufacturing plants need to possess efficient problem solving techniques, plan correctly and be able to communicate daily tasks effectively to the team, as these skills are critical to ensuring the team’s throughput.”</p>
                            <p>The Supply Chain Skills Gap Survey also found that companies are recognising the role that 'seeing the big picture' plays in driving greater productivity and effectiveness across the supply chain. De Bruin agrees that engaging with the workforce with knowledge on business acumen, as well as the company’s strategic direction will aid not only supervisors, but also their teams in understanding their purpose at the company.</p>
                            <p>However, De Bruin says that many companies have not correctly identified the key competencies needed for supervisors to excel in the position.  “The first step to increase operational efficiency is to correctly identify the key competences to make supervisors more effective and supported. For example, implementing better systems that will help the supervisor make better decisions, or getting a handle on absenteeism, may aid the supervisor.</p> 
                            <p>“Communication with the workforce also plays a major role. We often find that many people don’t know what is expected of them on a shift; they don’t know the company’s strategy or direction, and can’t interpret the meaning of the vision and mission statements for their role in the company.  Communicating the employee’s purpose and direction and engaging with the workforce will result in increased throughput at a plant,” De Bruin concludes.</p>
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
