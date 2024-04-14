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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/property.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Real-Estate</title>
</head>

<body>
    <?php include("header.php"); ?>
    <div class="prop-page">
        <div class="banner">
            <h1>Properties</h1>
        </div>
        <div class="cards-box">
            <?php foreach ($properties as $property): ?>
                <div class="card-prop">
                    <div class="img-div"><img src="data:image/jpeg;base64,<?php echo $property['image']; ?>" alt=""></div>
                    <div class="text-div">
                        <div>
                            <h3>
                                <?php echo $property['title']; ?>
                            </h3>
                            <p id="status">
                                <?php echo $property['status']; ?>
                            </p>
                        </div>
                        <p>
                            <?php echo $property['description']; ?>
                        </p>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php include("footer.php"); ?>
</body>

</html>