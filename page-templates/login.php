<?php
  /*
    Template Name: Login Page
  */
?>

<?php get_header() ?>
  
  <div id="login-page">
    <form id="login-form" method="post">
      <label for="title">directiontrack</label>
      <input type="text" name="username" placeholder="Username">
      <input type="password" name="password" placeholder="Password">
      <input type="submit" value="Login">
    </form>
  </div>


<?php get_footer() ?>