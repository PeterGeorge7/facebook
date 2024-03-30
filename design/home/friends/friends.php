<?php
require "../../../controller/FriendsController.php";

if (!isset($_COOKIE['user_id'])) {
    header("location: ../../../login/login.php");
    die;
}

$Friends = new FriendsController();
$FriendsCount = $Friends->getfriendsCount();
$FreindsData = $Friends->getFriendsData();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Facebook profile Page</title>
    <link rel="stylesheet" href="../homepage.css">
    <link rel="stylesheet" href="../profile/profile.css">
    <link rel="stylesheet" href="friends.css">
</head>

<body>
    <header>
        <div class="logo">
            <img src="https://www.facebook.com/images/fb_icon_325x325.png" alt="Facebook Logo">
        </div>
        <div class="search">
            <input type="text" placeholder="Search Facebook">
            <button>Search</button>
        </div>
        <nav>
            <ul>
                <li><a href="../homepage.php">Home</a></li>
                <li><a href="../profile/profile.php">Profile</a></li>
                <li><a href="friends.php">Friends</a></li>
                <li><a href="messages.php">Messages</a></li>
                <li><a href="../logout.php">logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <?php while ($row = $FreindsData->fetch_assoc()) { ?>
            <div class="user_data_card">
                <div class="image">
                </div>
                <div class="info">
                    <h2 id="fullname"><?= $row['Fname'] ?> <?= $row['Lname'] ?></h2>
                    <p id="about"><?= (isset($row['About'])) ? $row['About'] : "" ?></p>
                </div>
            </div>
        <?php } ?>
    </main>
</body>

</html>