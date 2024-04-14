<?php
ini_set('session.cache_limiter', 'public');
session_cache_limiter(false);
session_start();
include("config.php");
$fetchQuery = "SELECT * FROM properties";
$result = mysqli_query($con, $fetchQuery);
$properties = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <title>Real Estate</title>
  <link rel="stylesheet" href="css/main.css">
  <link rel='stylesheet'
    href='https://cdn-uicons.flaticon.com/2.1.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>

</head>

<body>
  <?php include("header.php"); ?>
  <div class="page">
    <div class="page-p1">
      <div class="SearchBox">
        <h1>Let us Guide you <br> to Your Dream Home</h1>
        <form method="post" action="property.php">
          <select class="form-control" name="type">
            <option value="">Select Type</option>
            <option value="apartment">Apartment</option>
            <option value="flat">Flat</option>
            <option value="building">Building</option>
            <option value="house">House</option>
            <option value="villa">Villa</option>
            <option value="office">Office</option>
          </select>


          <select class="form-control" name="stype">
            <option value="">Select Status</option>
            <option value="rent">Rent</option>
            <option value="sale">Sale</option>
          </select>



          <input type="text" class="form-control" name="city" placeholder="Enter City" required>

          <button type="submit" name="filter" class="form-btn">Search Property</button>

        </form>
      </div>

    </div>
    <div class="page-p2">
      <div class="buy"></div>
      <div class="buy-text">
        <h5>BUY A HOME</h5>
        <h2>Find, Buy & Own Your <br> Dream Home</h2>
        <h4>Explore from Apartments, land, builder floors,<br> villas and more</h4>
        <button><a href="property.php">Explore Buying</a> </button>
      </div>

    </div>

  </div>
  <div class="page1">
    <h1>Browse House In India </h1>
    <div class="cards">
      <div class="card c1">
        <div class="card-text">
          <h4>Ready to Move in </h4>
          <p>Comfortable homes available for immediate use </p>
        </div>
      </div>
      <div class="card c2">
        <div class="card-text">
          <h4>Luxury</h4>
          <p>Premium housing for the lifestyle conscious</p>
        </div>
      </div>

      <div class="card c3 ">
        <div class="card-text">
          <h4>Affordable homes</h4>
          <p>Pocket friendly homes</p>

        </div>
      </div>




    </div>

    <a href="property.php"><button>Explore >></button></a>

  </div>
  <div class="page3" id="page3">
    <div class="about-banner">
      <h1>About us</h1>
    </div>
    <div class="about-text">
      <div class="text-i">
        <h1>Our Story</h1>
        <p>we embarked on our real estate journey with a shared passion for creating extraordinary experiences.
          Founded
          on the principles of integrity, dedication, and innovation, our story is woven with the threads of
          individual
          expertise and a collective commitment to redefine the real estate landscape.</p>
      </div>
      <div class="text-i">
        <h1>Mission Statement </h1>

        <b>
          <h5>Empowering Dreams, Elevating Lives:</h5>
        </b>
        <p>Guiding clients through seamless transactions, prioritizing satisfaction, and contributing positively to
          the
          communities we serve.</p>
        </h1>
      </div>

    </div>
  </div>

  <div class="page2" id="page2">
    <div class="add-image"></div>
    <div class="add-form">
      <h1>Add Property</h1>
      <form action="submitproperty.php" method="post" enctype="multipart/form-data">
        <!-- Add input fields for property details (e.g., title, image file, description) -->
        <label for="title">Title:</label>
        <input type="text" name="title" placeholder="Name of your property  or Place of your property " required>

        <label for="image">Image File:</label>
        <div class="file">

          <input type="file" id="text" name="image" accept="image/*" required>
        </div>
        <label for="status">Status:</label>
        <select name="status" required>
          <option value="" selected disabled hidden>Choose here</option>
          <option value="rent">Rent</option>
          <option value="sell">Sell</option>
        </select>
        <label for="description">Description:</label>
        <textarea name="description" rows="3" placeholder="Enter all your contact Details and Property details here "
          required></textarea>

        <button type="submit">Submit Property</button>
      </form>
    </div>
  </div>

  <div class="page4" id="page4">
    <?php include("contact.php"); ?>
  </div>


  <?php include("footer.php"); ?>
</body>

</html>