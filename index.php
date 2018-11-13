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
    <a href="mailto: sales@directiontrack.com" class="get-demo">Get Demo</a>
  </div>

  
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
        <span class="price">$2 / <?php echo $home[$lang]['pricing_opt1_feature_month'] ?></span>
      </div>
      <div class="onsite">
        <img src="<?php bloginfo('template_directory') ?>/img/power-cord.png" alt="On site" height="50">
        <h4 class="title"><?php echo $home[$lang]['pricing_opt2_title'] ?></h4>
        <ul>
          <li><?php echo $home[$lang]['pricing_opt2_feature_1'] ?></li>
          <li><?php echo $home[$lang]['pricing_opt2_feature_2'] ?></li>
          <li><?php echo $home[$lang]['pricing_opt2_feature_3'] ?></li>
          <li><?php echo $home[$lang]['pricing_opt2_feature_4'] ?></li>
        </ul>
        <span class="price">$1.5 / <?php echo $home[$lang]['pricing_opt2_feature_month'] ?></span>
      </div>
    </div>
  </div>

  <div id="options">
    <h3><?php echo $home[$lang]['options_title'] ?></h3>
    <table cell-spacing="0" border-spacing="0">
      <thead>
        <tr>
          <th></th>
          <th><?php echo $home[$lang]['pricing_opt1_title'] ?></th>
          <th><?php echo $home[$lang]['pricing_opt2_title'] ?></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="title"><?php echo $home[$lang]['option_table']['option_1'] ?></td>
          <td><img src="<?php bloginfo('template_directory') ?>/img/check.svg" alt="Check" height="16"></td>
          <td><img src="<?php bloginfo('template_directory') ?>/img/check.svg" alt="Check" height="16"></td>
        </tr>
        <tr>
          <td><?php echo $home[$lang]['option_table']['option_2'] ?></td>
          <td><img src="<?php bloginfo('template_directory') ?>/img/check.svg" alt="Check" height="16"></td>
          <td><img src="<?php bloginfo('template_directory') ?>/img/check.svg" alt="Check" height="16"></td>
        </tr>
        <tr>
          <td><?php echo $home[$lang]['option_table']['option_3'] ?></td>
          <td><img src="<?php bloginfo('template_directory') ?>/img/check.svg" alt="Check" height="16"></td>
          <td><img src="<?php bloginfo('template_directory') ?>/img/check.svg" alt="Check" height="16"></td>
        </tr>
        <tr>
          <td><?php echo $home[$lang]['option_table']['option_4'] ?></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><?php echo $home[$lang]['option_table']['option_5'] ?></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><?php echo $home[$lang]['option_table']['option_6'] ?></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><?php echo $home[$lang]['option_table']['option_7'] ?></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><?php echo $home[$lang]['option_table']['option_8'] ?></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><?php echo $home[$lang]['option_table']['option_9'] ?></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><?php echo $home[$lang]['option_table']['option_10'] ?></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><?php echo $home[$lang]['option_table']['option_11'] ?></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><?php echo $home[$lang]['option_table']['option_12'] ?></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><?php echo $home[$lang]['option_table']['option_13'] ?></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><?php echo $home[$lang]['option_table']['option_14'] ?></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><?php echo $home[$lang]['option_table']['option_15'] ?></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><?php echo $home[$lang]['option_table']['option_16'] ?></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><?php echo $home[$lang]['option_table']['option_17'] ?></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><?php echo $home[$lang]['option_table']['option_18'] ?></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><?php echo $home[$lang]['option_table']['option_19'] ?></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><?php echo $home[$lang]['option_table']['option_20'] ?></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><?php echo $home[$lang]['option_table']['option_21'] ?></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><?php echo $home[$lang]['option_table']['option_22'] ?></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><?php echo $home[$lang]['option_table']['option_23'] ?></td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>

  <div id="brands">
    <h3><?php echo $home[$lang]['brands_title'] ?></h3>
    <span><?php echo $home[$lang]['brands_desc'] ?></span>
    <div class="logos">
      <a href="/brands/concox" class="item"><img src="<?php bloginfo('template_directory') ?>/img/brands/concox.png" alt="Concox" height="72"></a>
      <a href="/brands/cellocator" class="item"><img src="<?php bloginfo('template_directory') ?>/img/brands/cellocator.png" alt="Cellocator" height="72"></a>
      <a href="/brands/teltonika" class="item"><img src="<?php bloginfo('template_directory') ?>/img/brands/telteonika.png" alt="Teltonika" height="72"></a>
      <a href="/brands/minova" class="item"><img src="<?php bloginfo('template_directory') ?>/img/brands/minova.jpg" alt="Minova" height="72"></a>
    </div>

  </div>

  

<?php get_footer() ?>