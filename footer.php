<?php
  $lang = isset($_COOKIE['lang']) ? $_COOKIE['lang'] : "en";
  if ($lang != "en" || $lang != "tr") $lang = "en";
  include('lang.php');
?>
<footer>
  <div class="wrapper">
      <h4 class="logo">direction track</h4>
      <div class="item">
        <ul>
          <li><a href="/privacy/"><?php echo $footer['privacy'] ?></a></li>
          <li><a href="/terms/"><?php echo $footer['terms_of_service'] ?></a></li>
          <li><a href="/faq/"><?php echo $footer['faq'] ?></a></li>
          <li><a href="/contact/"><?php echo $footer['contact'] ?></a></li>
        </ul>
      </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/js/app.js"></script>

</body>

</html>