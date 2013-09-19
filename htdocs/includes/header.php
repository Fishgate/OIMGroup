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
        <div class="right details border-left"><i class="icon-linkedin oim-blue"></i></div>
        <div class="right details"><i class="icon-phone oim-blue" style="padding-right: 20px;"></i>+27 21 913 8814/5</div>
    </div>
    
</nav>


<!-- END MAIN NAV -->

<!-- Header Slideshow  -->
<div style="height: 370px; overflow: hidden;">
    <ul class="rslides" id="slider1" style="margin: 0 auto;">
      <li>
          <div class="calltoaction">
              <span class="quote">In an ever-changing world,<br />constant improvement is an integral part<br />of continued success</span>
              <div class="button">Read More &nbsp;<i class="icon-angle-right icon-large"></i></div>
          </div>
          <img src="<?php echo $relpath; ?>img/1.jpg" alt="">
      </li>
      <li>
          <div class="calltoaction">
              <span class="quote">Adventure Time!<br />with Jake the dog<br />and Fin the human</span>
              <div class="button">Read More &nbsp;<i class="icon-angle-right icon-large"></i></div>
          </div>
          <img src="<?php echo $relpath; ?>img/1.jpg" alt="">
      </li>
      <li>
          <div class="calltoaction">
              <span class="quote">Yoghurt Factory,<br />possibly the worst place<br />you could imagine</span>
              <div class="button">Read More &nbsp;<i class="icon-angle-right icon-large"></i></div>
          </div>
          <img src="<?php echo $relpath; ?>img/1.jpg" alt="">
      </li>
    </ul>
</div>
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
