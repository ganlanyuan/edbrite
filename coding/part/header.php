<header class="site-head">
  <div class="container">
    <input type="checkbox" id="site-nav-toggle" class="hidden-checkbox">
    <label class="nav-icon" for="site-nav-toggle"><i class="abc-nav"></i></label>
    <h1 class="logo"><a href="">
      <svg role="img" title="EdBrite" width="161" height="51"><use xlink:href="#logo"></use></svg>
    </a></h1>
    <nav class="site-nav">
      <ul>
        <li <?php if ($pagename == 'index') { echo 'class="current"'; } ?> ><a href="index.php">Home</a></li>
        <li <?php if ($pagename == 'features') { echo 'class="current"'; } ?> ><a href="features.php">Features</a></li>
        <li <?php if ($pagename == 'tour') { echo 'class="current"'; } ?> ><a href="tour.php">Tour</a></li>
        <li <?php if ($pagename == 'pricing') { echo 'class="current"'; } ?> ><a href="pricing.php">Pricing</a></li>
        <li><a href="signup.php"><span class="btn btn-danger">Free Signup</span></a></li>
      </ul>
    </nav>
  </div>
</header>