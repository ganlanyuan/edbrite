<?php include 'part/head.php'; ?>
<body>
<?php include 'part/helper/no-js.php'; ?>
<?php include 'part/helper/browsehappy.php'; ?>
<?php include 'part/header.php'; ?>

<div class="banner banner-info banner-home">
  <div class="container">
    <figure>
      <svg role="img" title="intro" width="639" height="556"><use xlink:href="#intro"></use></svg>
    </figure>
    <div class="banner-content">
      <h2 class="title">Try <em>Edbrite</em>: Integrated LMS and SIS</h2>
      <p>EdBrite is an innovative E-Learning and Student Database platform designed institutions, education programs, and organizations with less than 500 students. </p>
      <p>It’s intutive design and affordable price point makes it easy for institutions to accelerate into education technology.</p>
      <div class="btn-group">
        <a href="" class="btn btn-danger">Free Signup</a><a href="features.php" class="btn btn-warning">Features</a>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <h2 class="h2">Ready to get started?</h2>
  <div class="tips home-tips">Sign up for a no obligation, free 3-month account.</div>
  <form action="" class="form-signup-3m form-home">
    <ol>
      <li>
        <div class="grid-2 required">
          <label for="first-name">First Name</label>
          <input type="text" id="first-name" class="full" required>
        </div>
        <div class="grid-2 required">
          <label for="last-name">Last Name</label>
          <input type="text" id="last-name" class="full" required>
        </div>
      </li>
      <li class="required">
        <label for="organization-name">Institution / Organization Name</label>
        <input type="text" id="organization-name" class="full" required>
      </li>
      <li class="required">
        <label for="job-title">Job Title</label>
        <input type="text" id="job-title" class="full" required>
      </li>
      <li>
        <div class="grid-2 required">
          <label for="email">E-mail Address</label>
          <input type="email" id="email" class="full" required>
        </div>
        <div class="grid-2 required">
          <label for="phone">Phone Number</label>
          <input type="tel" id="phone" class="full" required>
        </div>
      </li>
      <li>
        <label for="comment">Comment / Special Instructions</label>
        <textarea id="comment" class="full" cols="50" rows="7"></textarea>
      </li>
      <li class="submit-line">
        <label for="terms"><input id="terms" type="checkbox" checked> Agree to <a href="terms.php">Terms and Conditions</a></label>
        <input type="submit" value="Submit" class="btn btn-danger">
      </li>
    </ol>
  </form>
</div>

<?php include 'part/footer.php'; ?>
</body>
</html>
