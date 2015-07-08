<?php include 'part/head.php'; ?>
<body>
<?php include 'part/helper/no-js.php'; ?>
<?php include 'part/helper/browsehappy.php'; ?>
<?php include 'part/header.php'; ?>

<div class="banner banner-danger banner-section">
  <div class="container">
    <h2 class="h2">Free Signup</h2>
    <p>Sign up for a no abligation, free 3-month account.</p>
  </div>
</div>

<div class="container">
  <figure class="avatar">
    <div class="avatar-wrapper">
      <svg role="img" title="woman" width="260" height="387"><use xlink:href="#woman"></use></svg>
    </div>
    <figcaption>We're excited that you wanted to get started with Edbrite. Our support team is ready to answer any questions you may have about the system.</figcaption>
  </figure>
  <form action="" class="form-signup-3m contact-form">
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
        <input type="submit" value="Contact us" class="btn btn-warning">
      </li>
    </ol>
  </form>
</div>

<?php include 'part/footer.php'; ?>
</body>
</html>
