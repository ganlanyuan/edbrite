<?php include 'include/head.php'; ?>
<body>
<?php include 'include/mb-nav.php'; ?>
<div class="page">
  <div class="container">

    <div class="topic">
      <h2 id=""><span>components: </span>offcanvas</h2>
      <div data-icon-nav class="icon-nav">Menu</div>
      <pre><code class="language-scss">
.mb-nav {
  @include offcanvas(translate 300px '1em' left #102244 animation);
}
.page {
  @include page-container(translate left 300px);
}
      </code></pre>
    </div>
    
    <?php include "include/more-demos.php" ?>
  </div>
  <?php include "include/site-footer.php"; ?>
  <div data-page-cover=""></div>
</div>
</body>
</html>

