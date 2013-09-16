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
                <div class='breadcrumb'><i class="icon-map-marker icon-large red"></i> &nbsp;YOU ARE HERE: <a href='index.php'>Team</a> / <span class='red'>Fred Arendse</span></div>
                <h1>Our Leadership Team</h1>
                <div class='copy'>
                    <img class="response-img" src="http://placehold.it/500x200" />
                    <span class="member-name">Fred Arendse</span>
                    <p>Non-executive director</p>
                    <p>Fred Arendse joined OIM in 2005 as a non-executive director and shareholder. He is also the CEO and founder of the Siyakhula Sonke Empowerment Corporation (SSC), a new generation diversified company that is majority black owned and operates in the mineral producing sector.</p>
                    
                    <h2>Work Experience</h2>
                    <p>Fred has more than 13 years’ experience in the mining industry. He spent four years with JCI Coal Division before joining Anglo Platinum, where he held the position of head: transformation. Thereafter, he founded SSC to pursue business opportunities within the natural resources sector.
He is a member of the Black Management Forum and the South African Institute for Management Scientists. In addition to his position at SSC, Fred serves on various boards, including Redpath Mining SA, an international contract mining and shaft sinking company, Global Occnet, Sekgwa Mining Services, Siyakhula Sonke Corporation and various SSC associated companies.</p>
                    
                    <h2>Qualifications</h2>
                    <p>
                    <ul>
                        <li>Fred is currently studying Law at Unisa and is also a candidate attorney at MS Phiri Attorneys</li>
                        <li>BTech degree in Human Resources and Business Management – University of South Africa (Unisa – 2007)</li>
                        <li>Certificates in Leadership Development (LDP) and the Management Develop Programme (MDP) – Wits Business School (2001/2)</li>
                        <li>HR Diploma – Cape Peninsula University of Technology (1995)</li>
                    </ul>
                    </p>
                    
                    <h2>On A Personal Note</h2>
                    <p>Fred enjoys fast cars and travelling. He spends his free time with his family and working with SSC’s non-profit organisation, the Foundation for Peace and Prosperity.</p>
                </div>
            </div>
            <div id='sidebar' class='left'>
                <?php  
                include "../includes/sidebar/widget-other-team-members.php"; 
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
