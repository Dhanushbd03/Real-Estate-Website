<head>
  <link rel="stylesheet" href="css/contact.css"">
</head>
<section id="contact">
  <div class="contact-box">
    <div class="contact-links">
      <h2>CONTACT US</h2>
      <div class="links">
        <div class="link">
          <a><img class="img" src="https://i.postimg.cc/m2mg2Hjm/linkedin.png" alt="linkedin"></a>
        </div>
        <div class="link">
          <a><img class="img" src="https://i.postimg.cc/YCV2QBJg/github.png" alt="github"></a>
        </div>
        <div class="link">
          <a><img class="img" src="https://i.postimg.cc/W4Znvrry/codepen.png" alt="codepen"></a>
        </div>
        <div class="link">
          <a><img class="img" src="https://i.postimg.cc/NjLfyjPB/email.png" alt="email"></a>
        </div>
      </div>
    </div>
    <div class="contact-form-wrapper">
    <form action="contact_data.php" method="post">
        <div class="form-item">
          <input class="input" type="text" name="sender" required>
          <label class="label">Name:</label>
        </div>
        <div class="form-item">
          <input class="input" type="text" name="email" required>
          <label class="label">Email:</label>
        </div>
        <div class="form-item">
          <textarea class="textarea" name="message" required></textarea>
          <label class="label">Message:</label>
        </div>
        <button class="submit-btn">Send</button>
      </form>
    </div>
  </div>
  </section>