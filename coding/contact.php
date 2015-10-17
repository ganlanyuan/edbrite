<?php include 'part/head.php'; ?>
<body>
<?php include 'part/helper/no-js.php'; ?>
<?php include 'part/helper/browsehappy.php'; ?>
<?php include 'part/header.php'; ?>

<div class="banner banner-info banner-section">
  <div class="container">
    <h2 class="h2">Contact Us</h2>
    <p>simplifies school management by bringing together administrative functions and student and classroom information in one simple, easy to use platform. Intuitive design and search reduce the time needed to complete common tasks, so administrators can quickly and easily </p>
  </div>
</div>

<div class="container">
  <figure class="avatar">
    <div class="avatar-wrapper"><img src="assets/svgs/man.png" alt="" width="260" height="387"></div>
    <figcaption>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, minus!</figcaption>
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
