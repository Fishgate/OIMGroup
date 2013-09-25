<!-- BRANDING -->
<div id="branding" class="clearfix">
    <div class="left">
        <a href="<?php echo $relpath; ?>home"><img src="<?php echo $relpath; ?>img/logo.png" alt="OIM Logo" border="0" /></a>
    </div>
    <div id="slogan" class="right">Business Performance Specialists</div>
</div>
<!-- END BRANDING -->

<!-- BEGIN MAIN NAV -->
<nav id="main-nav" class="clearfix">
    <div id="house" class="left oim-blue"><!-- HOUSE ICON -->
        <a href="<?php echo $relpath; ?>home"><span class="icon">&#xf015;</span></a>
    </div>
    <div id="nav-holder" class="left"><!-- TOP LVL NAV -->
        <div class="left menu-item">
            <a href="<?php echo $relpath; ?>about-oim/our-methodology.php">Our Methodology</a>
        </div>
        <div class="left menu-item products_toplvl">
            Products &amp; Services&nbsp;<i class="icon-angle-down"></i>
            <?php include $relpath.'/includes/mega-products.php' ?>
        </div>
        <div class="left menu-item">
            <a href="<?php echo $relpath; ?>contact-us">Contact</a>
        </div>
    </div>
    <div class="right clearfix"><!-- CONTACT DETAILS -->
        <div class="right details border-left"><a href="http://za.linkedin.com/company/oim-international-pty-ltd?trk=ppro_cprof" target="_blank"><i class="icon-linkedin oim-blue"></i></a></div>
        <div class="right details"><i class="icon-phone oim-blue" style="padding-right: 20px;"></i>+27 21 913 8814/5</div>
    </div>
    
</nav>


<!-- END MAIN NAV -->

<!-- Header Slideshow  -->
<?php switch ($pagetype) {
    
    case "about": ?><div class="rslides" style="height: 370px; overflow: hidden;"><li><div class="calltoaction"><span class="quote">The ones who keep improving<br/> are the ones who stay relevant</span><a href='<?php echo $relpath; ?>contact-us'><div class="button">Contact Us &nbsp;<i class="icon-angle-right icon-large"></i></div></a></div><div class="calltoaction_mini_max"><span class="quote_mini">Analyse. Improve. Sustain</span></div><img src="<?php echo $relpath; ?>img/concept_photos/about.jpg" alt=""></li></div><?php break;
    case "bee": ?><div class="rslides" style="height: 370px; overflow: hidden;"><li><div class="calltoaction text_right"><span class="quote">The ones who keep improving<br/> are the ones who stay relevant</span><a href='<?php echo $relpath; ?>contact-us'><div class="button">Contact Us &nbsp;<i class="icon-angle-right icon-large"></i></div></a></div><div class="calltoaction_mini_max"><span class="quote_mini">Analyse. Improve. Sustain</span></div><img src="<?php echo $relpath; ?>img/concept_photos/about_alt.jpg" alt=""></li></div><?php break;
    case "clients": ?><div class="rslides" style="height: 370px; overflow: hidden;"><li><div class="calltoaction  text_right"><span class="quote">The ones who keep improving<br/> are the ones who stay relevant</span><a href='<?php echo $relpath; ?>contact-us'><div class="button">Contact Us &nbsp;<i class="icon-angle-right icon-large"></i></div></a></div><div class="calltoaction_mini_max"><span class="quote_mini">Analyse. Improve. Sustain</span></div><img src="<?php echo $relpath; ?>img/concept_photos/clients.jpg" alt=""></li></div><?php break;
    case "csi": ?><div class="rslides" style="height: 370px; overflow: hidden;"><li><div class="calltoaction text_right"><span class="quote">The ones who keep improving<br/> are the ones who stay relevant</span><a href='<?php echo $relpath; ?>contact-us'><div class="button">Contact Us &nbsp;<i class="icon-angle-right icon-large"></i></div></a></div><div class="calltoaction_mini_max"><span class="quote_mini">Analyse. Improve. Sustain</span></div><img src="<?php echo $relpath; ?>img/concept_photos/about_alt.jpg" alt=""></li></div><?php break;
    case "team": ?><div class="rslides" style="height: 370px; overflow: hidden;"><li><div class="calltoaction"><span class="quote">Without an experienced team to<br/> facilitate improvement,<br/> market leaders become followers</span><a href='<?php echo $relpath; ?>contact-us'><div class="button">Contact Us &nbsp;<i class="icon-angle-right icon-large"></i></div></a></div><div class="calltoaction_mini_max"><span class="quote_mini">Analyse. Improve. Sustain</span></div><img src="<?php echo $relpath; ?>img/concept_photos/team.jpg" alt=""></li></div><?php break;
    case "team_mini": ?><div class="rslides" style="height: 250px; overflow: hidden;"><li><div class="calltoaction_mini"><span class="quote_mini">Analyse. Improve. Sustain</span></div><img src="<?php echo $relpath; ?>img/concept_photos/team.jpg" alt=""></li></div><?php break;
    case "news": ?><div class="rslides" style="height: 370px; overflow: hidden;"><li><div class="calltoaction text_right"><span class="quote">Staying on top means<br/> staying on top of what's happening</span><a href='<?php echo $relpath; ?>contact-us'><div class="button">Contact Us &nbsp;<i class="icon-angle-right icon-large"></i></div></a></div><div class="calltoaction_mini_max"><span class="quote_mini">Analyse. Improve. Sustain</span></div><img src="<?php echo $relpath; ?>img/concept_photos/news.jpg" alt=""></li></div><?php break;
    case "news_mini": ?><div class="rslides" style="height: 250px; overflow: hidden;"><li><div class="calltoaction_mini"><span class="quote_mini">Analyse. Improve. Sustain</span></div><img src="<?php echo $relpath; ?>img/concept_photos/news.jpg" alt=""></li></div><?php break;
    case "careers": ?><div class="rslides" style="height: 370px; overflow: hidden;"><li><div class="calltoaction text_right"><span class="quote">The ones who keep improving<br/> are the ones who stay relevant</span><a href='<?php echo $relpath; ?>contact-us'><div class="button">Contact Us &nbsp;<i class="icon-angle-right icon-large"></i></div></a></div><div class="calltoaction_mini_max"><span class="quote_mini">Analyse. Improve. Sustain</span></div><img src="<?php echo $relpath; ?>img/concept_photos/careers.jpg" alt=""></li></div><?php break;
    case "partnerships": ?><div class="rslides" style="height: 370px; overflow: hidden;"><li><div class="calltoaction"><span class="quote">Without an experienced team to<br/> facilitate improvement,<br/> market leaders become followers</span><a href='<?php echo $relpath; ?>contact-us'><div class="button">Contact Us &nbsp;<i class="icon-angle-right icon-large"></i></div></a></div><div class="calltoaction_mini_max"><span class="quote_mini">Analyse. Improve. Sustain</span></div><img src="<?php echo $relpath; ?>img/concept_photos/partnerships.jpg" alt=""></li></div><?php break;
    case "contact": ?><div class="rslides" style="height: 370px; overflow: hidden;"><li><div class="calltoaction"><span class="quote text_right">The ones who keep improving<br/> are the ones who stay relevant</span></div><div class="calltoaction_mini_max"><span class="quote_mini">Analyse. Improve. Sustain</span></div><img src="<?php echo $relpath; ?>img/concept_photos/contact.jpg" alt=""></li></div><?php break;
    case "methodology": ?><div class="rslides" style="height: 370px; overflow: hidden;"><li><div class="calltoaction text_right"><span class="quote">Progress comes as a result<br/> of proven methodologies</span><a href='<?php echo $relpath; ?>contact-us'><div class="button">Contact Us &nbsp;<i class="icon-angle-right icon-large"></i></div></a></div><div class="calltoaction_mini_max"><span class="quote_mini">Analyse. Improve. Sustain</span></div><img src="<?php echo $relpath; ?>img/concept_photos/methodology.jpg" alt=""></li></div><?php break;
    
    case "business_architecture": ?><div class="rslides" style="height: 250px; overflow: hidden;"><li><div class="calltoaction_mini"><span class="quote_mini">Analyse. Improve. Sustain</span></div><img src="<?php echo $relpath; ?>img/products/business_architecture.jpg" alt=""></li></div><?php break;
    case "coaching": ?><div class="rslides" style="height: 250px; overflow: hidden;"><li><div class="calltoaction_mini"><span class="quote_mini">Analyse. Improve. Sustain</span></div><img src="<?php echo $relpath; ?>img/products/coaching.jpg" alt=""></li></div><?php break; 
    case "comms": ?><div class="rslides" style="height: 250px; overflow: hidden;"><li><div class="calltoaction_mini"><span class="quote_mini">Analyse. Improve. Sustain</span></div><img src="<?php echo $relpath; ?>img/products/comms.jpg" alt=""></li></div><?php break;
    case "competency_profiling": ?><div class="rslides" style="height: 250px; overflow: hidden;"><li><div class="calltoaction_mini"><span class="quote_mini">Analyse. Improve. Sustain</span></div><img src="<?php echo $relpath; ?>img/products/competency_profiling.jpg" alt=""></li></div><?php break;
    case "continuous_improvement": ?><div class="rslides" style="height: 250px; overflow: hidden;"><li><div class="calltoaction_mini"><span class="quote_mini">Analyse. Improve. Sustain</span></div><img src="<?php echo $relpath; ?>img/products/continuous_improvement.jpg" alt=""></li></div><?php break;
    case "diversity": ?><div class="rslides" style="height: 250px; overflow: hidden;"><li><div class="calltoaction_mini"><span class="quote_mini">Analyse. Improve. Sustain</span></div><img src="<?php echo $relpath; ?>img/products/diversity.jpg" alt=""></li></div><?php break;
    case "employee_relations": ?><div class="rslides" style="height: 250px; overflow: hidden;"><li><div class="calltoaction_mini"><span class="quote_mini">Analyse. Improve. Sustain</span></div><img src="<?php echo $relpath; ?>img/products/employee_relations.jpg" alt=""></li></div><?php break;
    case "individual_performance_management": ?><div class="rslides" style="height: 250px; overflow: hidden;"><li><div class="calltoaction_mini"><span class="quote_mini">Analyse. Improve. Sustain</span></div><img src="<?php echo $relpath; ?>img/products/individual_performance_management.jpg" alt=""></li></div><?php break;
    case "interventions": ?><div class="rslides" style="height: 250px; overflow: hidden;"><li><div class="calltoaction_mini"><span class="quote_mini">Analyse. Improve. Sustain</span></div><img src="<?php echo $relpath; ?>img/products/interventions.jpg" alt=""></li></div><?php break;
    case "invocoms": ?><div class="rslides" style="height: 250px; overflow: hidden;"><li><div class="calltoaction_mini"><span class="quote_mini">Analyse. Improve. Sustain</span></div><img src="<?php echo $relpath; ?>img/products/invocoms.jpg" alt=""></li></div><?php break;
    case "leadership_assessments": ?><div class="rslides" style="height: 250px; overflow: hidden;"><li><div class="calltoaction_mini"><span class="quote_mini">Analyse. Improve. Sustain</span></div><img src="<?php echo $relpath; ?>img/products/leadership_assessments.jpg" alt=""></li></div><?php break;
    case "leadership_development": ?><div class="rslides" style="height: 250px; overflow: hidden;"><li><div class="calltoaction_mini"><span class="quote_mini">Analyse. Improve. Sustain</span></div><img src="<?php echo $relpath; ?>img/products/leadership_development.jpg" alt=""></li></div><?php break;
    case "leadership_standards": ?><div class="rslides" style="height: 250px; overflow: hidden;"><li><div class="calltoaction_mini"><span class="quote_mini">Analyse. Improve. Sustain</span></div><img src="<?php echo $relpath; ?>img/products/leadership_standards.jpg" alt=""></li></div><?php break;
    case "leadership_talent": ?><div class="rslides" style="height: 250px; overflow: hidden;"><li><div class="calltoaction_mini"><span class="quote_mini">Analyse. Improve. Sustain</span></div><img src="<?php echo $relpath; ?>img/products/leadership_talent.jpg" alt=""></li></div><?php break;
    case "operations_review": ?><div class="rslides" style="height: 250px; overflow: hidden;"><li><div class="calltoaction_mini"><span class="quote_mini">Analyse. Improve. Sustain</span></div><img src="<?php echo $relpath; ?>img/products/operations_review.jpg" alt=""></li></div><?php break;
    case "reward_consulting": ?><div class="rslides" style="height: 250px; overflow: hidden;"><li><div class="calltoaction_mini"><span class="quote_mini">Analyse. Improve. Sustain</span></div><img src="<?php echo $relpath; ?>img/products/reward_consulting.jpg" alt=""></li></div><?php break;
    case "professional_services": ?><div class="rslides" style="height: 250px; overflow: hidden;"><li><div class="calltoaction_mini"><span class="quote_mini">Analyse. Improve. Sustain</span></div><img src="<?php echo $relpath; ?>img/products/it.jpg" alt=""></li></div><?php break;
    case "scorecards": ?><div class="rslides" style="height: 250px; overflow: hidden;"><li><div class="calltoaction_mini"><span class="quote_mini">Analyse. Improve. Sustain</span></div><img src="<?php echo $relpath; ?>img/products/scorecards.jpg" alt=""></li></div><?php break;
    case "strategic_planning": ?><div class="rslides" style="height: 250px; overflow: hidden;"><li><div class="calltoaction_mini"><span class="quote_mini">Analyse. Improve. Sustain</span></div><img src="<?php echo $relpath; ?>img/products/strategic_planning.jpg" alt=""></li></div><?php break;
    case "stakeholder": ?><div class="rslides" style="height: 250px; overflow: hidden;"><li><div class="calltoaction_mini"><span class="quote_mini">Analyse. Improve. Sustain</span></div><img src="<?php echo $relpath; ?>img/products/stakeholder.jpg" alt=""></li></div><?php break;
    case "supervisory_skills": ?><div class="rslides" style="height: 250px; overflow: hidden;"><li><div class="calltoaction_mini"><span class="quote_mini">Analyse. Improve. Sustain</span></div><img src="<?php echo $relpath; ?>img/products/supervisory_skills.jpg" alt=""></li></div><?php break;
    case "talent_management": ?><div class="rslides" style="height: 250px; overflow: hidden;"><li><div class="calltoaction_mini"><span class="quote_mini">Analyse. Improve. Sustain</span></div><img src="<?php echo $relpath; ?>img/products/talent_management.jpg" alt=""></li></div><?php break;
    case "team_dynamics": ?><div class="rslides" style="height: 250px; overflow: hidden;"><li><div class="calltoaction_mini"><span class="quote_mini">Analyse. Improve. Sustain</span></div><img src="<?php echo $relpath; ?>img/products/team_dynamics.jpg" alt=""></li></div><?php break;
    case "value_chain_optimisation": ?><div class="rslides" style="height: 250px; overflow: hidden;"><li><div class="calltoaction_mini"><span class="quote_mini">Analyse. Improve. Sustain</span></div><img src="<?php echo $relpath; ?>img/products/value_chain_optimisation.jpg" alt=""></li></div><?php break;
    default: ?>
    
    
    
    <div style="height: 370px; overflow: hidden;">
        <ul class="rslides" id="slider1" style="margin: 0 auto;">
          <li>
              <div class="calltoaction text_right">
                  <span class="quote">In an ever-changing world,<br/> constant improvement is an<br/> integral part of continued success</span>
                  <a href='<?php echo $relpath; ?>about-oim'><div class="button">Read More &nbsp;<i class="icon-angle-right icon-large"></i></div></a>
              </div>
              <img src="<?php echo $relpath; ?>img/concept_photos/home1.jpg" alt="">
              <div class="calltoaction_mini_max"><span class="quote_mini">Analyse. Improve. Sustain</span></div>
          </li>
          <li>
              <div class="calltoaction text_right">
                  <span class="quote">Progress comes as a result<br/> of proven methodologies</span>
                  <a href='<?php echo $relpath; ?>about-oim/our-methodology.php'><div class="button">Read More &nbsp;<i class="icon-angle-right icon-large"></i></div></a>
              </div>
              <img src="<?php echo $relpath; ?>img/concept_photos/home2.jpg" alt="">
              <div class="calltoaction_mini_max"><span class="quote_mini">Analyse. Improve. Sustain</span></div>
          </li>
          <li>
              <div class="calltoaction">
                  <span class="quote">Without an experienced team to<br/> facilitate improvement,<br/> market leaders become followers</span>
                  <a href='<?php echo $relpath; ?>team'><div class="button">Read More &nbsp;<i class="icon-angle-right icon-large"></i></div></a>
              </div>
              <img src="<?php echo $relpath; ?>img/concept_photos/team.jpg" alt="">
              <div class="calltoaction_mini_max"><span class="quote_mini">Analyse. Improve. Sustain</span></div>
          </li>
        </ul>
    </div>
    
<?php } ?>

<!--========================= SECONDARY NAV =====================-->
<nav id="secondary-nav">
    <ul class="clearfix">
        <a href="<?php echo $relpath; ?>about-oim"><li>About OIM</li></a>
        <a href="<?php echo $relpath; ?>clients"><li>Clients</li></a>
        <a href="<?php echo $relpath; ?>team"><li>Team</li></a>
        <a href="<?php echo $relpath; ?>news"><li>News</li></a>
        <a href="<?php echo $relpath; ?>careers"><li>Careers</li></a>
        <a href="<?php echo $relpath; ?>partnerships"><li id="last">Partnerships</li></a>
    </ul>
</nav>
<!-- END Header Slideshow  -->
