<link rel="stylesheet" href="css/header.css">
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.1.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
<header class="navbar" id="navbar">
    <div class="navlogo">
        <a href="index.php">
            <div class="img"></div>
        </a>

    </div>
    <div class="drop-down">
        <div class="center-div">
            <ul class="center-div-items">
                <li><a class="nav-link" href="index.php#page3">About</a></li>
                <li><a class="nav-link" href="index.php#page2">Sell</a></li>
                <li><a class="nav-link" href="property.php">Properties</a></li>
                <li><a class="nav-link" href="index.php#page4">Contact</a></li>
            </ul>
        </div>
        <div class="profile">
            <?php if (isset($_SESSION['uemail'])) { ?>
                <button><a href="logout.php" class="nav-link">Logout</a></button>&nbsp;&nbsp;
            <?php } else { ?>
                <button><a href="login.php" class="nav-link">Login / Register</a></button>&nbsp;&nbsp;
            <?php } ?>
        </div>
    </div>
    <a href="javascript:void(0);" class="icon" onclick="clickmenu()"><i class="fi fi-br-menu-burger"></i></a>
</header>
<script>
    function clickmenu() {
        var x = document.getElementById("navbar");
        if (x.className === "navbar") {
            x.className += " responsive";

        } else {
            x.className = "navbar";
        }
    }
</script>