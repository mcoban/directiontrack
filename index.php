<?php
  $lang = isset($_COOKIE['lang']) ? $_COOKIE['lang'] : "en";
  if ($lang != "en" || $lang != "tr") $lang = "en";
  include('lang.php');
?>
<?php get_header() ?>

  <div class="hero">
    <div class="inner">
      <div class="title-bar-wrapper">
        <div class="title-inner">
          <h1 class="title"><?php echo $home[$lang]['h1'] ?></h1>
          <h2 class="subtitle"><?php echo $home[$lang]['h2'] ?></h2>
        </div>
      </div>
    </div>
  </div>
  <div class="three-columns">
    <div class="slogan">
      <h3><?php echo $home[$lang]['h3'] ?></h3>
    </div>
    <div class="text"><?php echo $home[$lang]['white_label'] ?></div>
    <div class="text"><?php echo $home[$lang]['all_in_one'] ?></div>
  </div>

  <div class="software-on-devices">
    <div><img src="<?php bloginfo('template_directory') ?>/img/ss/en/3.jpg" alt="Devices"></div>
    <div><img src="<?php bloginfo('template_directory') ?>/img/ss/en/4.jpg" alt="Devices"></div>
  </div>
  <div class="features">
    <div class="row">
      <div class="item">
        <h3 class="title"><?php echo $home[$lang]['feature_1_title'] ?></h3>
        <span><?php echo $home[$lang]['feature_1_desc'] ?></span>
      </div>
      <div class="item">
        <h3 class="title"><?php echo $home[$lang]['feature_2_title'] ?></h3>
        <span><?php echo $home[$lang]['feature_2_desc'] ?></span>
      </div>
      <div class="item">
        <h3 class="title"><?php echo $home[$lang]['feature_3_title'] ?></h3>
        <span><?php echo $home[$lang]['feature_3_desc'] ?></span>
      </div>
      <div class="item">
        <h3 class="title"><?php echo $home[$lang]['feature_4_title'] ?></h3>
        <span><?php echo $home[$lang]['feature_4_desc'] ?></span>
      </div>
    </div>
  </div>

  <div class="software-on-devices">
    <div><img src="<?php bloginfo('template_directory') ?>/img/ss/en/1.jpg" alt="Devices"></div>
    <div><img src="<?php bloginfo('template_directory') ?>/img/ss/en/2.jpg" alt="Devices"></div>
  </div>
  <div class="features">
    <div class="row">
      <div class="item">
        <h3 class="title"><?php echo $home[$lang]['feature_5_title'] ?></h3>
        <span><?php echo $home[$lang]['feature_5_desc'] ?></span>
      </div>
      <div class="item">
        <h3 class="title"><?php echo $home[$lang]['feature_6_title'] ?></h3>
        <span><?php echo $home[$lang]['feature_6_desc'] ?></span>
      </div>
      <div class="item">
        <h3 class="title"><?php echo $home[$lang]['feature_7_title'] ?></h3>
        <span><?php echo $home[$lang]['feature_7_desc'] ?></span>
      </div>
      <div class="item">
        <h3 class="title"><?php echo $home[$lang]['feature_8_title'] ?></h3>
        <span><?php echo $home[$lang]['feature_8_desc'] ?></span>
      </div>
    </div>
    <a class="get-demo">Get Demo</a>
  </div>




  <!--<div class="hero hero2">
    <div class="inner">
      <div class="title-bar-wrapper">
        <div class="title-inner">
          <h1 class="title">Best Fleet <br>Tracking Software</h1>
          <h2 class="subtitle">Manage and monitor your fleet with directiontrack SaaS</h2>
        </div>
      </div>
    </div>
  </div> -->
  
  <div class="prices-section">
    <h3 class="title">Competitor Prices</h3>
    <p class="short-text">
      To get started with your own service, select the edition you will need: Hosted, Cloud or On-Site.
    </p>
    <div class="choices">
      <div class="cloud">
        <img src="<?php bloginfo('template_directory') ?>/img/cloud.png" alt="Cloud" height="50">
        <h4 class="title"><?php echo $home[$lang]['pricing_opt1_title'] ?></h4>
        <ul>
          <li><?php echo $home[$lang]['pricing_opt1_feature_1'] ?></li>
          <li><?php echo $home[$lang]['pricing_opt1_feature_2'] ?></li>
          <li><?php echo $home[$lang]['pricing_opt1_feature_3'] ?></li>
          <li><?php echo $home[$lang]['pricing_opt1_feature_4'] ?></li>
        </ul>
        <span class="price">$2 / month</span>
      </div>
      <div class="onsite">
        <img src="<?php bloginfo('template_directory') ?>/img/power-cord.png" alt="On site" height="50">
        <h4 class="title">On-Site</h4>
        <ul>
          <li>Managed by Cloud Server</li>
          <li>Pay as you go</li>
          <li>30 day risk-free trial</li>
          <li>Update and Support</li>
        </ul>
        <span class="price">$1.5 / month</span>
      </div>
    </div>
  </div>

  <div id="brands">
    <h3>We support over 30+ gps tracking devices</h3>
    <span>And the list continues to grow! Choose device or suggest yours</span>
    <div class="logos">
      <a href="/brands/concox" class="item"><img src="<?php bloginfo('template_directory') ?>/img/brands/concox.png" alt="Concox" height="72"></a>
      <a href="/brands/cellocator" class="item"><img src="<?php bloginfo('template_directory') ?>/img/brands/cellocator.png" alt="Cellocator" height="72"></a>
      <a href="/brands/teltonika" class="item"><img src="<?php bloginfo('template_directory') ?>/img/brands/telteonika.png" alt="Teltonika" height="72"></a>
      <a href="/brands/minova" class="item"><img src="<?php bloginfo('template_directory') ?>/img/brands/minova.jpg" alt="Minova" height="72"></a>
    </div>

  </div>

  

<?php get_footer() ?>