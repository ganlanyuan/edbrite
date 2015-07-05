<?php include 'part/head.php'; ?>
<body>
<?php include 'part/helper/no-js.php'; ?>
<?php include 'part/helper/browsehappy.php'; ?>
<?php include 'part/header.php'; ?>

<div class="banner-info">
  <div class="container">
    <div class="banner-content">
      <h2>Try <em>Edbrite</em>: Integrated LMS and SIS</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur perferendis mollitia, vero labore asperiores libero saepe architecto quis qui illo.</p>
      <p>Dolorum, repellat, ex praesentium dolorem cupiditate minus minima obcaecati ducimus? Ipsam, recusandae harum numquam! Nisi quia, fugiat aut! Reiciendis, repellendus?</p>
      <div>
        <a href="" class="button-danger">Free Signup</a><a href="features.php" class="button-warning">Features</a>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <form action="" class="form-signup">
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
        <input type="text" id="organization-name" required>
      </li>
      <li class="required">
        <label for="job-title">Job Title</label>
        <input type="text" id="job-title" required>
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
        <input type="submit" value="Submit" class="button-danger">
      </li>
    </ol>
  </form>
</div>

<?php include 'part/footer.php'; ?>
</body>
</html>
