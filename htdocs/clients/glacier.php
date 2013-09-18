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
                <div class='breadcrumb'><i class="icon-map-marker icon-large red"></i> &nbsp;YOU ARE HERE: <a href="index.php">Clients</a> <span class='red'>/ Case Studies / Glacier by Sanlam</span></div>
                <h1>Client Case Studies</h1>
                <div class='copy'>
                    <p><img src="../img/clients/glacier.gif" /><br/><br/></p>
                    <p>
                        <strong>Industry:</strong> Finance<br/>
                        <strong>OIM offering:</strong> Operations management intervention
                    </p>

                    <p>
                        <strong>About the partnership</strong><br/>
                        Following a business review to identify operational constraints and map a solution, OIM’s operations management consultants ran an intervention to improve efficiencies at Glacier’s Administration and Call Centre divisions. The nine-month project included management operating tools, capacity planning, short-interval control, reporting tools and building a system to manage electronic client requests. The result was a return on investment of at least 4:1 at Administration with a 30% reduction on outstanding cases. Other benefits included a large reduction in cycle times, the cleaning of reporting data and the ability to measure and manage productivity, service levels, quality and turnaround times on a daily, weekly and monthly basis. Call Centre service levels increased by 11% while capacity and productivity improved by 15%.    
                    </p>
                        
                    <p>
                        <strong>The client view</strong><br/>
                        “OIM collaborated with Glacier to radically improve efficiencies within the Administration and Call Centre areas, through the implementation of their management operating system (MOS) methodology. The goals were more than achieved and Glacier is greatly satisfied with the outcome. The project not only achieved its short-term objective, but the tools left behind ensure ongoing sustainability. OIM’s operations management consultants conducted themselves in a professional manner throughout their time with us, and I would gladly use OIM again when the need arises.”
                    </p>
                    
                    <p class="right">Michelle Möller, head: Client Services</p>
                </div>
            </div>
            <div id='sidebar' class='left'>
                <?php 
                include "../includes/sidebar/widget-client-case-studies.php"; 
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
