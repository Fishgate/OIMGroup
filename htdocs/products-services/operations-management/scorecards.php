<?php $relpath = "../../"; ?>
<?php $pagetype = "scorecards"; ?>

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
                <div class='breadcrumb'><i class="icon-map-marker icon-large red"></i> &nbsp;YOU ARE HERE: <span class='red'>Products & Services</span> / <span class='red'>Operations Management</span></div>
                <h1>Scorecards</h1>
                <div class='caption'><span>Translate strategy into performance</span></div>
                <div class='copy'>
                    <p>Scorecards play a crucial role in organisational, team and individual performance management. They are used to translate strategic priorities to all organisational levels to establish overall alignment and a collective focus on the right goals and targets.</p>

                    <p>Using a structured approach, OIM's scorecard development process aligns functional and team performance to the business strategy and standard operational areas. We clearly define goals and targets and cascade them throughout the business to accurately reflect level and content of work. This ensures that all functions add value to the business based on a common understanding of the organisational goals.</p>

                    <p>We also train staff in the use of scorecards and the contracting of performance.</p>

                    <h2>Our offering</h2>
                    <p>
                        <ul>
                            <li><strong>Consultation and scorecard design:</strong> Managing and facilitating the scorecard process. This includes reaching agreement on design principles, templates, roll-out method and timelines. An inclusive approach is adopted when designing the scorecards to generate a sense of ownership and buy-in among line managers.</li>
                            <li><strong>Training:</strong> Equipping leaders with the necessary skills to design and manage scorecards and agree on a performance contract with teams/individuals.</li>
                            <li><strong>Toolkit:</strong> Designing and customising a toolkit for ease of implementation, eg templates and user guides.</li>
                        </ul>
                    </p>

                    <br/><strong class="dark_blue">The link with strategy, operational goals and individual performance</strong>
                    <p> 
                    Scorecards are the tool that links strategy with operational goals as well as team and individual performance. OIM has the expertise to assist clients with strategic planning, developing operational scorecards, setting up teams to manage their <a href="<?php echo $relpath; ?>products-services/people-management/employee-engagement.php">own performance</a> and <a href="<?php echo $relpath; ?>products-services/people-management/talent-management/performance-management-process.php">individual performance</a>, allowing for a seamless integration of the scorecard process with performance.
                    </p>

                    <h2>The OIM difference</h2>
                    <p>
                        <ul>
                            <li>OIM's integrated approach ensures that scorecards - and therefore performance management - are incorporated in the day-to-day running of the organisation.</li>  
                            <li>Our process includes vertical and horizontal alignment, thereby addressing business processes and areas such as value chain performance that are often poorly managed in organisations.</li> 
                            <li>Our offering enables an organisation to seamlessly execute its strategy, align teams and individuals and achieve engagement and buy-in.</li>
                            <li>Our approach is based on OIM's proven performance improvement methodology and its basic performance elements, being clear purpose and direction, alignment and focus, effective leadership, business process/system integration and "knowing the score" through continuous performance measurement and improvement.</li> 
                            <li>We enable an organisation to develop and implement team performance scorecards that are managed using OIM's employee engagement methodology, INVOCOM&reg;.</li>
                        </ul>
                    </p>
                </div>
            </div>
            <div id='sidebar' class='left'>
                <?php 
                include $relpath.'includes/sidebar/widget-az-product-listing.php'; 
                include $relpath.'includes/sidebar/widget-contact-us.php'; 
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
