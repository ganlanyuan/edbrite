<?php include 'include/head.php'; ?>
<body>
<div class="page">
  <div class="container">

    <div class="topic">
      <h2 id=""><span>layout: </span>two columns</h2>
      <div class="example example-two-columns" data-margin>
        <div data-col-main>
          <div class="example-content" data-content>
            main
          </div>
        </div>
        <div data-col-aside>
          <div class="example-content" data-content>
            aside: 200px
          </div>
        </div>
      </div>
      <pre><code class="language-scss">
.example-two-columns { 
  @include two-columns(right 200px gutter 2%); 
  @include breakpoint('min' 800) {
    @include two-columns(left 300px gutter 2%);
  }
}
      </code></pre>
    </div>
    
    <?php include "include/more-demos.php" ?>
  </div>
  <?php include "include/site-footer.php" ?>
</div>
</body>
</html>

